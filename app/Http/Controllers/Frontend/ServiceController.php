<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $whatwedo = WhyChooseUs::latest()->paginate(12);
        return view('frontend.service.index', compact('whatwedo'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->first();
        $moreservices = Service::where('status', 1)->where('slug', '!=', $slug)->inRandomOrder()->limit(3)->get();
        return view('frontend.service.show', compact('service', 'moreservices'));
    }
}
