@extends('nav')

@section('content')

<div class="container contenedor-modificar">
  <h1> <strong> MIS COMPRAS </strong> </h1>


  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Fecha</th>
        <th scope="col">Poducto</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Total</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($compras as $compra )
      <tr>
        <th scope="row"><img src="/storage/{{$compra->producto->imagen}}" width="20px" alt=" "></th>
        <td>{{$compra->created_at}}</td>
        <td>{{$compra->producto->nombre}}</td>
        <td>{{$compra->cantidad}}</td>
        <td>{{$compra->cantidad*$compra->producto->precio}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>

  {{$compras->links()}}


</div>

@endsection
