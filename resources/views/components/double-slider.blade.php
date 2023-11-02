@props(['name', 'placeholder', 'min', 'max', 'minvalue', 'maxvalue', 'step'])

<div class="mb-4" id="sliders__{{$name}}">
  <span class="form-label sliders__label">{{$placeholder}}</span>
  <div class="sliders__bar">
    <x-input type="range" name="min{{$name}}Value" classes="form-range sliders__bar--min" step="{{$step}}" data-bs="min"
      data-type="{{$name}}" min="{{$min}}" max="{{$max}}" value="{{$minvalue}}" />

    <x-input type="range" name="max{{$name}}Value" classes="form-range sliders__bar--max" step="{{$step}}" data-bs="max"
      data-type="{{$name}}" min="{{$min}}" max="{{$max}}" value="{{$maxvalue}}" />
  </div>

  <div class="d-flex justify-content-between">
    <span>{{$min}}</span>
    <span>{{$max}}</span>
  </div>
</div>