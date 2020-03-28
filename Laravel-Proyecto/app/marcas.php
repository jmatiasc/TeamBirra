<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marcas extends Model
{
  public $table="marcas";
  public $primaryKey="id";
  public $timestamps=false;

  public function getProductos(){
    return $this->hasMany('App\producto','marca');
  }
}
