@props(['name', 'placeholder', 'min', 'max', 'minValue', 'maxValue', 'step'])

<div class="mb-4" id="sliders__{{$name}}">
  <span class="form-label sliders__label">{{$placeholder}}</span>
  <div class="sliders__bar">

    <x-input type="range" name="min{{$name}}" classes="form-range sliders__bar--min" step="{{$step}}" data-bs="min"
      data-type="year" min="{{$min}}" max="{{$max}}" value="{{$minValue}}" />

    <x-input type="range" name="max{{$name}}" classes="form-range sliders__bar--min" step="{{$step}}" data-bs="max"
      data-type="year" min="{{$min}}" max="{{$max}}" value="{{$maxValue}}" />
  </div>

  <div class="d-flex justify-content-between">
    <span>{{$min}}</span>
    <span>{{$max}}</span>
  </div>
</div>