<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class yKien extends Model
{
  protected $table='yKien';
  protected $primaryKey='idYKien';
  protected $fillable = [
      'idYKien',
      'idTin',
      'Ngay',
      'NoiDung',
      'Email',
      'HoTen',
      'AnHien'
  ];

  public function tin(){
    return $this->belongsTo('App\tin','idTin','idTin');
  }
}
