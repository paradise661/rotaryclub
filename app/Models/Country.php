<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'image_2',
        'banner_image',
        'flag_image',
        'order',
        'status',
        'short_description',
        'description',

        'seo_title',
        'meta_description',
        'meta_keywords'
    ];

    public function universities()
    {
        return $this->hasMany(CountryUniversity::class, 'country_id');
    }
}
