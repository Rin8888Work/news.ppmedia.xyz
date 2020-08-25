<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaitin;
use App\theloai;
class LoaiTinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ds = loaitin::all();
      return view('admin.loaitin.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theloai = theloai::orderby('ThuTu','desc')->get();
        return view('admin.loaitin.create',compact('theloai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $lt = new loaitin([
        'Ten' => $request->get('TenLT'),
        'ThuTu' => $request->get('ThuTu'),
        'AnHien' => $request->get('AnHien'),
        'idTL' => $request->get('idTL'),
        'lang' => $request->get('lang'),
      ]);
      $lt->save();
      return redirect('/loaitin')->with('success','Loại tin đã được lưu');
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
      $row = loaitin::find($id);
      return view('admin.loaitin.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $lt = loaitin::find($id);
      $lt->Ten =  $request->get('TenLT');
      $lt->ThuTu = $request->get('ThuTu');
      $lt->AnHien = $request->get('AnHien');
      $lt->idTL = $request->get('idTL');
      $lt->lang = $request->get('lang');
      $lt->save();
      return redirect('/loaitin')->with('success','Cập nhật thành công!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $lt = loaitin::find($id);
      if($lt->tin()->get()->toArray() == null){
        $lt->delete();
        return redirect('/loaitin')->with('success', 'Đã xóa xong');
      }else{
        return redirect('/loaitin')->with('success', 'Không thể xóa khi  tin còn');
      }
    }
}
