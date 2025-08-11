<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class WhychooseusController extends Controller
{
    public function index()
    {
        $whatwedo = WhyChooseUs::latest()->paginate(12);
        return view('frontend.whychooseus.index', compact('whatwedo'));
    }

    public function show($slug)
    {
        $whatwedo = WhyChooseUs::where('slug', $slug)->first();
        $whatwedomore = WhyChooseUs::where('slug', '!=', $slug)->inRandomOrder()->limit(3)->get();
        return view('frontend.whychooseus.show', compact('whatwedo', 'whatwedomore'));
    }
}
