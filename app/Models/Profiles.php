<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Example field, adjust as needed
        'phone_one',
        'phone_two',
        'address',
        'gender',
        'links',
        'email',
        'basicinfo',
        'workExp',
        'education',
        'skills',
        'interests',
        'otherinfo',
        'user_id',
    ];
}
