<?php

namespace Themysticgeek\LarpOrgRolesNational\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Themysticgeek\LarpOrgRolesNational\LarpOrgRolesNationalServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Themysticgeek\\LarpOrgRolesNational\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LarpOrgRolesNationalServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_larp-org-roles-national_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
