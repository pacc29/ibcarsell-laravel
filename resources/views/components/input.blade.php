{{-- @props([
'type' => 'text',
'multiple' => 'false',
'name',
'model' => 'wire:model.live.blur',
'classes' =>'form-control',
'step' => '',
'data_bs' => ''])

<input {{ $model }}={{ $name }} id="{{ $name }}" class="{{$classes}}" value="{{ old($name) }}" name="{{ $name }}"
  type="{{$type}}" multiple="{{$multiple}}" autocomplete="on" step="{{$step}}" data-bs="{{$data_bs}}" /> --}}


@props([
'type' => 'text',
'classes' => 'form-control',
'name',
])

@switch($type)

@case('file')
<input name="{{$name}}" {{$attributes->merge(['class' => $classes])}} wire:model="{{$name}}" type="{{$type}}"
value="{{old($name)}}" id="{{$name}}" multiple >
@break

@case('range')
@props(['step'])
<input name="{{$name}}" type="{{$type}}" id="{{$name}}" {{$attributes->merge(['class' => $classes])}} step="{{$step}}">
@break

@default
<input name="{{$name}}" {{$attributes->merge(['class' => $classes])}} wire:model.live.debounce.250ms="{{$name}}"
type="{{$type}}"
value="{{old($name)}}" id="{{$name}}"
autocomplete="on">
@break

@endswitch