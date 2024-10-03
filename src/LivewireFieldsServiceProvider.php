<?php

namespace RobinThijsen\LivewireFields;

use Livewire\Livewire;
use RobinThijsen\LivewireFields\Http\Livewire\Input;
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
        Livewire::component('input', Input::class);
    }
}
