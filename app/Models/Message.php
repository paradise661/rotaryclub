<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'position',
        'description',
        'slug',
        'order',

        'seo_title',
        'meta_description',
        'meta_keywords',
        'seo_schema'
    ];
}
