<?php

namespace App\Repositories\Backend\Employee;


use App\Models\EmployeeProfile;
use App\Models\User;

class EloquentEmployeeRepository implements EmployeeRepository
{
    /**
     * @return mixed
     */
    public function getEmployee()
    {
        return User::where('profile_type', EmployeeProfile::class)->get();
    }

}
