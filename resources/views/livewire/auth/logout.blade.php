<?php

use Livewire\Volt\Component;

new class extends Component {
    public function logout() {
        auth()->logout();
        return redirect()->route('inicio');
    }
}; ?>

<form wire:submit="logout">
    @csrf
    <li class="nav-item">
        <x-button classes="header__item header__item-6 nav-link">Logout</x-button>
    </li>
</form>