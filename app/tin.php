<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
  protected $table='tin';
  protected $primaryKey='idTin';
  public $timestamps= false;
  protected $fillable = [
      'idTin',
      'TieuDe',
      'TomTat',
      'urlHinh',
      'Ngay',
      'idUser',
      'idTL',
      'idLT',
      'SoLanXem',
      'TinNoiBat',
      'AnHien',
      'tags',
      'Content',
  ];

  public function loaitin(){
      return $this->belongsTo('App\loaitin','idLT','idLT');
  }
  public function theloai(){
      return $this->belongsTo('App\theloai','idTL','idTL');
  }
  public function editor(){
      return $this->belongsTo('App\User','idUser','id');
  }

}
