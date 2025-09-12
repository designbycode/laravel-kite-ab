<?php

namespace Designbycode\Kite;

use Designbycode\Kite\Commands\KiteCommand;
use Designbycode\Kite\View\Components;
use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class KiteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('kite')
            ->hasConfigFile()
            ->hasViews()
            ->hasAssets()
            ->hasCommand(KiteCommand::class);
    }

    public function bootingPackage()
    {
        Blade::directive('kiteAppearance', function () {
            return ''; // Placeholder for now
        });

        Blade::directive('kiteStyles', function () {
            return '<link rel="stylesheet" href="{{ asset(\'vendor/kite/kite.css\') }}">';
        });

        Blade::directive('kiteScripts',function () {
            return '<script src="{{ asset(\'vendor/kite/kite.js\') }}" defer></script>';
        });

        $this->bootComponents();
    }

    protected function bootComponents(): void
    {
        Blade::component('kite::button', Components\Button::class);
        Blade::component('kite::link', Components\Link::class);
        Blade::component('kite::input', Components\Input::class);
    }
}
