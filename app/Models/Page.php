<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'banner_image',
        'description',
        'short_description',
        'link',
        'slug',

        'seo_title',
        'meta_description',
        'meta_keywords'
    ];
}
