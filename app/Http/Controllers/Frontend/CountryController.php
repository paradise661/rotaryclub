<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::where('status', 1)->latest()->paginate(12);
        return view('frontend.country.index', compact('countries'));
    }

    public function show($slug)
    {
        $country = Country::where('slug', $slug)->first();
        $morecountries = Country::where('status', 1)->where('slug', '!=', $slug)->inRandomOrder()->limit(3)->get();
        return view('frontend.country.show', compact('country', 'morecountries'));
    }
}
