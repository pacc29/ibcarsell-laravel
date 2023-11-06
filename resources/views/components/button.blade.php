@props(['type' => 'submit', 'classes' => 'btn btn-success'])
<button type="{{$type}}" {{$attributes->merge(['class' => $classes])}} @disabled($errors->isNotEmpty())>
  {{$slot}}
</button>
