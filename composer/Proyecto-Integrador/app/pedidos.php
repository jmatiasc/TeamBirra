<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
  public $table="pedidos";
  public $timestamps=true;


  public function producto(){
    return $this->belongsTo('App\producto','id_producto');
  }

  public function usuario(){
    return $this->belongsTo('App\User','id_user');
  }

}
