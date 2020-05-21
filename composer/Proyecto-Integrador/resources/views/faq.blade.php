 @extends('footer')
@extends('nav')

@section('content')
<div class="container contenedor-faq">
    <h1> <strong>PREGUNTAS FRECUENTES</strong> </h1>
    <br>
    <br>
    <div class="lista-faq">
      <div class="accordion " id="accordionExample" style="width:100%">
        <div class="card">
          <div class="card-header bg-warning" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" style="color:black" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                ¿Cómo se calculan los costos de envío?
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <div class="">
                  Enviamos tu pedido a la dirección que quierás. Hacemos envíos a todo el país.A continuación podés ver el costo de envío correspondiente:
                </div>
                <img src="/images/CostosEnvio.png" style="width:100%" alt="">
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-warning" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" style="color:black" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  ¿Cómo hago para saber el estado de mi pedido, me van a avisar?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Por supuesto! En cuanto tu pedido sea despachado, vas a recibir un mail del correo. En el mismo, vas a contar con la información del nro de envío de compra para poder hacer su seguimiento de entrega.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-warning" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" style="color:black" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              ¿Cuales son los metodos de pago?
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <div class="">
                A continuación podés ver todas nuestras formas de pago:
              </div>
              <img src="/images/formaspago.png" style="width:100%" alt="">
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-warning" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" style="color:black" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
              ¿Hay eventos?
              </button>
            </h2>
          </div>
          <div id="collapse4" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <div class="">
                Llena el formulario de <a href="/contact"> contacto </a>con los datos correspondientes, y nosotros te enviaremos un mail con todos los datos necesarios. En promedio se realiza una SUPER degustación dos veces al año.
              </div>
            </div>
          </div>
        </div>


        <div class="card ">
          <div class="card-header  bg-warning"  id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" style="color:black" type="button " data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
              Términos y condiciones
              </button>
            </h2>
          </div>
          <div id="collapse5" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <div class="">
                Al comprar nuestra cerveza, esta obligado a comprarnos por toda la eternidad, ademas de, por supuesto darnos siempre 5 entrellas en cualquier pagina que pida opinion.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

</div>

@endsection
