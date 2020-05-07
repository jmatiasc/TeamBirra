<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
  public $table="carrito";
  public $timestamps=false;


  public function producto(){
    return $this->belongsTo('App\producto','id_producto');
  }

  public function usuarios(){
    //devuelve el carrito al que pertenece
    return $this->belongsTo('App\users','id_user');
  }

}
