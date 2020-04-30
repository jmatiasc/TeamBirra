<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use App\marcas;
use App\estilos;
use App\colores;
use App\origenes;
use App\carrito;
use App\User;
use App\Rules\adminPass;


class userController extends Controller
{

  public function perfilDeUsuario($id){
    $users=User::all()->where("id","=",$id);
    $user=$users->first();
    $vac=compact('user');
    return view('/perfilUsuario',$vac);
  }

  public function agregarAdmin(Request $req,$id){

      $users=User::all()->where("id","=",$id);
      $user=$users->first();


      if($req["valor_admin"]=="digital"){

        User::all()->where("id","=",$id);
        $user->es_admin=1;
        $user->save();
      }

      $vac=compact('user');
      return view('/perfilUsuario',$vac);
  }

}
