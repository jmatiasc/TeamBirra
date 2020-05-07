<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colores extends Model
{
  public $table="colores";
  public $primaryKey="id";
  public $timestamps=false;

  public function productos(){
    return $this->hasMany('App\producto','id_color');
  }

}
