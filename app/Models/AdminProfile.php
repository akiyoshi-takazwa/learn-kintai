<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'department_name',
      'job_title',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'profile');
    }
}
