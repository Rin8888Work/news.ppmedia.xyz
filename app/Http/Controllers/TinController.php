<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\loaitin;
use App\tin;
use App\yKien;
class TinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ds = tin::orderby('Ngay','desc')->get();
      return view('admin.tin.index', compact('ds'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theloai = theloai::all();
        $loaitin = loaitin::all();
        return view('admin.tin.create',compact('theloai','loaitin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $arr= explode("/",$request->get('Ngay'));
      if (count($arr)==3) $n = $arr[2]."-". $arr[1]."-".$arr[0];
      else $n = date("Y-m-d");
      $get_image = $request->file('urlHinh');
      if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image . rand(0,999).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('upload/images',$new_image);
        $tl = new tin([
          'TieuDe' => $request->get('TieuDe'),
          'Ngay' => date("Y-m-d"),
          'TomTat' => $request->get('TomTat'),
          'Ngay' => $n  ,
          'Content' => $request->get('content'),
          'idTL' => $request->get('idTL'),
          'idLT' => $request->get('idLT'),
          'TinNoiBat' => $request->get('TinNoiBat'),
          'AnHien' => $request->get('AnHien'),
          'lang' => $request->get('lang'),
          'tags' => $request->get('tag'),
          'urlHinh' => 'upload/images/'.$new_image,
        ]);
        $tl->save();
        return redirect('/tin')->with('success','Bài viết đã được lưu');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $theloai = theloai::all();
      $loaitin = loaitin::all();
      $row = tin::find($id);
     return view('admin.tin.edit', compact('row','theloai','loaitin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id) {
        $arr= explode("/",$request->get('Ngay'));
        if (count($arr)==3) $n = $arr[2]."-". $arr[1]."-".$arr[0];
        else $n = date("Y-m-d");
        $t = tin::find($id);
        $t->TieuDe = $request->get('TieuDe');
        $t->TomTat = $request->get('TomTat');
        $t->Ngay = $n;
        $t->idTL = $request->get('idTL');
        $t->idLT = $request->get('idLT');
        $t->lang = $request->get('lang');
        $t->AnHien = $request->get('AnHien');
        $t->TinNoiBat = $request->get('TinNoiBat');
        $t->tags = $request->get('tag');
        $t->Content = $request->get('content');
        $get_image = $request->file('urlHinh');
        if($get_image){
          $get_name_image = $get_image->getClientOriginalName();
          $name_image = current(explode('.',$get_name_image));
          $new_image = $name_image . rand(0,999).'.'.$get_image->getClientOriginalExtension();
          $get_image->move('upload/images',$new_image);
          $t->urlHinh = 'upload/images/'.$new_image;
          }
        $t->save();
        return redirect('/tin')->with('success','Cập nhật tin thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $tl = tin::find($id);
      $ykien = yKien::where('idTin',$id)->get();
      if($ykien == null){
        $tl->delete();
        return redirect('/tin')->with('success', 'Đã xóa xong');
      }else{
        return redirect('/tin')->with('success', 'Không thể xóa khi ý kiến còn');
      }

    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
