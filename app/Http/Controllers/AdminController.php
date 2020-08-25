<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\theloai;
use App\Model\tin;
use App\Model\loaitin;
class AdminController extends Controller
{
    public function index(){
      $theloai = theloai::all()->count();
      $tin = tin::all()->count();
      $loaitin = loaitin::all()->count();
      $user = User::all()->count();
      return view('admin.dashboard',compact('theloai','tin','loaitin','user'));
    }
}
