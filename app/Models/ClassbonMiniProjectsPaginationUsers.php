<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassbonMiniProjectsPaginationUsers extends Model
{
    use HasFactory;
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $table = 'classbon_mini_projects_api_pagination';
    protected $fillable = [
        'name', 'skills', 'mobile', 'email', 'imageUrl', 'facebook',
        'twitter', 'linkedin', 'telegram'
    ];
}
