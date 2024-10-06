<?php

namespace RobinThijsen\LivewireFields\Http\Livewire;

use RobinThijsen\LivewireFields\LivewireFields;

class Select extends LivewireFields
{
    public mixed $options;
    public string|bool $optionLabel = false;
    public string|bool $optionProp = false;

    public function mount()
    {
        parent::mount();
    }

    public function render()
    {
        return view('livewire-fields::livewire.select');
    }
}
