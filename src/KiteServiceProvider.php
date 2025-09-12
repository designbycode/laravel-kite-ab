<?php

namespace Designbycode\Kite;

use Designbycode\Kite\Commands\KiteCommand;
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
            ->hasCommand(KiteCommand::class);
    }
}
