<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingRoles extends Model
{
    use HasFactory;
    protected $fillable=[
        'users_id',
        'roles_id'
    ];
}
