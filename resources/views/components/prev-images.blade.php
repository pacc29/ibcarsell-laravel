<div class="d-flex gap-2 mb-5">
  @if ($form->archivos)
  @foreach ($form->archivos as $archivo)
  <img height="100px" src="{{$archivo->temporaryUrl()}}" alt="img">
  @endforeach
  @endif
</div>