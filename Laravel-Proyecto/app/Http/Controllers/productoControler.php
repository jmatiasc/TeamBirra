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
          ->where("carrito",'=',NULL)
          ->paginate($cant);

        /*$productos= $productos->unique('nombre');
            $productos= $productos->paginate($cant);*/


          $marcas=marcas:: all();
          $estilos=estilos::all();
          $colores=colores::all();
          $origenes=origenes::all();
          $vac=compact("productos","marcas","estilos","colores","origenes");

      return view("catalogo",$vac);
    }


    public function unProducto($id){

        $producto= Producto::find($id);
        $marcas=marcas:: all();
        $estilos=estilos::all();
        $colores=colores::all();
        $origenes=origenes::all();
        $vac=compact("producto","marcas","estilos","colores","origenes");

        return view("producto ",$vac);
    }

    public function agregarProducto(Request $request){
      for ($i = 0; $i < $request["cantidad"]; $i++)
      {
                $productoNuevo= new Producto();

                $ruta = $request->file("imagen")->store("public");
                $nombreArchivo=basename($ruta);
                $productoNuevo->imagen=$nombreArchivo;

                $productoNuevo->nombre=$request["nombre"];


                //-----MARCA----
                if($request["marca"]=="otro"){
                  $marca=marcas:: all()->where('nombre','=',$request["marcaOtro"]);

                    if($marca->isEmpty()){
                        $nuevaMArca= new marcas();
                        $nuevaMArca->nombre=$request["marcaOtro"];
                        $nuevaMArca->save();
                        $productoNuevo->marca=$nuevaMArca["id"];
                        }
                        else
                        {
                          $productoNuevo->marca=$marca[1]->id;}
                }else
                  {
                    $productoNuevo->marca=$request["marca"];}

                    //----COLOR----

                    if($request["color"]=="otro"){
                      $color=colores::all()->where('nombre','=',$request["colorOtro"]);

                      if($color->isEmpty())
                          {$nuevoColor= new colores();
                          $nuevoColor->nombre=$request["colorOtro"];
                          $nuevoColor->save();
                          $productoNuevo->color=$nuevoColor["id"];}
                          else{
                            $productoNuevo->color=$color[1]->id;}

                    }else
                      {
                        $productoNuevo->color=$request["color"];}

                        //-----ESTILO---
                        if($request["estilo"]=="otro"){

                          $estilo=estilos::get()->where('nombre','=',$request["estiloOtro"]);
                          if($estilo->isEmpty())

                                {  $nuevoEstilo= new estilos();
                                  $nuevoEstilo->nombre=$request["estiloOtro"];
                                  $nuevoEstilo->save();
                                  $productoNuevo->estilo=$nuevoEstilo["id"];}
                                  else
                                    {
                                      $productoNuevo->estilo=$estilo[2]->id;}
                        }else
                          {
                            $productoNuevo->marca=$request["estilo"];}



                            if($request["origen"]=="otro"){
                              $origen=origenes::all()->where('nombre','=',$request["origenOtro"]);

                              if($origen->isEmpty())
                              {$nuevoOrigen= new origenes();
                              $nuevoOrigen->nombre=$request["origenOtro"];
                              $nuevoOrigen->save();
                              $productoNuevo->origen=$nuevoOrigen["id"];}
                              else
                                {
                                  $productoNuevo->origen=$origen[0]->id;}
                            }else
                              {
                                $productoNuevo->origen=$request["origen"];}



                $productoNuevo->precio=$request["precio"];
                $productoNuevo->descripcion=$request["descripcion"];
                  $productoNuevo->carrito=NULL;
                //$productoNuevo->carrito='NULL';


                $productoNuevo->save();

            }

        return redirect("/catalogo");
    }

    public function formAgregarProductos(){
        $marcas=marcas:: all();
        $estilos=estilos::all();
        $colores=colores::all();
        $origenes=origenes::all();
        $vac=compact("marcas","estilos","colores","origenes");
        return view("productoUpdate ",$vac);
    }


    public function agregarCarrito($idUser=NULL,$idProducto=NULL){

      if($idUser==NULL){
        return redirect('login');
      }
        $producto= Producto::find($idProducto);
        $user=User::find($idUser);

        if($user->carrito==NULL)
          {

          $nuevoCarrito= new carrito();
          $nuevoCarrito->id=$user->id;
          $nuevoCarrito->user=$user->id;
          $user->carrito=$nuevoCarrito->id;
          //dd($user->carrito);
          $nuevoCarrito->save();
          $user->update(request()->all());

        }


        //tabla con todos los productos que tienen el id del carrito

        if ($producto!=NULL) {
          $producto->carrito=$user->carrito;
          $producto->update(request()->all());
        }

        $productos= $user->getCarrito->getProductos;
        /*Producto::where("carrito",'=',$user->carrito)->paginate(10);*/

        $marcas=marcas:: all();
        $estilos=estilos::all();
        $colores=colores::all();
        $origenes=origenes::all();
        $vac=compact("productos","marcas","estilos","colores","origenes","user");

      return view("carrito",$vac);


    }


    public function eliminarDeCarrito($idUser,$idProducto){
          $user=User::find($idUser);
          $producto= Producto::findOrFail($idProducto);
          $producto->carrito=NULL;
          $producto->update(request()->all());
          $productos= Producto::where("carrito",'=',$user->carrito)->paginate(10);
          $vac=compact("productos","user");
          return view("carrito",$vac);

    }


}
