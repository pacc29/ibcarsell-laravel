@extends('layouts.app')
@section('content')
<div class="container text-center my-4">
  <h2 class="mb-4">HERRAMIENTAS DE ADMINISTRADOR</h2>
  <a href="{{route('nuevo-auto')}}" class="btn btn-primary" wire:navigate>Ingresar nuevo auto</a>
  <a href="{{route('editar-auto')}}" class="btn btn-primary" wire:navigate>Editar / Eliminar auto</a>
  {{-- <a href="{{route('nueevo-post')}}" class="btn btn-alert" wire:navigate>Escribir nuevo Post</a> --}}
</div>
@endsection