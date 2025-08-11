<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'coordinator',
        'slogan',
        'date',
        'image',
        'secondimage',
        'participation',
        'slug',
        'order',
        'status',

        'seo_title',
        'meta_description',
        'meta_keywords',
        'seo_schema'
    ];
}
