<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelos usados
use App\Producto;
use App\marcas;
use App\estilos;
use App\colores;
use App\origenes;
use App\carrito;
use App\User;
use App\venta;

class productoController extends Controller
{

    public function mostrarAgregarProductos(){

        $marcas=marcas::orderBy('nombre','ASC')->get();
        $estilos=estilos::orderBy('nombre','ASC')->get();
        $colores=colores::orderBy('nombre','ASC')->get();
        $origenes=origenes::orderBy('nombre','ASC')->get();
        $vac=compact("marcas","estilos","colores","origenes");
      return view("/agregarProducto",$vac);
    }


    public function agregarProducto(Request $request){

      $reglas=[
            "nombre"=>"string|min:1|unique:productos,nombre",
            "precio"=>"integer|min:0",
            "informacion"=>"string|min:0|max:200",
            "graduacionAlcoholica"=>"integer|min:0",
            "volumen"=>"integer|min:0",
      ];

      $mensajes=[
        "string"=>"El campo :attribute debe ser un texto",
        "min"=>"El campo :attribute tiene un minimo de :min",
        "max"=>"El campo :attribute debe tener un maximo de :max",
        "integer"=>"El campo :attribute debe ser un número entero",
        "unique"=>"El campo :attribute ya existe",
      ];

      $this->validate($request,$reglas,$mensajes);

        $marca=marcas::find($request["marca"]);
        if($marca==NULL){
          $marca=new marcas();
          $marca->nombre=$request["marca"];
          $marca->save();
        }


        $estilo=estilos::find($request["estilo"]);
        if($estilo==NULL){
          $estilo=new estilos();
          $estilo->nombre=$request["estilo"];
          $estilo->save();
        }

        $color=colores::find($request["color"]);
        if($color==NULL){
          $color=new colores();
          $color->nombre=$request["color"];
          $color->save();
        }

        $origen=origenes::find($request["origen"]);
        if($origen==NULL){
          $origen=new origenes();
          $origen->nombre=$request["origen"];
          $origen->save();
        }

        //Creo nuevo producto
        $productoNuevo= new Producto();

        if($request->file("imagen")!=NULL){
        //Capturo el orchivo de imagen
        $ruta = $request->file("imagen")->store("public");
        //saco la ruta donde se encuentra el archivo
        $nombreArchivo=basename($ruta);
        //guardo la ruta en el nuevo producto
        $productoNuevo->imagen=$nombreArchivo;}
        else {
            $productoNuevo->imagen="no existe imagen";
        }

        //guardo el nombre del producto
        $productoNuevo->nombre=$request["nombre"];
        //guardo la marca del producto
        $productoNuevo->id_marca=$marca->id;
        //guardo la color del producto
        $productoNuevo->id_color=$color->id;
        //guardo la estilo del producto
        $productoNuevo->id_estilo=$estilo->id;
        //guardo la origen del producto
        $productoNuevo->id_origen=$origen->id;
        //guardo la precio del producto
        $productoNuevo->precio=$request["precio"];
        //guardo la descripcion del producto
        $productoNuevo->informacion=$request["informacion"];
        //guardo la graduacion alcoholica del producto
        $productoNuevo->graduacion_alcoholica=$request["graduacionAlcoholica"];
        //guardo el volumen del producto
        $productoNuevo->volumen=$request["volumen"];
        //guardo el stock del productos
        $productoNuevo->stock=$request["stock"];
        //inicializo la puntuacion en cero--->cambiar, esto se debe hacer en las migraciones
        $productoNuevo->puntuacion=0;


        $productoNuevo->save();


        // hay que mejorar la persistencia en casi de que exista un error,
        //hay que volver a cargar las tablas de marcas,origenes...???¿¿¿
        //uso este return redirect("/agregarProducto");???



      return redirect("/producto/$productoNuevo->id");

    }



    //METODOS PARA MODIFICAR PRODUCTOS EXISTENTES



