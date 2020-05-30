<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marcas extends Model
{
  public $table="marcas";
  public $primaryKey="id";
  public $timestamps=false;

  public function productos(){
    return $this->hasMany('App\producto','marca');
  }


  //Scope

  public function scopeNombre($query, $nombre){
      if($nombre)
      return $query->where('nombre','like',"%$nombre%");
  }

}
