@include('nav')
<body>


  @php
      require 'C:/GitDH/TeamBirra-DH/teamBirra2 - Laravel/composer/vendor/autoload.php';

      MercadoPago\SDK::setAccessToken('TEST-2146857532287027-052613-fefc01ea878a1f20857f8b25d60400e4-189699062');

      $preference = new MercadoPago\Preference();
                          // Crea un ítem en la preferencia
      $item = new MercadoPago\Item();
      $item->title = 'Plan Test';
      $item->unit_price = 1;
      $item->quantity =1;
      $item->binary_mode = "true";

      $preference->items = array($item);
      $preference->save();

      $preference->back_urls = array(
                  "success" => "/confirmarCompra/$user->id",
                  "failure" => "/",
                  "pending" => "/catalogo"

              );

      $preference->auto_return = "approved";


  @endphp


  <div class="container contenedor-faq ">
      <h1> <strong>Complete los datos para finalizar compra</strong> </h1>
      <br>
      <br>





      <div class="" style="color:red">
        {{$errors->first("nuevaDireccion")}}
      </div>
      <div class="shadow p-3 mb-5 bg-white rounded">
          Selecione direccion del envio

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

      <div class="container">


<form action="/verPedidos/{{$user->id}}" method="post">
          {{ csrf_field()}}
        <script
         src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
         data-preference-id="<?php echo $preference->id; ?>">
        </script>

    </form>

      </div>






  </div>

</body>
@include('footer')
