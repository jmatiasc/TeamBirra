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

class ventasController extends Controller
{
    public function finalizarVenta($nroPedido){


      $pedidos= pedidos::where("numeroPedido","=",$nroPedido)->get();


      foreach($pedidos as $pedido) {

          $venta=new venta();
          $venta->id_user=$pedido->id_user;
          $venta->id_producto=$pedido->id_producto;
          $venta->cantidad=$pedido->cantidad;
          $venta->created_at=$pedido->created_at;
          $venta->save();

      }

        foreach($pedidos as $pedido)
        {
          $pedido->delete();
        }


      return redirect('/administrarPedidos');

    }


    public function mostrarComprasUsuario( $id){


      $compras=venta::orderBy('created_at','DESC')
      ->where("id_user",'=',$id)
      ->paginate(30);

      $vac=compact("compras");

        return view("/mostrarCompras",$vac);
    }




}
