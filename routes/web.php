<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//viewHome
Route::get('/', 'ViewController@index')->name('home');
Route::get('/trang-chu.html', 'ViewController@index');
Route::get('/about.html', 'ViewController@viewAbout')->name('about');
Route::get('/bao-cao.html', 'ViewController@viewNew')->name('new');
Route::get('/adversting.html', 'ViewController@viewAds')->name('ads');
Route::get('/support.html', 'ViewController@viewSupport')->name('support');
Route::get('/contact.html', 'ViewController@viewContact')->name('contact');
Route::get('news/{idLT}/{Ten}.html', 'ViewController@viewLoaitin')->name('loaitin');
Route::get('new/{idTin}/{TieuDe}.html', 'ViewController@viewChitiettin')->name('chitiettin');
Route::post('comment/{idTin}/{TieuDe}', 'ViewController@insertComment')->name('comment');

Route::get('/search', 'ViewController@search')->name('search');
Route::post('/lienhe', 'GuimailController@guimaillienhe');//

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/chagepermission/{id}/{idgroup}', 'UserController@chagePermission');


Route::group(['middleware' => ['auth','Role']], function(){
  Route::get('/admin', 'AdminController@index')->name('admin');
  Route::get('/dashboard', 'AdminController@index')->name('dashboard');
  Route::resource('/theloai', 'TheloaiController');
  Route::resource('/loaitin', 'LoaitinController');
  Route::resource('/comment', 'CommentController');
  Route::resource('/user', 'UserController');
  Route::resource('/tag', 'TagController');
  Route::resource('/tin', 'TinController');
  Route::post('ckeditor/image_upload', 'TinController@upload')->name('upload');
  Route::get('/layloaitintrong1theloai/{idTL}', function($idTL){
   $kq = DB::select("SELECT idLT, Ten FROM loaitin WHERE idTL=$idTL");
   foreach($kq as $row)
   echo "<option value={$row->idLT}> {$row->Ten} </option>";
  });
});
