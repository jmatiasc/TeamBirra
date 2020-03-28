<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

  public $table="productos";
  public $primaryKey="id";
  public $timestamps=false;

public function carrito(){
  //devuelve el carrito al que pertenece
  return $this->belongsTo('App\carrito','carrito');
}
public function getColor(){
  //devuelve el carrito al que pertenece
  return $this->belongsTo('App\colores','color');
}
public function getOrigen(){
  //devuelve el carrito al que pertenece
  return $this->belongsTo('App\origenes','origen');
}
public function getEstilo(){
  //devuelve el carrito al que pertenece
  return $this->belongsTo('App\estilos','estilo');
}

public function getMarca(){
  //devuelve el carrito al que pertenece
  return $this->belongsTo('App\marcas','marca');
}
}
