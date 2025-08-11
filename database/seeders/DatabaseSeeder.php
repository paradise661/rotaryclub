<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Branch;
use App\Models\Country;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\OurTeam;
use App\Models\Page;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SocialMedia;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['site_main_logo', Null],
            ['site_footer_logo', Null],
            ['site_information', 'Suspendisse non sem ante. Cras pretium gravida leo a convallis. Nam malesuada interdum metus, sit amet dictum ante congue eu. Maecenas ut maximus enim.'],
            ['map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0107418172497!2d85.30684197982043!3d27.71695461475112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb194c6c187511%3A0x90398cc153754317!2sParadise%20InfoTech%20-%20IT%20Company%20in%20Nepal!5e0!3m2!1sen!2snp!4v1721798132844!5m2!1sen!2snp'],
            ['site_copyright', '2022 All right Reserved'],
            ['site_contact', '9841617710'],
            ['site_email', 'info@rotary.com.np'],
            ['whatsapp', '9841617710'],
            ['site_email2', 'rotary@gmail.com'],
            ['apply_now_link', null],
            ['company_name', 'rotary'],
            ['office_hour', '10 am - 5 pm'],
            ['office_location', 'Putalisadak, Opposite to NMB Bank Limited'],
            ['homepage_about_slogan', 'We Provide Best Quality Education'],

            ['global_section', 'Do you have any questions?'],

            ['faq_title', 'Welcome'],
            ['faq_slogan', 'Lorem Ipsum dolor sit amet'],
            ['project_section_title', 'Recent Projects'],
            ['project_section_slogan', 'Empowering through Projects'],
            ['service_section_title', 'what we do'],
            ['service_section_slogan', 'Transforming Lives Through Our Service'],
            ['event_section_title', 'Upcoming Events'],
            ['event_section_slogan', 'Events Schedule'],
            ['blog_section_title', 'Our Latest Blog'],
            ['blog_section_slogan', 'Collective Efforts'],
            ['team_section_title', 'Our Team Member'],
            ['team_section_slogan', 'Meet Our Staffs'],
            ['branch_section_title', 'OUR EXPERIENCED STAFFS'],
            ['branch_section_slogan', 'Meet Our Experts'],
            ['testimonial_section_title', ' Our Tetsimonials'],
            ['testimonial_section_slogan', 'Our impact in Their Words'],
            ['university_section_title', 'Our Students Studying at'],
            ['faq_section_title', 'Our Faq'],
            ['faq_section_slogan', 'Frequently Asked Questions.'],
            ['volunteer_section_title', 'Become Volunteer.'],
            ['volunteer_section_slogan', 'Becoming a volunteer with Chioary means joining a dedicated team committed to making a difference. We welcome individuals from all walks of life who are passionate'],

            ['homepage_seo_title', 'rotary'],
            ['homepage_seo_description', 'rotary'],
            ['homepage_seo_keywords', 'rotary'],
            ['fav_icon', null],
            ['service_section_image', null],

            ['about_section_title', 'A Few Words About the Club'],
            ['about_section_description', 'With the help of our knowledge and experience, we can determine which universities are best for each student. We are able to provide our students with the best services. For the best colleges and educational institutions in the world, we serve as representatives and recruiters. For students wishing to pursue their academic interests in some of the most amazing countries in the world, such as Australia, United Kingdom, Canada, New Zealand, and the United States, we provide complete advising and application management services.'],
            ['about_section_slogan', 'About Our Club'],
            ['students_count', '5'],
            ['students_count_icon', null],
            ['students_count_title', 'Students'],
            ['experience_count', '25'],
            ['experience_count_icon', null],
            ['experience_count_title', 'Experience'],
            ['branch_count', '3'],
            ['branch_count_icon', null],
            ['branch_count_title', 'Branch'],
            ['success_count', '50'],
            ['success_count_icon', null],
            ['success_count_title', 'Success'],
            ['countries_count', '10'],
            ['experts_count', '20'],
            ['about_section_image', null],
            ['about_section_image2', null],
            ['faq_section_image', null],
            ['about_mission_image', null],
            ['mission_section_description', 'We love to hear from you. Our friendly team is always here to chat'],
            ['about_vision_image', null],
            ['vision_section_description', 'We love to hear from you. Our friendly team is always here to chat'],

            ['about_page_banner', null],
            ['course_page_banner', null],
            ['country_page_banner', null],
            ['blog_page_banner', null],
            ['faq_page_banner', null],
            ['service_page_banner', null],
            ['contact_page_banner', null],


            ['contact_section_description', 'We love to hear from you. Our friendly team is always here to chat'],
            ['contact_seo_title', 'rotary'],
            ['contact_seo_keywords', 'rotary'],
            ['contact_seo_description', 'rotary'],
            ['contact_image', null],

            ['banner_section_slogan', 'Nepal Top-Rated'],
            ['banner_section_title', 'Education Consultants with 24000+ success stories'],
            ['banner_section_timeframe', 'Since 2006'],
            ['banner_section_formtitle', 'Book Your Free Consultation'],
            ['banner_section_formdescription', 'Please contact me by phone, email, Whatsapp, or SMS to assist with my inquiry.Our Students Studying at'],
            ['banner_section_image', null],

            ['countries_seo_title', 'rotary'],
            ['countries_seo_keywords', 'rotary'],
            ['countries_seo_description', 'rotary'],

            ['blogs_seo_title', 'rotary'],
            ['blogs_seo_keywords', 'rotary'],
            ['blogs_seo_description', 'rotary'],

            ['services_seo_title', 'rotary'],
            ['services_seo_keywords', 'rotary'],
            ['services_seo_description', 'rotary'],

            ['courses_seo_title', 'rotary'],
            ['courses_seo_keywords', 'rotary'],
            ['courses_seo_description', 'rotary'],
        ];

        if (count($items)) {
            foreach ($items as $item) {
                \App\Models\Setting::create([
                    'key' => $item[0],
                    'value' => $item[1] ?? null,
                ]);
            }
        }

        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@rotary.com',
            'password' => Hash::make('password'),
        ]);

        $pages = [
            ['title' => 'Privacy Policy', 'description' => 'Lorem ipsum dolor sit amet consectetur. Enim nulla at ultrices mus porttitor. Cursus sed eu neque fringilla sed maecenas lorem vulputate tristique. Mollis massa nulla vulputate eget imperdiet nc fringilla fermentum hendrerit sagittis praesent nulla nulla. Erat nascetur ut tortor nam faucibus amet tincidunt luctus nibh. Elementum massa parturient pellentesque egestas potenti et. Diam vulputate convallis sed purus eros ac amet erat risus. Lectus quisque elementum a velit urna nulla. Sit augue vestibulum gravida ante duis vitae. Rhoncus donec mi sed metus sed cursus sed. Cursus molestie vel nisi cursus amet. A viverra magnis mattis ultrices diam dapibus. Quam amet purus lacus vitae sapien viverra sit sapien. Aenean tincidunt orci diam at amet commodo eget.', 'short_description' => null, 'slug' => 'privacy-policy', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['title' => 'Terms and Conditions', 'description' => 'Lorem ipsum dolor sit amet consectetur. Enim nulla at ultrices mus porttitor. Cursus sed eu neque fringilla sed maecenas lorem vulputate tristique. Mollis massa nulla vulputate eget imperdiet nc fringilla fermentum hendrerit sagittis praesent nulla nulla. Erat nascetur ut tortor nam faucibus amet tincidunt luctus nibh. Elementum massa parturient pellentesque egestas potenti et. Diam vulputate convallis sed purus eros ac amet erat risus. Lectus quisque elementum a velit urna nulla. Sit augue vestibulum gravida ante duis vitae. Rhoncus donec mi sed metus sed cursus sed. Cursus molestie vel nisi cursus amet. A viverra magnis mattis ultrices diam dapibus. Quam amet purus lacus vitae sapien viverra sit sapien. Aenean tincidunt orci diam at amet commodo eget.', 'short_description' => null, 'slug' => 'terms-and-conditions', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        ];

        Page::insert($pages);

        $services = [
            ['title' => 'Interview Preparation', 'status' => 1, 'short_description' => 'Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing listically', 'description' => null, 'image' => null, 'logo' => null, 'slug' => 'interview-preparation', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['title' => 'Visa Documentation', 'status' => 1, 'short_description' => 'Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing listically', 'description' => null, 'image' => null, 'logo' => null, 'slug' => 'visa-documentation', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        ];

        Service::insert($services);

        $courses = [
            ['name' => 'IELTS', 'status' => 1, 'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatem numquam similique dolorem sapiente voluptas sint unde corporis voluptatum.', 'description' => null, 'image' => null,  'slug' => 'ielts', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'TOFEL', 'status' => 1, 'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatem numquam similique dolorem sapiente voluptas sint unde corporis voluptatum.', 'description' => null, 'image' => null,  'slug' => 'tofel', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'SAT', 'status' => 1, 'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatem numquam similique dolorem sapiente voluptas sint unde corporis voluptatum.', 'description' => null, 'image' => null, 'slug' => 'sat', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'GRE', 'status' => 1, 'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatem numquam similique dolorem sapiente voluptas sint unde corporis voluptatum.', 'description' => null, 'image' => null, 'slug' => 'gre', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        ];

        Course::insert($courses);

        $countries = [
            ['name' => 'AUSTRALIA', 'status' => 1, 'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatem numquam similique dolorem sapiente voluptas sint unde corporis voluptatum.',  'image' => null, 'banner_image' => null,  'slug' => 'australia', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'USA', 'status' => 1, 'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatem numquam similique dolorem sapiente voluptas sint unde corporis voluptatum.',  'image' => null, 'banner_image' => null,  'slug' => 'usa', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'CANADA', 'status' => 1, 'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatem numquam similique dolorem sapiente voluptas sint unde corporis voluptatum.',  'image' => null, 'banner_image' => null, 'slug' => 'canada', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'JAPAN', 'status' => 1, 'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatem numquam similique dolorem sapiente voluptas sint unde corporis voluptatum.',  'image' => null, 'banner_image' => null, 'slug' => 'japan', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'South Korea', 'status' => 1, 'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatem numquam similique dolorem sapiente voluptas sint unde corporis voluptatum.',  'image' => null, 'banner_image' => null, 'slug' => 'south-korea', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        ];

        Country::insert($countries);


        // $features = [
        //     ['title' => 'Hours of counseling experience', 'icon' => 'fa-clock', 'status' => 1, 'highlight' => '150,000+', 'description' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        //     ['title' => 'Students placed Abroad', 'icon' => 'fa-user-graduate', 'status' => 1, 'highlight' => '24,000+', 'description' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        //     ['title' => 'Visa success Rate', 'icon' => 'fa-building-columns', 'status' => 1, 'highlight' => '99%', 'description' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        //     ['title' => 'Years of Experience', 'icon' => 'fa-calendar-days', 'status' => 1, 'highlight' => '17', 'description' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        //     ['title' => 'Scholarships worth US $15.5 million won for our students', 'icon' => 'fa-money-bill', 'status' => 1, 'highlight' => 'US $15.5', 'description' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        //     ['title' => 'One-on-One in depth counseling', 'icon' => 'fa-people-arrows', 'status' => 1, 'highlight' => '1-1', 'description' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        //     ['title' => 'Universities have exclusive scholarship for NEEC students', 'icon' => 'fa-building-columns', 'status' => 1, 'highlight' => '25', 'description' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        //     ['title' => 'Priority offer from the University', 'icon' => 'fa-thumbs-up', 'status' => 1, 'highlight' => '100', 'description' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        // ];

        // Feature::insert($features);

        $faqs = [
            ['title' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['title' => 'Lorem ipsum dolor2, sit amet consectetur adipisicing elit.Assumenda, quaerat.',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['title' => 'Lorem ipsum dolor3, sit amet consectetur adipisicing elit.Assumenda, quaerat.',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        ];

        Faq::insert($faqs);

        $testimonials = [
            ['name' => 'Durgesh Upadhyaya', 'position' => 'Web Developer',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'image' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'Kabiraj Bhatta', 'position' => 'Web Developer',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'image' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'Rabin Shrestha', 'position' => 'Designer',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'image' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'Bishan Magar', 'position' => 'Frontend',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'image' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'Sanjay Thapa', 'position' => 'UI/UX',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'image' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        ];

        Testimonial::insert($testimonials);

        $blogs = [
            ['title' => 'How can I Immigrate from Nepal to Canada', 'is_popular' => '1', 'created_by' => '1',   'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam officiis unde excepturi, dolore consequatur commodi autem aliquid distinctio animi eius?', 'image' => null, 'description' => null, 'slug' => 'how-can-i-immigrate-from-nepal-to-canada', 'date' => date('Y-m-d h:i:s'), 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['title' => 'Various types of jobs International Students', 'is_popular' => '0', 'created_by' => '1',   'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam officiis unde excepturi, dolore consequatur commodi autem aliquid distinctio animi eius?', 'image' => null, 'description' => null, 'slug' => 'various-types-of-jobs-international-students', 'date' => date('Y-m-d h:i:s'), 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        ];

        Blog::insert($blogs);

        $socialmedias = [
            ['title' => 'Facebook', 'link' => '#',   'icon' => 'fa-facebook', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Instagram', 'link' => '#',  'icon' => 'fa-instagram', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Twitter', 'link' => '#',    'icon' => 'fa-twitter', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Linkedin', 'link' => '#',    'icon' => 'fa-linkedin', 'created_at' => now(), 'updated_at' => now()],
        ];

        SocialMedia::insert($socialmedias);

        $teams = [
            ['name' => 'Durgesh Upadhyaya', 'position' => 'Developer',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'image' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'Kabiraj Bhatta', 'position' => 'Project Manager',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'image' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'Bishan Magar', 'position' => 'Frontend',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'image' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'Gabish Khanal', 'position' => 'CEO/Founder',   'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Assumenda, quaerat.', 'image' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        ];

        OurTeam::insert($teams);

        $branches = [
            ['name' => 'Kathmandu', 'location' => 'opposite of LOD', 'order' => '1', 'email' => 'info@neeckathmandu.com',   'phone' => '01-0522222', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'Lalitpur', 'location' => 'opposite of LOD', 'order' => '3', 'email' => 'info@neeclalitpur.com',   'phone' => '01-0522222', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['name' => 'Bhaktapur', 'location' => 'opposite of LOD', 'order' => '4', 'email' => 'info@neecbhaktapur.com',   'phone' => '01-0522222', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        ];

        Branch::insert($branches);


        $sliders = [
            ['title' => 'Education is the best key success in life', 'slogan' => 'Welcome to rotary', 'order' => 1, 'description' => 'Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception. Music, poetry, prayers, or readings from.',  'image' => null,  'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
            ['title' => 'Efficient & Flexible', 'slogan' => 'rotary', 'order' => 2, 'description' => 'Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception. Music, poetry, prayers, or readings from.',  'image' => null, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s')],
        ];

        Slider::insert($sliders);
    }
}
