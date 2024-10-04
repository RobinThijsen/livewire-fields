<?php

namespace RobinThijsen\LivewireFields\Http\Livewire;

use Livewire\WithFileUploads;
use RobinThijsen\LivewireFields\LivewireFields;

class ProfilePicture extends LivewireFields
{
    use WithFileUploads;

    public string|bool $button = false;

    public function mount()
    {
        parent::mount();
    }

    public function render()
    {
        return view('livewire-fields::livewire.profile-picture');
    }
}
