<?php

namespace RobinThijsen\LivewireFields;

use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class LivewireFields extends Component
{
    #[Locked]
    private string $key;

    public string $id;

    #[Modelable]
    public mixed $value;

    public string|bool $label = false;

    public string|bool $placeholder = false;

    public bool $required = false;

    public bool $disabled = false;

    public function mount()
    {
        $this->key = Str::uuid()->toString();
    }
}
