@props(['name', 'classes' => '', 'model' => '', 'status' => ''])
<select wire:model{{ $model }}="{{ $name }}" name="{{ $name }}" id="{{ $name }}" {{ $status }} {{
  $attributes->merge(['class' =>
  'form-select
  '.$classes]) }}>
  {{ $slot }}
  {{ $list }}
</select>