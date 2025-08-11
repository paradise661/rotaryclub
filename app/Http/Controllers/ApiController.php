<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Branch;
use App\Models\Country;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\SocialMedia;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function countryIndex()
    {
        try {
            $countries = Country::with('universities')->latest()->get();

            foreach ($countries as $key => $country) {
                $country['image'] = asset('admin/images/country/' . $country->image);
            }
            foreach ($countries as $key => $country) {
                $country['image_2'] = asset('admin/images/country/' . $country->image_2);
            }
            foreach ($countries as $key => $country) {
                $country['banner_image'] = asset('admin/images/country/' . $country->banner_image);
            }
            foreach ($countries as $key => $country) {
                $country['flag_image'] = asset('admin/images/country/' . $country->flag_image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $countries,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function singleCountry($slug)
    {
        try {
            $country = Country::where('slug', $slug)->with('universities')->first();
            $country['image'] = asset('admin/images/country/' . $country->image);
            $country['image_2'] = asset('admin/images/country/' . $country->image_2);
            $country['banner_image'] = asset('admin/images/country/' . $country->banner_image);
            $country['flag_image'] = asset('admin/images/country/' . $country->flag_image);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $country,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }


    public function blogIndex()
    {
        try {
            $blogs = Blog::latest()->get();

            foreach ($blogs as $key => $blog) {
                $blog['image'] = asset('admin/images/blog/' . $blog->image);
            }
            foreach ($blogs as $key => $blog) {
                $blog['banner_image'] = asset('admin/images/blog/' . $blog->banner_image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $blogs,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function singleBlog($slug)
    {
        try {
            $blog = Blog::where('slug', $slug)->first();
            $blog['image'] = asset('admin/images/blog/' . $blog->image);
            $blog['banner_image'] = asset('admin/images/blog/' . $blog->banner_image);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $blog,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function courseIndex()
    {
        try {
            $courses = Course::latest()->get();

            foreach ($courses as $key => $course) {
                $course['image'] = asset('admin/images/course/' . $course->image);
            }
            foreach ($courses as $key => $course) {
                $course['image_2'] = asset('admin/images/course/' . $course->image_2);
            }
            foreach ($courses as $key => $course) {
                $course['banner_image'] = asset('admin/images/course/' . $course->banner_image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $courses,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function singleCourse($slug)
    {
        try {
            $course = Course::where('slug', $slug)->first();
            $course['image'] = asset('admin/images/course/' . $course->image);
            $course['image_2'] = asset('admin/images/course/' . $course->image_2);
            $course['banner_image'] = asset('admin/images/course/' . $course->banner_image);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $course,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function testimonialIndex()
    {
        try {
            $testimonials = Testimonial::latest()->get();
            foreach ($testimonials as $key => $testimonial) {
                $testimonial['image'] = asset('admin/images/testimonial/' . $testimonial->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $testimonials,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function serviceIndex()
    {
        try {
            $services = Service::latest()->get();

            foreach ($services as $key => $service) {
                $service['image'] = asset('admin/images/service/' . $service->image);
            }
            foreach ($services as $key => $service) {
                $service['logo'] = asset('admin/images/service/' . $service->logo);
            }
            foreach ($services as $key => $service) {
                $service['banner_image'] = asset('admin/images/service/' . $service->banner_image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $services,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function singleService($slug)
    {
        try {
            $service = Service::where('slug', $slug)->first();
            $service['image'] = asset('admin/images/service/' . $service->image);
            $service['logo'] = asset('admin/images/service/' . $service->logo);
            $service['banner_image'] = asset('admin/images/service/' . $service->banner_image);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $service,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function pageIndex()
    {
        try {
            $pages = Page::latest()->get();

            foreach ($pages as $key => $page) {
                $page['image'] = asset('admin/images/page/' . $page->image);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $pages,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function singlePage($slug)
    {
        try {
            $page = Page::where('slug', $slug)->first();
            $page['image'] = asset('admin/images/page/' . $page->image);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $page,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function socialMediaIndex()
    {
        try {
            $socialmedias = SocialMedia::latest()->get();

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $socialmedias,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function faqIndex()
    {
        try {
            $faqs = Faq::latest()->get();

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $faqs,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function branchIndex()
    {
        try {
            $branches = Branch::latest()->get();

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $branches,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function sliderIndex()
    {
        try {
            $sliders = Slider::latest()->get();

            foreach ($sliders as $key => $slider) {
                $slider['image'] = asset('admin/images/slider/' . $slider->image);
            }
            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $sliders,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function settings()
    {
        try {
            $settings = Setting::pluck('value', 'key');

            if ($settings['site_main_logo']) {
                $settings['site_main_logo'] = asset('admin/images/setting/' . $settings['site_main_logo']);
            }

            if ($settings['site_footer_logo']) {
                $settings['site_footer_logo'] = asset('admin/images/setting/' . $settings['site_footer_logo']);
            }

            if ($settings['fav_icon']) {
                $settings['fav_icon'] = asset('admin/images/setting/' . $settings['fav_icon']);
            }

            if ($settings['about_section_image']) {
                $settings['about_section_image'] = asset('admin/images/setting/' . $settings['about_section_image']);
            }

            if ($settings['about_mission_image']) {
                $settings['about_mission_image'] = asset('admin/images/setting/' . $settings['about_mission_image']);
            }

            if ($settings['about_vision_image']) {
                $settings['about_vision_image'] = asset('admin/images/setting/' . $settings['about_vision_image']);
            }

            if ($settings['about_page_banner']) {
                $settings['about_page_banner'] = asset('admin/images/setting/' . $settings['about_page_banner']);
            }

            if ($settings['course_page_banner']) {
                $settings['course_page_banner'] = asset('admin/images/setting/' . $settings['course_page_banner']);
            }

            if ($settings['faq_page_banner']) {
                $settings['faq_page_banner'] = asset('admin/images/setting/' . $settings['faq_page_banner']);
            }


            if ($settings['country_page_banner']) {
                $settings['country_page_banner'] = asset('admin/images/setting/' . $settings['country_page_banner']);
            }

            if ($settings['blog_page_banner']) {
                $settings['blog_page_banner'] = asset('admin/images/setting/' . $settings['blog_page_banner']);
            }

            if ($settings['service_page_banner']) {
                $settings['service_page_banner'] = asset('admin/images/setting/' . $settings['service_page_banner']);
            }

            if ($settings['contact_page_banner']) {
                $settings['contact_page_banner'] = asset('admin/images/setting/' . $settings['contact_page_banner']);
            }

            if ($settings['contact_image']) {
                $settings['contact_image'] = asset('admin/images/setting/' . $settings['contact_image']);
            }

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                "data" => $settings,
                'message' => 'Retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function inquiryStore(Request $request)
    {

        try {
            $validation = Validator::make($request->all(), [
                'name' => 'required',
                'question' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required'
            ]);


            if ($validation->fails()) {
                return response()->json(['statusCode' => 401, 'error' => true, 'error_message' => $validation->errors(), 'message' => 'Please fill the input field properly']);
            }

            Inquiry::create([
                'name' => $request->name,
                'question' => $request->question,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            return response()->json([
                "statusCode" => 200,
                "error" => false,
                'message' => 'Thank you, your enquiry has been submitted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['statusCode' => 401, 'error' => true, 'message' => $e->getMessage()]);
        }
    }
}
