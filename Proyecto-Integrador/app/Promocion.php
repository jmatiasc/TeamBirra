<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
  public $table="Promociones";
  public $primaryKey="id";

  public function producto(){
    //devuelve el carrito al que pertenece
    return $this->belongsTo('App\Producto','id_producto');
  }


}
