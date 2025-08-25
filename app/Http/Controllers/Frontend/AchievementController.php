<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Adds;
use App\Models\Achievement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AchievementController extends Controller
{
    public function index()
    {
        $projects = Achievement::oldest('order')->get();
        $adds = Adds::where('inpage', 'project')->oldest('order')->get();

        return view('frontend.project.index', compact('projects', 'adds'));
    }

    public function show($slug)
    {
        $project = Achievement::where('slug', $slug)->first();
        $moreprojects = Achievement::where('slug', '!=', $slug)->limit(4)->get();
        return view('frontend.project.show', compact('project', 'moreprojects'));
    }
}