    public function mostrarParaModificarProductos(Request $request){


              $busqueda=$request->get('busqueda');

              if($busqueda)
                {

                    $busquedaMarca=marcas::where("nombre",'LIKE',"%$busqueda%")->get()->toArray();
                    $busquedaOrigenes=origenes::where("nombre",'LIKE',"%$busqueda%")->get()->toArray();
                    $busquedaEstilos=estilos::where("nombre",'LIKE',"%$busqueda%")->get()->toArray();
                    $busquedaColor=colores::where("nombre",'LIKE',"%$busqueda%")->get()->toArray();


                    if(!empty($busquedaMarca)){
                        $marca=$busquedaMarca["0"]["id"];
                        $request["marca"]=$marca;
                      }else $marca=$request->get('marca');

                    if(!empty($busquedaOrigenes)){
                      $origen=$busquedaOrigenes["0"]["id"];
                      $request["origen"]=$origen;
                    }else $origen=$request->get('origen');

                    if(!empty($busquedaEstilos)){
                      $estilo=$busquedaEstilos["0"]["id"];
                      $request["estilo"]=$estilo;
                    }else $estilo=$request->get('estilo');

                    if(!empty($busquedaColor)){
                      $color=$busquedaColor["0"]["id"];
                      $request["color"]=$color;
                    }else $color=$request->get('color');


                  }
                else {
                  $marca=$request->get('marca');
                  $origen=$request->get('origen');
                  $estilo=$request->get('estilo');
                  $color=$request->get('color');
                }


              $orden="asc";
              $cant="9";
              if(isset($_GET["orden"])){
                $orden=$_GET["orden"];}

              if(isset($_GET["cantidad"])){
                $cant=$_GET["cantidad"];}


                $productos=Producto::orderBy('precio',$orden)
                ->where("id","!=",1)
                ->where("id_marca",'LIKE',"%$marca%")
                ->where("id_origen",'LIKE',"%$origen%")
                ->where("id_estilo",'LIKE',"%$estilo%")
                ->where("id_color",'LIKE',"%$color%")
                ->paginate($cant);

                  $marcas=marcas::orderBy('nombre','ASC')->get();
                  $estilos=estilos::orderBy('nombre','ASC')->get();
                  $colores=colores::orderBy('nombre','ASC')->get();
                  $origenes=origenes::orderBy('nombre','ASC')->get();
                $vac=compact("productos","marcas","estilos","colores","origenes");


        return view("modificarProductos",$vac);
    }

    public function eliminarProducto($id){

      $enVendidos=venta::where("id_producto",'=',"$id")->get();

      foreach($enVendidos as $v){
        $venta=new venta();
        $venta->id_producto=1;
        $venta->created_at=$v->created_at;
        $venta->updated_at=$v->updated_at;
        $venta->id_user=$v->id_user;
        $venta->cantidad=$v->cantidad;
        $venta->save();
        $v->delete();
      }


      $producto= Producto::findOrFail($id);
      $producto->delete();

      return redirect('modificarProductos');
    }

    public function editarProducto($id){
      $producto= Producto::findOrFail($id);
      //orderBy('nombre','ASC')->find("%$busqueda%");
      //dd($productos);

      $marcas=marcas::orderBy('nombre','ASC')->get();
      $estilos=estilos::orderBy('nombre','ASC')->get();
      $colores=colores::orderBy('nombre','ASC')->get();
      $origenes=origenes::orderBy('nombre','ASC')->get();
      $vac=compact("producto","marcas","estilos","colores","origenes");

        return view("/editarProducto",$vac);
    }


    public function editarInfoProducto(Request $request,$id){
      $producto= Producto::findOrFail($id);


      if($request->file("imagen")!=NULL){
      //Capturo el orchivo de imagen
      $ruta = $request->file("imagen")->store("public");
      //saco la ruta donde se encuentra el archivo
      $nombreArchivo=basename($ruta);
      //guardo la ruta en el nuevo producto
      $producto->imagen=$nombreArchivo;}


      //guardo el nombre del producto
      $producto->nombre=$request["nombre"];
      //guardo la marca del producto
      $producto->id_marca=$request["marca"];
      //guardo la color del producto
      $producto->id_color=$request["color"];
      //guardo la estilo del producto
      $producto->id_estilo=$request["estilo"];
      //guardo la origen del producto
      $producto->id_origen=$request["origen"];
      //guardo la precio del producto
      $producto->precio=$request["precio"];
      //guardo la descripcion del producto
      $producto->informacion=$request["informacion"];
      //guardo la graduacion alcoholica del producto
      $producto->graduacion_alcoholica=$request["graduacionAlcoholica"];
      //guardo el volumen del producto
      $producto->volumen=$request["volumen"];
      //guardo el stock del productos
      $producto->stock=$request["stock"];


      $producto->save();

        return redirect("modificarProductos");

    }



    //-----------------------------------------------CATALOGO----------------------------------------------


