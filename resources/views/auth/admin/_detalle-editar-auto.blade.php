@extends('layouts.app')
@section('content')
<div class="container text-center my-4">
  <h2 class="mb-4">EDITAR AUTO</h2>
  <livewire:auth.admin.detalle-editar-auto :vehiculo="$vehiculo" />
</div>
@endsection