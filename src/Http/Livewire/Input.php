<?php

namespace RobinThijsen\LivewireFields\Http\Livewire;

use RobinThijsen\LivewireFields\LivewireFields;

class Input extends LivewireFields
{
    public string|bool $prepend = false;
    public string|bool $placeholder = false;

    public function mount()
    {
        parent::mount();
    }

    public function render()
    {
        return view('livewire-fields::livewire.input');
    }
}
