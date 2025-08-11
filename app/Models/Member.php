<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'image',
        'current_address',
        'permanent_address',
        'phone',
        'dobad',
        'dobbs',
        'profession',
        'gender',
        'blood',
        'known',
        'comments',
    ];
}
