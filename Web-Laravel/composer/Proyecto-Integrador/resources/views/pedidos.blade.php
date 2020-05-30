@include('nav')
<body>


  <div class="container contenedor-modificar">


    <h1> <strong> Lista de pedidos </strong> </h1>
    <div class="">
          <a class="back" href="/perfilUsuario/{{Auth::user()->id}}"> << Volver al perfil </a>
    </div>


    <form class="" action="/verPedidos/{{$id}}" method="get ">
      <div class="col-12" style="width: 100%;padding-top:2%;">
        Seleccione Nro. de pedidos
      </div>

        <div class="form-group col-md-6">
          <select id="inputState "name="numeroPedido" class="section-direccion col-md-6 form-control">
            @foreach ($numeros_de_pedidos as $key => $val)
              <option value="{{$val}}" >{{$val}}</option>
            @endforeach
          </select>
        </div>
        <div class="btn-mod form-group col-md-2 " style="float:left;">
            <label for="inputState"></label>
            <button type="submit" class="btn btn-warning"><img style="" width="15px" src="images/lupa.svg" alt="Buscar pedido"></img></button>
        </div>


      </form>

@if ($numeroDePedido!=NULL)
  @if ($pedidosBuscados->first()->estado=="En preparación")
      <a class="text-danger" href="/cancelarPedido/{{$id}}/{{$numeroDePedido}}">cancelar pedido</a>
  @endif
@endif

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nº de pedido</th>
          <th scope="col">Fecha</th>
          <th scope="col">Poducto</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Estado de Pago</th>
          <th scope="col">Total</th>
          <th scope="col">Estado del pedido</th>


        </tr>
      </thead>
      <tbody>
        @foreach ($pedidosBuscados as $pedido )
        <tr>
          <th scope="row"><img src="/storage/{{$pedido->producto->imagen}}" width="20px" alt=" "></th>
          <td>{{$pedido->numeroPedido}}</td>
          <td>{{$pedido->created_at}}</td>
          <td>{{$pedido->producto->nombre}}</td>
          <td>{{$pedido->cantidad}}</td>
          <td>{{$pedido->estado_pago}}</td>
          <td>{{$pedido->cantidad*$pedido->producto->precio}}</td>
          <td>{{$pedido->estado}}</td>

        </tr>
        @endforeach

      </tbody>
    </table>






  </div>

</body>
@include('footer')
