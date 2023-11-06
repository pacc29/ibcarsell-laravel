<?php

use Livewire\Volt\Component;
use App\Models\Vehiculo;

new class extends Component {
    
    public $vehiculos;

    public function mount() {
        $this->vehiculos = Vehiculo::all();
    }
}; ?>

<div>
    <x-alert-message />
    <x-table :tablearray="$vehiculos" />
</div>