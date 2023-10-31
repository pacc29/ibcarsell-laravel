<div id="{{$vehiculo->id}}" class="cars__card col col-4 gy-4">
  <div class="card">
    <a href="{{ route('detalle-auto', ['vehiculo' => $vehiculo->id]) }}" wire:navigate />
    <img class="cars__card-img w-100"
      src="{{ asset('/storage/images/imagenes_vehiculos/'.$vehiculo->id.'/principal.jpg') }}"
      alt="auto_{{$vehiculo->id}}">
    </a>
    <div class="cars__card--description card-body d-flex justify-content-between align-items-center">
      <h5 class="card-title">{{$vehiculo->marca->marca}}<span> {{$vehiculo->modelo->modelo}}</span></h5>
      <span>${{$vehiculo->precio}}</span>
    </div>
    <div class="cars__card--features card-body row text-center">
      <div class="col col-4 d-flex flex-column">
        <i class="cars__card--icon bi bi-speedometer2"></i>
        <span>{{$vehiculo->kilometraje}} km</span>
      </div>
      <div class="col col-4 d-flex flex-column">
        <i class="cars__card--icon bi bi-fuel-pump"></i>
        <span>{{$vehiculo->combustible->combustible}}</span>
      </div>
      <div class="col col-4 d-flex flex-column">
        <i class="cars__card--icon bi bi-joystick"></i>
        <span>{{$vehiculo->traccion->traccion}}</span>
      </div>
    </div>
  </div>
</div>