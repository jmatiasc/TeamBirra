@extends('footer')
@extends('nav')

@section('content')


  <div class="container" style="height:70vh;padding:10%;text-align:center;">

        <h1>Felicitaciones {{$user->name}} tu compra fue un exito!!!!!</h1>
        si, la compra fue gratis capo!
        <a href="/perfilUsuario/{{$user->id}}">ver perfil</a>

</div>
@endsection
