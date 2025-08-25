<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Adds;
use App\Models\Blog;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(12);
        $adds = Adds::where('inpage', 'blog')->oldest('order')->get();

        return view('frontend.blog.index', compact('blogs', 'adds'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $courses = Course::where('status', 1)->inRandomOrder()->limit(3)->get();
        $moreblogs = Blog::where('slug', '!=', $slug)->limit(4)->get();
        return view('frontend.blog.show', compact('blog', 'moreblogs', 'courses'));
    }
}
