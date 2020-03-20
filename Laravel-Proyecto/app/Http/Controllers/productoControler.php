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


        $orden="asc";
        $cant="9";
        if(isset($_GET["orden"])){
          $orden=$_GET["orden"];}

        if(isset($_GET["cantidad"])){
          $cant=$_GET["cantidad"];}


          $productos=Producto::orderBy('precio',$orden)
          ->where("marca",'LIKE',"%$marca%")
          ->where("origen",'LIKE',"%$origen%")
          ->where("estilo",'LIKE',"%$estilo%")
          ->where("color",'LIKE',"%$color%")
          ->paginate($cant);


      $vac=compact("productos");

      return view("catalogo",$vac);
    }


    public function unProducto($id){

        $producto= Producto::find($id);
        $vac=compact("producto");
        return view("producto ",$vac);
    }

    public function agregarProducto(Request $request){
      $productoNuevo= new Producto();

      $ruta = $request->file("imagen")->store("public");
      $nombreArchivo=basename($ruta);
      $productoNuevo->imagen=$nombreArchivo;

      $productoNuevo->nombre=$request["nombre"];
      $productoNuevo->marca=$request["marca"];
      $productoNuevo->color=$request["color"];
      $productoNuevo->estilo=$request["estilo"];
      $productoNuevo->origen=$request["origen"];
      $productoNuevo->precio=$request["precio"];
      $productoNuevo->enOferta=$request["enOferta"];
      $productoNuevo->descripcion=$request["descripcion"];


      $productoNuevo->save();
        return redirect("/catalogo");
    }


}
