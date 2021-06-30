<?php

namespace Themysticgeek\LarpOrgRolesNational;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Themysticgeek\LarpOrgRolesNational\Commands\LarpOrgRolesNationalCommand;

class LarpOrgRolesNationalServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larp-org-roles-national')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larp-org-roles-national_table')
            ->hasCommand(LarpOrgRolesNationalCommand::class);
    }
}
