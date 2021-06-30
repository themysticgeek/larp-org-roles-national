<?php

namespace Themysticgeek\LarpOrgRolesNational;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Themysticgeek\LarpOrgRolesNational\LarpOrgRolesNational
 */
class LarpOrgRolesNationalFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larp-org-roles-national';
    }
}
