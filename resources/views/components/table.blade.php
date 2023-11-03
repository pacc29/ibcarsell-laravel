@props(['tablearray'])
<div class="container my-5 table-responsive">
  <table class="table table-striped table-hover table-bordered">
    <thead>
      <tr class="table-light text-center">
        <th>Marca</th>
        <th>Modelo</th>
        <th>Año de Fabricacion</th>
        <th>Año de Modelo</th>
        <th>Tipo de Carrocería</th>
        <th>Combustible</th>
        <th>Kilometraje</th>
        <th>Transmisión</th>
        <th>Tracción</th>
        <th>Cilindros</th>
        <th>Cilindrada</th>
        <th>Puertas</th>
        <th>Disponible en</th>
        @if (auth()->user()->is_admin)
        <th>Editar Auto</th>
        <th>Eliminar Auto</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach ($tablearray as $item)
      <tr id="{{$item->id}}">
        <td>{{$item->marca->marca}}</td>
        <td>{{$item->modelo->modelo}}</td>
        <td>{{$item->fecha_fabricacion}}</td>
        <td>{{$item->fecha_modelo}}</td>
        <td>{{$item->carroceria->carroceria}}</td>
        <td>{{$item->combustible->combustible}}</td>
        <td>{{$item->kilometraje}}</td>
        <td>{{$item->transmision->transmision}}</td>
        <td>{{$item->traccion->traccion}}</td>
        <td>{{$item->cilindros}}</td>
        <td>{{$item->cilindrada}}</td>
        <td>{{$item->puertas}}</td>
        <td>{{$item->ubicacion->ubicacion}}</td>
        @if (auth()->user()->is_admin)
        <td>
          <a href="{{route('detalle-editar-auto', ['vehiculo' => $item->id])}}" wire:navigate>
            <i class="bi bi-arrow-up-square-fill" style="font-size: 2rem"></i>
          </a>
        </td>
        <td>
          <a href="">
            <i data-id='' class="bi bi-trash3-fill" style="font-size: 2rem; color: red"></i>
          </a>
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
</div>