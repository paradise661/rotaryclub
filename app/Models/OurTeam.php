<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'position',
        'address',
        'status',
        'description',
        'slug',
        'order',
        'profession',
        'bloodgroup',
        'dob',
        'joindate',
        'oldyear',

        'facebook_link',
        'twitter_link',
        'instagram_link',
        'email',
        'phone',
    ];
}
