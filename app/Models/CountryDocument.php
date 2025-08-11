<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_name',
        'filenames',
        'country_id',
    ];
}
