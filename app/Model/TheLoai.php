<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
  protected $table = 'theloai';
  protected $primaryKey = 'idTL';
  protected $fillable = ['idTL','idLT'];

  public function loaitinmenu(){
    return $this->hasMany('App\Model\LoaiTin', 'idTL', 'idTL');
  }
}
