<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'image_2',
        'banner_image',
        'order',
        'status',
        'description',
        'benefits',
        'short_description',
        'slug',

        'seo_title',
        'meta_description',
        'meta_keywords'
    ];
}
