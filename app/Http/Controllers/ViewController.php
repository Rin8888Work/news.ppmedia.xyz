<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TheLoai;
use App\Model\LoaiTin;
use App\Model\Tin;
use App\Model\YKien;
use Str;
use Redirect;
class ViewController extends Controller
{
  public function index(Tin $tin){
    $tinnong = $tin->where('lang','vi')
    ->where('AnHien',1)
    ->orderby('SoLanXem','desc')
    ->take(10)
    ->get();

    $tinnoibat = $tin->where('lang','vi')
    ->where('AnHien',1)
    ->where('TinNoiBat',1)
    ->orderby('Ngay','desc')
    ->take(3)
    ->get();

    $tinnoibat1 = $tin->where('lang','vi')
    ->where('AnHien',1)
    ->where('TinNoiBat',1)
    ->orderby('SoLanXem','desc')
    ->first();

    $new = LoaiTin::all()
    ->where('lang','vi')
    ->take(5);//

    $latest_new = $tin->inRandomOrder()
    ->where('lang','vi')
    ->orderby('Ngay')
    ->take(4)
    ->get();

    $tinxemnhieu = $tin->where('lang','vi')
    ->where('AnHien',1)
    ->orderby('SoLanXem')
    ->take(4)
    ->get();

    $post_from_cate = LoaiTin::where('AnHien',1)
    ->where('lang','vi')
    ->take(4)
    ->get();

    $tinall = $tin->where('AnHien',1)
    ->where('lang','vi')
    ->orderby('Ngay')
    ->paginate(6);

    $loaitin = LoaiTin::where('AnHien',1)
    ->where('lang','vi')
    ->orderby('Ten','desc')
    ->take(15)
    ->get();

    $tindexuat = Tin::inRandomOrder()
    ->where('AnHien',1)
    ->where('lang','vi')
    ->orderby('SoLanXem','desc')
    ->take(2)
    ->get();

    return view('index',compact('new','tinnong','tinnoibat','tinnoibat1','latest_new','tinxemnhieu','post_from_cate','tinall','loaitin','tindexuat'));
  }

  public function viewAbout(){
    return view('pages.about');
  }

  public function viewNew(){
    return view('pages.baocao');
  }

  public function viewAds(){
    return view('pages.ads');
  }

  public function viewSupport(){
    return view('pages.support');
  }

  public function viewContact(){
    return view('pages.contact');
  }

  public function viewLoaitin($idLT){

    $loaitin = LoaiTin::where('idLT',$idLT)
    ->where('lang','vi')
    ->first();

    $tinxemnhieu = Tin::where('AnHien',1)
    ->where('lang','vi')
    ->orderby('SoLanXem')
    ->take(4)
    ->get();

    $tin = Tin::inRandomOrder()
    ->where('lang','vi')
    ->where('AnHien', '=', 1)
    ->where('tin.idLT',$idLT)
    ->orderBy('Ngay')
    ->paginate(4);

    return view('pages.loaitin',compact('loaitin','tin','tinxemnhieu'));
  }

  public function viewChitiettin($idTin){
    $post = Tin::findOrFail($idTin);
    $post->increment('SoLanXem');
    $tinxemnhieu = Tin::where('AnHien',1)
    ->where('lang','vi')
    ->orderby('SoLanXem')
    ->take(4)
    ->get();

    $comment = YKien::all()
    ->where('idTin',$idTin);
    $count_comment = $comment->count();

    $chitiettin = Tin::where('idTin', '=', $idTin)
    ->where('AnHien',1)
    ->where('lang','vi')
    ->first();

    $tag = Tin::where('idTin', '=', $idTin)
    ->where('AnHien',1)
    ->where('lang','vi')
    ->value('tags');
    $tags = explode(',',$tag);

    $idLT = $chitiettin->idLT;
    $tinlienquan = Tin::where('idLT',$idLT)
    ->get();

    return view('pages.chitiettin',compact('chitiettin','tinxemnhieu','tags','comment','tinlienquan','count_comment'));
  }

  public function requestAjax(){
    return view('pages.loaitin');
  }

  public function insertComment(Request $request,$idTin,$TieuDe){
    $ykien = new YKien;
    $ykien->HoTen = $request->name;
    $ykien->idTin = $idTin;
    $ykien->email = $request->email;
    $ykien->NoiDung = $request->comment;
    $ykien->Ngay = date("Y-m-d");
    $ykien->save();
    return redirect()->route('chitiettin',['idTin' =>$idTin,'TieuDe' => $TieuDe]);
  }

  public function search(Request $request){
    $key = $request->name;
    $tinSearch = Tin::where('TieuDe','LIKE', '%' . $key . '%')->paginate(4);
    $tin = Tin::where('TieuDe','LIKE', '%' . $key . '%')->get();
    $countTin = $tin->count();
    $tinxemnhieu = Tin::where('AnHien',1)
    ->where('lang','vi')
    ->orderby('SoLanXem')
    ->take(4)
    ->get();
    return view('pages.search',compact('tinSearch','countTin','tinxemnhieu','key'));
  }
}