    public static  function listadoDeProductos(Request $request){



        $busqueda=$request->get('busqueda');

        if($busqueda)
          {

              $busquedaMarca=marcas::where("nombre",'LIKE',"%$busqueda%")->get()->toArray();
              $busquedaOrigenes=origenes::where("nombre",'LIKE',"%$busqueda%")->get()->toArray();
              $busquedaEstilos=estilos::where("nombre",'LIKE',"%$busqueda%")->get()->toArray();
              $busquedaColor=colores::where("nombre",'LIKE',"%$busqueda%")->get()->toArray();


              if(!empty($busquedaMarca)){
                  $marca=$busquedaMarca["0"]["id"];
                  $request["marca"]=$marca;
                }else $marca=$request->get('marca');

              if(!empty($busquedaOrigenes)){
                $origen=$busquedaOrigenes["0"]["id"];
                $request["origen"]=$origen;
              }else $origen=$request->get('origen');

              if(!empty($busquedaEstilos)){
                $estilo=$busquedaEstilos["0"]["id"];
                $request["estilo"]=$estilo;
              }else $estilo=$request->get('estilo');

              if(!empty($busquedaColor)){
                $color=$busquedaColor["0"]["id"];
                $request["color"]=$color;
              }else $color=$request->get('color');


            }
          else {
            if($request->get('marca')!="0")
              {$marca=$request->get('marca');}
              else{$marca=NULL;}

            if($request->get('origen')!="0")
            {$origen=$request->get('origen');}
            else{$origen=NULL;}

            if($request->get('estilo')!="0")
            {$estilo=$request->get('estilo');}
            else{$estilo=NULL;}

            if($request->get('color')!="0")
            {$color=$request->get('color');}
            else{$color=NULL;}
          }

          $orden="desc";
          $cant="12";

        if(isset($_GET["orden"])){
          $orden=$_GET["orden"];}

        if(isset($_GET["cantidad"])){
          $cant=$_GET["cantidad"];}


          $productos=Producto::orderBy('precio',$orden)
          ->where("id","!=",1)
          ->where("stock","!=",0)
          ->where("id_marca",'LIKE',"%$marca%")
          ->where("id_origen",'LIKE',"%$origen%")
          ->where("id_estilo",'LIKE',"%$estilo%")
          ->where("id_color",'LIKE',"%$color%")
          ->paginate($cant);

            $marcas=marcas::orderBy('nombre','ASC')->get();
            $estilos=estilos::orderBy('nombre','ASC')->get();
            $colores=colores::orderBy('nombre','ASC')->get();
            $origenes=origenes::orderBy('nombre','ASC')->get();
          $vac=compact("productos","marcas","estilos","colores","origenes");

      return view("catalogo",$vac);
    }


//------------------------------------------------PRESENTACION DEL PRODUCTO-----------------------------------------------


        public function unProducto($id){

            $producto= Producto::find($id);
            $marcas=marcas:: all();
            $estilos=estilos::all();
            $colores=colores::all();
            $origenes=origenes::all();
            $vac=compact("producto","marcas","estilos","colores","origenes");

            return view("producto ",$vac);
        }


        public function puntuarProducto(Request $request,$id){

            //El promedio no está bien calculado habria que buscar alguna
            //formula matematica que resuelva la ecuacion
            $productoD= Producto::find($id);
            $promedio=$productoD->puntuacion+$request["puntos"];
            $productoD->puntuacion=$promedio/2;
            $productoD->save();

            $producto= Producto::find($id);
            $marcas=marcas:: all();
            $estilos=estilos::all();
            $colores=colores::all();
            $origenes=origenes::all();
            $vac=compact("producto","marcas","estilos","colores","origenes");

            return view("producto ",$vac);
        }






//-------------------------------------------------CARRITO----------------------------------------------------------------

public function agregarCarrito($idUser=NULL,$idProducto=NULL,Request $req){


/*
        Mi primer middleware rustico
        if($idUser==NULL){
          return redirect('login');
        }

        else */

        if($idProducto==NULL){/*
            $carritos= Carrito::all()->where("id_user","=",$idUser);

            //dd($productos);

            $marcas=marcas:: all();
            $estilos=estilos::all();
            $colores=colores::all();
            $origenes=origenes::all();
            $vac=compact("carritos","marcas","estilos","colores","origenes","idUser");

          return view("carrito",$vac);*/
          redirect("/carrito/$idUser");

        }


        $productoEnCarrito= Carrito::all()->where("id_producto","=",$idProducto)->where("id_user","=",$idUser);


        if($productoEnCarrito->first()!=NULL){

          $producto= Producto::find($idProducto);
          if(!$req["cantidad"]){
              $producto->stock=$producto->stock-1;
              $producto->save();
              $productoEnCarrito->first()->cantidad=$productoEnCarrito->first()->cantidad+1;
              $productoEnCarrito->first()->save();
          }
          else{

              $producto->stock=$producto->stock-$req["cantidad"];
              $producto->save();
              $productoEnCarrito->first()->cantidad=$productoEnCarrito->first()->cantidad+$req["cantidad"];
              $productoEnCarrito->first()->save();
          }

        }

        else{
          if($idProducto!=NULL){
              $producto= Producto::find($idProducto);
              $nuevoCarrito= new carrito();
              $nuevoCarrito->id_user=$idUser;
              $nuevoCarrito->id_producto=$producto->id;
              if(!$req["cantidad"]){
                  $nuevoCarrito->cantidad=1;
                  $producto->stock=$producto->stock-1;
                  $producto->save();
              }
              else
              {
                if($req["cantidad"]>$producto->stock){
                    $nuevoCarrito->cantidad=$producto->stock;
                    $producto->stock=0;
                    $producto->save();
                }
                else{
                    $nuevoCarrito->cantidad=$req["cantidad"];
                    $producto->stock=$producto->stock-$req["cantidad"];
                    $producto->save();
                  }
              }
              $nuevoCarrito->save();
          }

        }


          //falta controlar si existe el producto dentro del carrito
          //si existe aumento la cantidad a comprar
          //si no existe creo un nuevo carrito

/*

          $carritos= Carrito::all()->where("id_user","=",$idUser);

          //dd($productos);

          $marcas=marcas:: all();
          $estilos=estilos::all();
          $colores=colores::all();
          $origenes=origenes::all();
          $vac=compact("carritos","marcas","estilos","colores","origenes","idUser");

        return view("carrito",$vac);

        */

        return redirect("/carrito/$idUser");
      }

