<?php

namespace RobinThijsen\LivewireFields;

use Livewire\Livewire;
use RobinThijsen\LivewireFields\Http\Livewire\Checkbox;
use RobinThijsen\LivewireFields\Http\Livewire\Input;
use RobinThijsen\LivewireFields\Http\Livewire\Password;
use RobinThijsen\LivewireFields\Http\Livewire\ProfilePicture;
use RobinThijsen\LivewireFields\Http\Livewire\Radio;
use RobinThijsen\LivewireFields\Http\Livewire\Select;
use RobinThijsen\LivewireFields\Http\Livewire\Textarea;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireFieldsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-fields')
            ->hasViews();
    }

    public function bootingPackage(): void
    {
        $this->registerLivewireComponent();
    }

    private function registerLivewireComponent(): void
    {
        Livewire::component('checkbox', Checkbox::class);
        Livewire::component('input', Input::class);
        Livewire::component('password', Password::class);
        Livewire::component('profile-picture', ProfilePicture::class);
        Livewire::component('radio', Radio::class);
        Livewire::component('select', Select::class);
        Livewire::component('textarea', Textarea::class);
    }
}
