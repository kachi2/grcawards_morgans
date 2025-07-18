<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardMembers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'profile', 'path_to_image', 'position'];
}
