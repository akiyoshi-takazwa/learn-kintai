<?php

namespace App\Providers;

use App\Enums\MorphTypes;
use App\Models\AdminProfile;
use App\Models\EmployeeProfile;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class MorphRelationProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            MorphTypes::ADMIN_PROFILE()->getValue()            => AdminProfile::class,
            MorphTypes::EMPLOYEE_PROFILE()->getValue()         => EmployeeProfile::class,
        ]);
    }
}
