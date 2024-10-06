<?php

namespace RobinThijsen\LivewireFields\Http\Livewire;

use RobinThijsen\LivewireFields\LivewireFields;

class Checkbox extends LivewireFields
{
    public function mount()
    {
        parent::mount();
    }

    public function render()
    {
        return view('livewire-fields::livewire.checkbox');
    }
}
