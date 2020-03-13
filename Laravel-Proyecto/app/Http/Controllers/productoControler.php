<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class productoControler extends Controller
{


    public static  function listadoDeProductos(Request $request){


      //dd($request);


      //dd($_GET);
        $marca=$request->get('marca');
        $origen=$request->get('origen');
        $estilo=$request->get('estilo');
        $color=$request->get('color');



          $productos=Producto::orderBy('nombre','DESC')
          ->where("marca",'LIKE',"%$marca%")
          ->where("origen",'LIKE',"%$origen%")
          ->where("estilo",'LIKE',"%$estilo%")
          ->where("color",'LIKE',"%$color%")
          ->paginate(9);


      $vac=compact("productos");

      return view("catalogo",$vac);
    }


    public function unProducto($id){

        $producto= Producto::find($id);
        $vac=compact("producto");
        return view("producto ",$vac);
    }




}
