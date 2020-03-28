<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
  public $table="carrito";
  public $primaryKey="id";
  public $timestamps=false;


  public function getProductos(){
    return $this->hasMany('App\producto','carrito');
  }

  public function getUser(){
    return $this->belongsTo('App\User','user');
  }
}
