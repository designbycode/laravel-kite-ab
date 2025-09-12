<?php

namespace Designbycode\Kite;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Designbycode\Kite\Commands\KiteCommand;

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
            ->hasMigration('create_kite_table')
            ->hasCommand(KiteCommand::class);
    }
}
