
@extends('nav')

@section('content')

  <div class="container contenedor-faq ">
      <h1> <strong>Complete los datos para finalizar compra</strong> </h1>
      <br>
      <br>



  <form role="form" action='/confirmarCompra/{{$user->id}}' method='post' enctype="multipart/form-data">

      <div class="" style="color:red">
        {{$errors->first("nuevaDireccion")}}
      </div>
      <div class="shadow p-3 mb-5 bg-white rounded">
        {{ csrf_field()}}

      <div class="lista-faq ">
        <div class="accordion " id="accordionExample" style="width:100%">

          <div class="card ">
            <div class="card-header " id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" style="color:black" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Selecione direccion del envio

                  <div class="">
                    <img style="width: 20px;" src="/images/down.svg" alt=""> </span>
                  </div>
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                  <div class="">

                    <div class="form-row">

                      <div class="form-group col-md-12">
                        <select id="inputState "name="direccion" class="section-direccion form-control">
                          <option value="direccionUsuario" >Usar dirección actual del usuario</option>
                          <option value="otraDireccion" >Usar otra dirección </option>
                        </select>
                      </div>
                      <label class="direccion-seleccionada" for="inputState">Direccion seleccionada : <span class="dir-sp "> {{$user->direccion}}</span> </label>
                      <div class="ingrese-dir">


                      </div>
                    </div>

                  </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header " id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" style="color:black" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Seleccionar forma de pago
                    <div class="">
                      <img style="width: 20px;" src="/images/down.svg" alt=""> </span>
                    </div>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">

                <div class="form-group col-md-12">
                  <select id="inputState "name="forma-de-pago" class="section-direccion form-control">
                    <option value="credito" >Credito</option>
                    <option value="debito" >Debito</option>
                    <option value="efectivo" >Efectivo</option>
                  </select>
                </div>

              </div>
            </div>
          </div>


        </div>
      </div>
      <div class="btn-finCompra">
        <button type="submit" class="btn btn-warning">Finalizar Compra</button>
      </div>
      </div>


</form>


  </div>

@endsection
