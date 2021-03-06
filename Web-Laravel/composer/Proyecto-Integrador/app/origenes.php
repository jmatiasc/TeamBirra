<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class origenes extends Model
{
  public $table="origenes";
  public $primaryKey="id";
  public $timestamps=false;

  public function productos(){
    return $this->hasMany('App\producto','id_origen');
  }

  //Scope
  public function scopeNombre($query, $nombre){
      if($nombre)
      return $query->where('nombre','like',"%$nombre%");
  }
}
