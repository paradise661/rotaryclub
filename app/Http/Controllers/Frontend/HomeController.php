<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Adds;
use App\Models\Award;
use App\Models\Blog;
use App\Models\Country;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Inquiry;
use App\Models\Member;
use App\Models\Modal;
use App\Models\OurTeam;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use File;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::oldest('order')->get();
        $achievements = Achievement::oldest('order')->limit(3)->get();
        $countries = Country::where('status', 1)->oldest('order')->limit(3)->get();
        $modals = Modal::where('status', 1)->oldest('order')->get();
        $services = Service::where('status', 1)->inRandomOrder()->limit(4)->get();
        $whatwedo = WhyChooseUs::get();
        $events = Event::limit(3)->get();
        $faqs = Faq::oldest('order')->limit(3)->get();
        $testimonials = Testimonial::oldest('order')->get();
        $adds = Adds::where('inpage', 'home')->oldest('order')->get();
        $blogs = Blog::inRandomOrder()->limit(5)->get();
        $partners = Partner::where('status', 1)->oldest('order')->get();
        return view('frontend.index', compact('sliders', 'services', 'faqs', 'testimonials', 'blogs', 'modals', 'partners', 'countries', 'achievements', 'whatwedo', 'events', 'adds'));
    }

    public function about()
    {
        $teams = OurTeam::where('status', 0)->limit(6)->get();
        $testimonials = Testimonial::oldest('order')->get();
        $blogs = Blog::inRandomOrder()->limit(5)->get();
        $faqs = Faq::oldest('order')->limit(4)->get();
        $adds = Adds::where('inpage', 'about')->oldest('order')->get();
        return view('frontend.about', compact('teams', 'testimonials', 'blogs', 'faqs', 'adds'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }


    public function currentMembers()
    {
        $teamMembers = OurTeam::where('status', 0)->oldest('order')->get();
        $pageTitle = 'Members Profile';
        return view('frontend.team', compact('teamMembers', 'pageTitle'));
    }

    public function currentBoard()
    {
        $teamMembers = OurTeam::where('status', 2)->oldest('order')->get();
        $pageTitle = 'Executive Board ';
        return view('frontend.team', compact('teamMembers', 'pageTitle'));
    }

    public function pastBoard()
    {
        $teamMembers = OurTeam::where('status', 1)->oldest('order')->get();
        $pageTitle = 'Past Presidents';
        return view('frontend.team', compact('teamMembers', 'pageTitle'));
    }

    public function faqindex()
    {
        $faqs = Faq::oldest('order')->get();
        return view('frontend.faq', compact('faqs'));
    }

    public function gallery()
    {
        $galleries = Gallery::get();
        return view('frontend.gallery', compact('galleries'));
    }

    public function members()
    {
        return view('frontend.member');
    }

    public function awards()
    {
        $awards = Award::oldest('order')->get();
        return view('frontend.award', compact('awards'));
    }

    public function pageDetail($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('frontend.page', compact('page'));
    }

    public function inquiry(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        Inquiry::create($request->all());
        return response()->json(['success' => 'Thank you, your enquiry has been submitted successfully.']);
    }

    public function member(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'current_address' => 'required',
            'permanent_address' => 'required',
            'phone' => 'required',
            'dobad' => 'required',
            'dobbs' => 'required',
            'profession' => 'required',
            'gender' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $imagePath = $this->fileUpload($request, 'image');

        $data = $request->all();
        $data['image'] = $imagePath;

        Member::create($data);
        return response()->json(['success' => 'Thank you, your booking has been submitted successfully.']);
    }
    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/admin/images/member';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/admin/images/member/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
