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
use App\venta;
use App\pedidos;
class pedidosController extends Controller
{



    public function finalizarCompraDatos($id){
            $user= user::find($id);
            $carrito=carrito::where("id_user","=",$id)->get()->toArray();

            if(count($carrito)==0){
              return redirect ("/carrito/$id");
            }
            $vac=compact('user');
            return view("/ingresoDatosDeCompra",$vac);
    }


    public function crearPedido(Request $request, $id){



          $user= user::find($id);
          $productoEnCarrito= Carrito::where("id_user","=",$id)->get();
          $numeroAzar=rand(0,999999999999999);

              foreach($productoEnCarrito as $carro) {

                  $nuevoPedido=new pedidos();
                  $nuevoPedido->id_user=$carro->id_user;
                  $nuevoPedido->id_producto=$carro->id_producto;
                  $nuevoPedido->cantidad=$carro->cantidad;
                  $nuevoPedido->estado_pago=$request["payment_status"];




                  $nuevoPedido->numeroPedido=$numeroAzar;

                  if($request["direccion"]=="direccionUsuario"){
                    $nuevoPedido->direccion=$user->direccion;
                  }
                  else {
                    if($request["direccion"]=="otraDireccion"){
                      $reglas=[
                            "nuevaDireccion"=>"string|min:4|Required",
                      ];

                      $mensajes=[
                        "string"=>"El campo :attribute debe ser un texto",

                      ];

                      $this->validate($request,$reglas,$mensajes);


                      $nuevoPedido->direccion=$request["nuevaDireccion"];
                    }else $nuevoPedido->direccion=$user->direccion;
                  }


                  $nuevoPedido->save();

              }

              foreach($productoEnCarrito as $carro)
              {
                $carro->first()->delete();
              }


          $vac=compact('user');
          return view('/compraExito',$vac);
    }





    public function listaPedidos(Request $req,$id){


              $pedidosBuscados=pedidos::where("id_user","=",$id)
              ->where("numeroPedido","=",$req["numeroPedido"])->get();

              $todosLosPedidos=pedidos::where("id_user","=",$id)->get();

              $arr=[];
              foreach ($todosLosPedidos as $pedido) {
                $arr[]=$pedido->numeroPedido;
              }


              $numeros_de_pedidos=array_values(array_unique($arr));
              $numeroDePedido=$req["numeroPedido"];

      $vac=compact('pedidosBuscados','numeros_de_pedidos','id','numeroDePedido');
      return view('/pedidos',$vac);
    }

    public function cancelarPedido(Request $req,$id,$nroPedido){

      $pedidosBuscados=pedidos::where("id_user","=",$id)
      ->where("numeroPedido","=",$nroPedido)->get();

      foreach($pedidosBuscados as $pedido)
      {
        $producto=Producto::where("id","=",$pedido->id_producto)->get();
        $producto->first()->stock=$producto->first()->stock+$pedido->cantidad;
        $producto->first()->save();
      }


      foreach($pedidosBuscados as $pedido)
      {
        $pedido->delete();
      }

      return redirect("/verPedidos/$id");
    }


    public function administrarPedidos(Request $req){

            $todosLosPedidos=pedidos::all();
            if($req["nroPedido"]){
                $pedido=pedidos::where("numeroPedido","=",$req["nroPedido"])->get();}
            else {
                  if($req["numeroPedido"]){
                      $pedido=pedidos::where("numeroPedido","=",$req["numeroPedido"])->get();
                    }else {$pedido=NULL;}
                  }


            $arr=[];
            foreach ($todosLosPedidos as $p) {
              $arr[]=$p->numeroPedido;
            }


            $numeros_de_pedidos=array_values(array_unique($arr));

            $vac=compact('numeros_de_pedidos','pedido');
      return view('/administrarPedidos',$vac);
    }

    public function actualizarEstado(Request $req){
      $pedido=pedidos::where("numeroPedido","=",$req["nroPedido"])->get();
      $todosLosPedidos=pedidos::all();

      foreach ($pedido as $p) {
        $p->estado=$req["estado"];
        $p->save();
      }

      $arr=[];
      foreach ($todosLosPedidos as $p) {
        $arr[]=$p->numeroPedido;
      }


      $numeros_de_pedidos=array_values(array_unique($arr));

      $vac=compact('numeros_de_pedidos','pedido');
      return view("/administrarPedidos",$vac);

    }




}
