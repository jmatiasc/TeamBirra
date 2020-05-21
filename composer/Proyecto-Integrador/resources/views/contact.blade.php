 @extends('footer')
@extends('nav')

@section('content')
<div class="container">

      <div class="texto-contacto col-12 col-md-12 col-lg-12">
        <h1> <strong>CONTACTO</strong> </h1>
        <div class="container">

          Si ienes dudas sobre como conseguir nuestros productos, uso de la pagina, consultas por stock o los
          proximos productos que tendremos disponibles, contactate con nosotros.

        </div>

      </div>

      <div class="contacto-conjunto container">

            <div class="contacto-dv col-12 col-md-4 col-lg-4">
              <img src="/images/transporte-cont.png" style="color: #fece18;"width="70px" alt="">
              <h5><strong>ENVIOS</strong></h5>
              <p>Los envios se realizán por una empresa determinada a la ubicación y necesidad del comprado</p>
            </div>

            <div class="contacto-dv col-12 col-md-4 col-lg-4">
              <img src="/images/email-cont.png" style="color: #fece18;"width="70px" alt="">
              <h5><strong>EMAIL</strong></h5>
              <p>Los email serán respondidos de 9 hs a 15 hs de
                lunes a sábados.De no ser así se responderan en el siguiente día en el mismo horario </p>
                <p><strong>shopBeerH@gmail.com</strong> </p>
            </div>

            <div class="contacto-dv col-12 col-md-4 col-lg-4">
              <img src="/images/tel-cont.png" style="color: #fece18;"width="70px" alt="">
              <h5><strong>TELÉFONO</strong></h5>
              <p>El horario de atención por teléfono es de 9hs a 12 hs y de 16hs a 20hs de
                lunes a sábados </p><p><strong>+54(2291)-365896</strong> </p>
            </div>

    </div>

    <div class="mapa-contacto">
      <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&height=300&hl=es&coord=-34.921389, -57.954511&q=+(Mi%20nombre%20de%20egocios)&ie=UTF8&t=&z=13&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/marcar-radio-circulo-mapa/">Calculadora de radio del mapa</a></iframe></div><br />

    </div>
    <div class="container contact-form">
        <h2>FORMULARIO DE CONTACTO</h2>
        <form role="form" action='#' method='get' enctype="multipart/form-data">
          <div class="contenedor-datos-contacto">

          <div class="datos-pedido col-md-3">
              <div class="form-row">
                      <div class="form-group ">
                          <input type="text"name="nombre" placeholder="Nombre" id="nombre" value="" class="form-control" id="">
                      </div>
              </div>

              <div class="form-row">
                      <div class="form-group ">
                          <input type="text"name="apellido" placeholder="Apellido"  id="apellido" value="" class="form-control" id="">
                      </div>
              </div>

              <div class="form-row">
                      <div class="form-group ">
                          <input type="email"name="email" placeholder="Email" id="email" value="" class="form-control" id="inputEmail4">
                      </div>
              </div>
          </div>

          <div class="info-pedido col-md-9">
                <div class="form-group ">
                    <textarea class="form-control" placeholder="déjanos tu consulta" id="exampleFormControlTextarea1" value="" name="informacion" rows="4"></textarea>
                </div>

          </div>

          <div class=" boton-contacto">
              <button type="submit" class="btn btn-warning">enviar</button>
          </div>

        </div>


        </form>
    </div>



</div>
@endsection
