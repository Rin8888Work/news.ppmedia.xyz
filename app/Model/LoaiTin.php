<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $table = 'loaitin';
    protected $primaryKey = 'idLT';
    protected $fillable = ['idLT','idTL'];

    public function theloai(){
      return $this->belongsTo('App\Model\TheLoai', 'idTL', 'idTL');
    }

    public function tin(){
      return $this->hasMany('App\Model\Tin', 'idLT', 'idLT');
    }

}
