<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  public $table="productos";
  public $primaryKey="id";
  public $timestamps=false;
/*
public function carrito(){
  //devuelve el carrito al que pertenece
  return $this->belongsTo('App\carrito','carrito');
}*/
public function color(){
  //devuelve el carrito al que pertenece
  return $this->belongsTo('App\colores','id_color');
}
public function origen(){
  //devuelve el carrito al que pertenece
  return $this->belongsTo('App\origenes','id_origen');
}

public function estilo(){
  //devuelve el carrito al que pertenece
  return $this->belongsTo('App\estilos','id_estilo');
}

public function marca(){
  //devuelve el carrito al que pertenece
  return $this->belongsTo('App\marcas','id_marca');
}
}
