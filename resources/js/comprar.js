const slidersElement = document.getElementById('sliders')
const minYear = document.getElementById('minYearValue')
const maxYear = document.getElementById('maxYearValue')
const minKilometraje = document.getElementById('minKilometrajeValue')
const maxKilometraje = document.getElementById('maxKilometrajeValue')
const minPrecio = document.getElementById('minPrecioValue')
const maxPrecio = document.getElementById('maxPrecioValue')
const elements = {
  minYear,
  maxYear,
  minKilometraje,
  maxKilometraje,
  minPrecio,
  maxPrecio,
}

slidersElement.addEventListener('input', e => {
  const inputElement = e.target
  const siblingElement =
    inputElement.nextElementSibling || inputElement.previousElementSibling
  if (!inputElement || !siblingElement) return
  const type = inputElement.dataset.type
  const step = +inputElement.getAttribute('step')

  switch (inputElement.dataset.bs) {
    case 'min':
      if (siblingElement.value - inputElement.value <= step)
        inputElement.value = siblingElement.value - step
      dispatchEventSlider(inputElement.value, siblingElement.value, type)
      break

    case 'max':
      if (inputElement.value - siblingElement.value <= step)
        inputElement.value = +siblingElement.value + step
      dispatchEventSlider(siblingElement.value, inputElement.value, type)
      break

    default:
      break
  }
})

const dispatchEventSlider = (min, max, type) =>
  Livewire.dispatch('handleSliders', { min, max, type })

Livewire.on('resetSliders', e => {
  for (let key in e) elements[key].value = e[key]
})
