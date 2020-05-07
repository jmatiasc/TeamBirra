<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
  public $table="ventas";
  public $timestamps=true;


  public function producto(){
    return $this->belongsTo('App\producto','id_producto');
  }

  public function usuarios(){
    //devuelve el carrito al que pertenece
    return $this->belongsTo('App\users','id_user');
  }

}
