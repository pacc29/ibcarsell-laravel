@props(['classes' => '', 'name', 'label', 'displayErrors' => 'true'])

@php
$displayErrors = filter_var($displayErrors, FILTER_VALIDATE_BOOLEAN);
@endphp

<div class="form-group {{$classes}}">
  <label class="form-label" for="{{ $name }}"><small>{{ $label }}</small></label>
  {{ $slot }}
  @if ($displayErrors)
  <x-error-message :messages="$errors->get($name)" />
  @endif
</div>