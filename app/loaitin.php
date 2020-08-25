<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
  protected $table='loaitin';
  protected $primaryKey='idLT';
  protected $fillable = [
    'idLT',
    'Ten',
    'ThuTu',
    'AnHien',
    'lang',
    'idTL'
  ];
  public function theloai(){
    return $this->belongsTo('App\theloai','idTL','idTL');
  }

  public function tin(){
    return $this->belongsTo('App\tin','idLT','idLT');
  }
}
