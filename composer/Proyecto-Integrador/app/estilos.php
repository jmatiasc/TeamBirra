<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estilos extends Model
{
  public $table="estilos";
  public $primaryKey="id";
  public $timestamps=false;

  public function productos(){
    return $this->hasMany('App\producto','estilo');
  }

  //Scope
  public function scopeNombre($query, $nombre){
      if($nombre)
      return $query->where('nombre','like',"%$nombre%");
  }
}
