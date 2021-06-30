<?php

namespace Themysticgeek\LarpOrgRolesNational\Commands;

use Illuminate\Console\Command;

class LarpOrgRolesNationalCommand extends Command
{
    public $signature = 'larp-org-roles-national';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
