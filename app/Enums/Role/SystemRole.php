<?php

namespace App\Enums\Role;

use MyCLabs\Enum\Enum;

/**
 * @method static SystemRole SYSTEM_SUPER_ADMIN()
 * @method static SystemRole SYSTEM_ADMIN()
 * @method static SystemRole MANAGEMENT_ADMIN()
 */
class SystemRole extends Enum
{
    private const SYSTEM_SUPER_ADMIN = 'system super admin';
    private const SYSTEM_ADMIN = 'system admin';
    private const MANAGEMENT_ADMIN = 'management admin';
}
