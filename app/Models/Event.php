<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'status',
        'description',
        'short_description',
        'date',
        'time',
        'time_to',
        'slug',
        'location',

        'seo_title',
        'meta_description',
        'meta_keywords'
    ];
}
