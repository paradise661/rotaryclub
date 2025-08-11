<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Blog;
use App\Models\Country;
use App\Models\Course;
use App\Models\OurTeam;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Achievement::count();
        $blogs = Blog::count();
        $teams = OurTeam::count();
        $testimonials = Testimonial::count();
        return view('admin.dashboard', compact('projects', 'blogs', 'teams', 'testimonials'));
    }
}
