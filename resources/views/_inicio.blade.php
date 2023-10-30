@extends('layouts.app')
@section('content')
@include('components.hero')
<section class="cars my-5">
  <div class="container cars__title">
    <h2>Recién llegados</h2>
    <p>Dale una mirada a los autos que acaban de ingresar a nuestra plataforma</p>
  </div>
  <div class="cars__list container">
    <div class="row">
      @foreach ($vehiculos as $vehiculo)
      <x-autocard :vehiculo="$vehiculo" />
      @endforeach
    </div>
  </div>
</section>
@endsection