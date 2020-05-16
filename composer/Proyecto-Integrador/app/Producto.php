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


  //Scope
  public function scopeNombre($query, $nombre){
      if($nombre)
      return $query->where('nombre','like',"%$nombre%");
  }


  public function scopeInformacion($query, $info){
      if($info)
      return $query->where('informacion','like',"%$info%");
  }

  public function scopeMarca($query, $marca){

      if($marca)
      return $query->where("marca",'like',"%$marca%");
  }


  public function scopeEstilo($query, $info){
      if($info)
      return $query->where('informacion','like',"%$info%");
  }
  public function scopeOrigen($query, $nombre){
      if($nombre)
      return $query->where('nombre','like',"%$nombre%");
  }


  public function scopeColor($query, $info){
      if($info)
      return $query->where('informacion','like',"%$info%");
  }

}
