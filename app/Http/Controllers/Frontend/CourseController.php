<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('status', 1)->latest()->paginate(12);
        return view('frontend.course.index', compact('courses'));
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $morecourses = Course::where('status', 1)->where('slug', '!=', $slug)->inRandomOrder()->limit(3)->get();
        return view('frontend.course.show', compact('course', 'morecourses'));
    }
}
