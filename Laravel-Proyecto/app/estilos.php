<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estilos extends Model
{
  public $table="estilos";
  public $primaryKey="id";
  public $timestamps=false;

  public function getProductos(){
    return $this->hasMany('App\producto','estilo');
  }
}
