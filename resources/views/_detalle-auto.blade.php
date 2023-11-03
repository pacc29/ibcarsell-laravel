@extends('layouts.app')
@section('content')
<div class="container w-75 text-center my-4">
  <h2 class="mb-4">DETALLE DE AUTO</h2>
  {{-- CAROUSEL --}}
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      @foreach ($imagesPath as $index => $imagen)
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$index}}"
        class="{{$index === 0 ? 'active' : ''}}" aria-current="{{$index === 0 ? 'true' : ''}}"
        aria-label="Slide {{$index+1}}"></button>
      @endforeach
    </div>
    <div class="carousel-inner">
      @foreach ($imagesPath as $index => $imagen)
      <div class="carousel-item {{$index === 0 ? 'active' : ''}}">
        <img src="{{asset('/storage/images/imagenes_vehiculos/'.$vehiculo->id.'/'.$imagen->getRelativePathname())}}"
          alt="vehiculo_{{$vehiculo->id}}_{{$index}}" class="d-block w-100 object-fit-cover">
      </div>
      @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  {{-- END CAROUSEL --}}

  <div>
    <x-table :tablearray="[$vehiculo]" />
  </div>
</div>
@endsection