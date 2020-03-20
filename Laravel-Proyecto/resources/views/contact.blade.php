 @extends('footer')
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <main role="main" class="inner cover text-center">
      <h1 class="cover-heading">CONTACTO</h1>
      <p class="lead">Por cualquier consulta escribinos!</p>
      <form action="index.php">
        <div class="form-group">
          <label for="nombre">Nombre y apellido</label>
          <br><br>
          <input type="text" class="form-control" id="nombre">
          <br><br>
          <label for="exampleInputEmail1">E-mail</label>
          <br><br>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <br><br>
          <label for="telefono">Teléfono</label>
          <br><br>
          <input type="text" class="form-control" id="telefono">
          <br><br>
          <label for="mensaje">Mensaje</label>
          <br><br>
          <div class=row>
            <textarea style="width: 100%;" name="mensaje" id="mensaje"></textarea>
          </div>
          <br>
          <button type="button" class="btn btn-info">Enviar formulario</button>
        </div>
      </form>
      <h5>Administración</h5>
      <p>8 y 50 3840. La Plata. Provincia de Buenos Aires. Argentina </p>
      <h5>Télefonos</h5>
      <p>221647685 / 2219841561 / 2216984351</p>
      <h5>E-mail</h5>
      <p>contactos@cerveza.com</p>
    </main>
  </div>
</div>
@endsection
