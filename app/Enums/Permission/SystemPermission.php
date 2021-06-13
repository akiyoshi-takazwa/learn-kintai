<?php

namespace App\Enums\Permission;

use MyCLabs\Enum\Enum;
use App\Enums\Role\SystemRole;

/**
 * @method static SystemPermission CREATE_TEAMS()
 * @method static SystemPermission EDIT_TEAMS()
 * @method static SystemPermission DELETE_TEAMS()
 * @method static SystemPermission EDIT_TIMES()
 * @method static SystemPermission CREATE_USERS()
 * @method static SystemPermission EDIT_USERS()
 * @method static SystemPermission ADD_ROLES()
 * @method static SystemPermission DELETE_ROLES()
 */
class SystemPermission extends Enum
{
    private const CREATE_TEAMS = 'create teams';
    private const EDIT_TEAMS = 'edit teams';
    private const DELETE_TEAMS = 'delete teams';
    private const EDIT_TIMES = 'edit times';
    private const CREATE_USERS = 'create users';
    private const EDIT_USERS = 'edit users';
    private const ADD_ROLES = 'add roles';
    private const DELETE_ROLES = 'delete roles';

    /**
     * Get permissions by role.
     *
     * @param string $role
     * @return array|string[]
     */
    public static function allOf(string $role)
    {
        $role = SystemRole::from($role);

        if (SystemRole::SYSTEM_SUPER_ADMIN()->equals($role)) {
            return self::toArray();
        }

        if (SystemRole::SYSTEM_ADMIN()->equals($role)) {
            return self::toArray();
        }

        if (SystemRole::MANAGEMENT_ADMIN()->equals($role)) {
            return [
                self::CREATE_TEAMS,
                self::EDIT_TEAMS,
                self::DELETE_TEAMS,
            ];
        }

        return [];
    }
}
