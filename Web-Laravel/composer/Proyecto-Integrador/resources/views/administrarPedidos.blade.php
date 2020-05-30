@include('nav')
<body>


    <div class="container contenedor-modificar">


      <h1> <strong> Lista de pedidos </strong> </h1>
      <div class="">
            <a class="back" href="/perfilUsuario/{{Auth::user()->id}}"> << Volver al perfil </a>
      </div>


      <form class="" action="/administrarPedidos" method="get ">
        <div class="row">

              <div class="form-group col-md-6">
                <label for="">Seleccionar pedido:</label>
                <select id="inputState "name="numeroPedido" class="section-direccion form-control">
                      <option value="" ></option>
                    @foreach ($numeros_de_pedidos as $key => $val)
                      <option value="{{$val}}" >{{$val}}</option>
                    @endforeach
                </select>

              </div>

              <div class="form-group col-md-3">

                <div class="form-group">
                  <label for="exampleFormControlInput1">Ingrese número de pedido</label>
                  <input type="text" name="nroPedido" id="" class="form-control input-sm" placeholder="Nro. Pedido" value="" >
                </div>
              </div>

              <div class="btn-mod form-group col-md-1 ">
                  <label for="inputState"></label>
                  <button type="submit" class="btn btn-warning"><img style="" width="15px" src="images/lupa.svg" alt="Search"></img></button>
              </div>

        </div>
        </form>



        <div class=" datos-comprador-cont">
          @if (!empty($pedido))
          <label for="">Lista de productos:</label>
          <br>
          <ul class="list-group list-group-flush">
            @foreach ($pedido as $key => $value)
                  <li class="list-group-item"><img src="/storage/{{$value->producto->imagen}}" width="20px" alt=" ">   {{$value->producto->nombre}}</li>
            @endforeach
          </ul>
          <br><br><br>

            <div class="datos-comprador col-md-6 col-lg-6">
                  <label for="">Datos de comprador:</label>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item">Nombre:{{$pedido->first()->usuario->name}}</li>
                      <li class="list-group-item">Apellid:{{$pedido->first()->usuario->apellido}}</li>
                      <li class="list-group-item">DNI:{{$pedido->first()->usuario->dni}}</li>
                      <li class="list-group-item">Telefono:{{$pedido->first()->usuario->telefono}}</li>
                      <li class="list-group-item">Dirección:{{$pedido->first()->usuario->direccion}}</li>
                  </ul>
            </div>

            <div class="datos-comprador col-md-6 col-lg-6">
              <form class="" action="/actualizarEstado" method="get">

                  <div class="form-group col-md-12">
                    <label for="">Nro. Pedido</label>
                    <input type="text" name="nroPedido" id="" class="form-control input-sm"  value="{{$pedido->first()->numeroPedido}}" >
                    <label for="">Estado actual : {{$pedido->first()->estado}}</label>
                    <select id="inputState "name="estado" class="section-direccion form-control">
                      <option value="{{$pedido->first()->estado}}" > < {{$pedido->first()->estado}} > </option>
                      <option value="En preparación" >En preparación</option>
                      <option value="Despachado" >Despachado</option>
                      <option value="En transito" >En transito</option>
                      <option value="Entregado" >Entregado</option>
                    </select>
                    <div class="">
                        <button type="submit" class="btn btn-warning">Actualizar estado</button>
                    </div>

                  </div>


              </form>

            </div>

            <a href="/confirmarVenta/{{$pedido->first()->numeroPedido}}">Confirmar como venta realizada</a>
          @endif
        </div>







    </div>


  </body>
@include('footer')