      public function aumentarCantidad($idUser,$idProducto){

        //se deberia cambiar el id_user y $idProducto por el id del carrito
        $productoEnCarrito= Carrito::all()->where("id_producto","=",$idProducto);
        $producto= Producto::find($idProducto);
        if($producto->stock>0){
            $producto->stock=$producto->stock-1;
            $producto->save();
            $productoEnCarrito->first()->cantidad=$productoEnCarrito->first()->cantidad+1;
            $productoEnCarrito->first()->save();
        }

        $carritos= Carrito::all()->where("id_user","=",$idUser);

    /*    $vac=compact("carritos","idUser");
        return view("/carrito",$vac);*/
        return redirect("/carrito/$idUser");
      }



      public function decrementarDeCarrito($idUser,$idProducto){
          //se deberia cambiar el id_user y $idProducto por el id del carrito

            $productoEnCarrito= Carrito::all()->where("id_producto","=",$idProducto);
            $producto= Producto::find($idProducto);

            if(($productoEnCarrito->first()->cantidad)=="1"){
                $productoEnCarrito->first()->delete();
                $producto->stock=$producto->stock+1;
                $producto->save();
            }
            else{
                $productoEnCarrito->first()->cantidad=$productoEnCarrito->first()->cantidad-1;
                  $productoEnCarrito->first()->save();
                  $producto->stock=$producto->stock+1;
                  $producto->save();
            }

            $carritos= Carrito::all()->where("id_user","=",$idUser);

          /*  $vac=compact("carritos","idUser");
            return view("/carrito",$vac);*/
            return redirect("/carrito/$idUser");

      }

      public function eliminarDeCarrito($idUser,$idProducto){
          //se deberia cambiar el id_user y $idProducto por el id del carrito

            $productoEnCarrito= Carrito::all()->where("id_producto","=",$idProducto);
            $producto= Producto::find($idProducto);

            $producto->stock=$producto->stock+$productoEnCarrito->first()->cantidad;
            $productoEnCarrito->first()->delete();
            $producto->save();


            /*$carritos= Carrito::all()->where("id_user","=",$idUser);

            $vac=compact("carritos","idUser");*/
            return redirect("/carrito/$idUser");

      }

      public function vaciarCarrito($idUser){
          $productoEnCarrito= Carrito::all()->where("id_user","=",$idUser);
          foreach($productoEnCarrito as $carro)
            {$carro->first()->delete();}

          return redirect("/carrito/$idUser");
      }

      public function irCarrito($idUser=NULL){

        $carritos= Carrito::all()->where("id_user","=",$idUser);

        //dd($productos);

        $marcas=marcas:: all();
        $estilos=estilos::all();
        $colores=colores::all();
        $origenes=origenes::all();
        $vac=compact("carritos","marcas","estilos","colores","origenes","idUser");

      return view("carrito",$vac);

      }


      //------------------------------------------------------------------Metodos para index/home----------------


      public function presentacion(){
        $productosTotal=Producto::all()->where("id","!=",1)->chunk(4);
        $productosTotal2=Producto::all()->where("id","!=",1)->where("precio","<",170)->chunk(4);
        $productosTotal23=Producto::all()->where("id","!=",1)->where("stock","<",4)->chunk(4);
        $productos=[0=> $productosTotal->first(),
                    1=> $productosTotal2->first(),
                    2=> $productosTotal23->first()
                  ];

        $vac=compact('productos');
        return view("/index",$vac);
      }


}
