@props(['value' => '', 'item', 'status' => ''])

<option {{$status}} {{$value ? $attributes->merge(['value' => $value]) : ''}}>{{$item}}</option>