<?php

namespace App\Providers;

use App\Enums\MorphTypes;
use App\Models\AdminProfile;
use App\Models\EmployeeProfile;
use App\Repositories\Backend\Employee\EloquentEmployeeRepository;
use App\Repositories\Backend\Employee\EmployeeRepository;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EmployeeRepository::class, EloquentEmployeeRepository::class);
    }
}
