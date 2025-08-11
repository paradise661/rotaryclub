<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryUniversity extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'country_id',
        'image',
        'order',
        'link',
        'description',
    ];

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('admin/images/country/university/' .  $value);
        }
        return NULL;
    }
}
