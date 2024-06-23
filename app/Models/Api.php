<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;

    protected $table = 'api'; // specify the correct table name if it's not 'apis'

    protected $fillable = [
        'p_id', 
        'p_hash_kay', 
        'p_name', 
        'p_description', 
        'p_url', 
        'p_theme_id', 
        'p_version', 
        'p_theme_name', 
        'p_type', 
        'p_status', 
        'p_created_at', 
        'p_updated_at', 
        'user_id',
    ];
}


