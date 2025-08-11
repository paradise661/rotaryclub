<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        dd('is working or not');
        $blogs = Blog::latest()->paginate(12);
        return view('frontend.blog.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $courses = Course::where('status', 1)->inRandomOrder()->limit(3)->get();
        $moreblogs = Blog::where('slug', '!=', $slug)->limit(4)->get();
        return view('frontend.blog.show', compact('blog', 'moreblogs', 'courses'));
    }
}
