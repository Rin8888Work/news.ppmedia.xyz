<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{

  protected $table = 'tin';
  protected $primaryKey = 'idTin';
  protected $fillable = ['idTin','idLT','idTL'];

  public function loaitin(){
    return $this->belongsTo('App\Model\LoaiTin', 'idLT', 'idLT');
  }

  public function ykien(){
    return $this->hasMany('App\Model\YKien', 'idTin', 'idTin');
  }



}
