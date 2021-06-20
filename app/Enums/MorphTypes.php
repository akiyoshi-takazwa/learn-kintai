<?php

namespace App\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static MorphTypes ADMIN_PROFILE()
 * @method static MorphTypes EMPLOYEE_PROFILE()
 */
class MorphTypes extends Enum
{
    private const ADMIN_PROFILE = 'admin';
    private const EMPLOYEE_PROFILE = 'employee';
}
