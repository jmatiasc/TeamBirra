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

  public function mostrarEditarDatos($id){
    $user=User::find($id);
    $vac=compact('user');
    return view('/editarDatosUsuario',$vac);
  }

  public function editarDatos(Request $request, $id){
        $user=User::find($id);

        $reglas=[
              "name"=>"string|min:1|max:255",
              "email"=>"max:255|min:0|email",
              "apellido"=>"string|min:1|max:255",
              "dni"=>"integer|min:0",
              "nickName"=>"string|min:1|max:255",
              "direccion"=>"string|min:1|max:255",
              "telefono"=>"integer",
        ];

        $mensajes=[
          "string"=>"El campo :attrubute debe ser un texto",
          "min"=>"El campo :attrubute tiene un minimo de :min",
          "max"=>"El campo :attrubute debe tener un maximo de :max",
          "integer"=>"El campo :attrubute debe ser un número entero",
          "unique"=>"El campo :attrubute ya existe",
        ];

        $this->validate($request,$reglas,$mensajes);

        //guardo el nombre del producto
        $user->name=$request["name"];
        //guardo la marca del producto
        $user->apellido=$request["apellido"];
        //guardo la color del producto
        $user->nickName=$request["nickName"];
        //guardo la estilo del producto
        $user->telefono=$request["telefono"];
        //guardo la origen del producto
        $user->email=$request["email"];
        //guardo la precio del producto
        $user->direccion=$request["direccion"];
        //guardo la descripcion del producto
        $user->dni=$request["dni"];


        $user->save();

        $vac=compact('user');
        return view('/perfilUsuario',$vac);

  }

}
