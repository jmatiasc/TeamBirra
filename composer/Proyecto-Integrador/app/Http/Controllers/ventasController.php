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

class ventasController extends Controller
{
    public function finalizarCompra($id){


      $productoEnCarrito= Carrito::all()->where("id_user","=",$id);


      foreach($productoEnCarrito as $carro) {

          $venta=new venta();
          $venta->id_user=$carro->first()->id_user;
          $venta->id_producto=$carro->first()->id_producto;
          $venta->cantidad=$carro->first()->cantidad;
          $venta->save();

      }

        foreach($productoEnCarrito as $carro)
        {
          $carro->first()->delete();
        }


      $user=User::find($id);
      $vac=compact('user');
      return view('/perfilUsuario',$vac);

    }


    public function mostrarComprasUsuario( $id){


      $compras=venta::orderBy('created_at','DESC')
      ->where("id_user",'=',$id)
      ->paginate(30);

      $vac=compact("compras");

        return view("/mostrarCompras",$vac);
    }

  


}
