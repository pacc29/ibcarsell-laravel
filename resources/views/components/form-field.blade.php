@props(['classes' => '', 'name', 'label'])

<div class="form-group {{$classes}}">
  <label class="form-label" for="{{ $name }}"><small>{{ $label }}</small></label>
  {{ $slot }}
  @error("$name")
    <x-error-message :message="$message" />
  @enderror
</div>