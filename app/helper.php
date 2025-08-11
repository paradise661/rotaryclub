<?php

use App\Models\Blog;
use App\Models\Country;
use App\Models\Course;
use App\Models\Event;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\SocialMedia;
use App\Models\WhyChooseUs;

function getSettings()
{
    return Setting::pluck('value', 'key')->toArray();
}

function getCountry()
{
    return Country::where('status', 1)->inRandomOrder()->limit(5)->get();
}

function getCountries()
{
    return Country::where('status', 1)->latest()->get();
}

function getwhatwedo()
{
    return WhyChooseUs::latest()->get();
}

function getCourse()
{
    return Course::where('status', 1)->inRandomOrder()->limit(5)->get();
}

function getServices()
{
    return Service::where('status', 1)->get();
}

function getPages()
{
    return Page::latest()->get();
}

function getBlogs()
{
    return Blog::latest()->limit(2)->get();
}

function getUpcomingEvents()
{
    return Event::where('date', '>', date('Y-m-d'))->orderBy('date', 'Asc')->limit(7)->get();
}

function getSocialMedias()
{
    return SocialMedia::latest()->get();
}


function getPartners()
{
    return Partner::where('status', 1)->oldest('order')->get();
}


if (!function_exists('stripLetters')) {
    function stripLetters($text, $number, $last = "")
    {
        if (!empty($text)) {
            return substr(strip_tags(html_entity_decode($text)), 0, $number) . $last;
        }
    }
}
