<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/module-css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/images/logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
        .toast-success {
            background-color: #f9136b;
        }
    </style>
    <title>Become Members</title>
</head>

<body class="mempage">
    <section class="Member-page">
        <div class="container">
            <div class="contact-page__inner">
                <img style="display:flex;margin: 0 auto;" src="{{ asset('admin/images/logo.jpg') }}" alt=""
                    height="200px" width="200px">
                <h3 class="contact-page__title mt-3" style="margin-bottom: 20px;">MEMBERSHIP FORM</h3>
                <div class="description">
                    <P class="mb-3">
                        Join the Rotaract Club of Narayani Mid Town and be a part of a dynamic community dedicated to
                        meaningful
                        service, leadership development, and fostering connections. As a member, you'll contribute to
                        positive
                        change in Rotaract Club of Narayani Mid Town and beyond.
                    </P>
                    <h5 class="mb-3">About Rotaract:</h5>
                    <p class="mb-3">
                        A global organization uniting young professionals and students 18-30 years old. Rotaract focuses
                        on
                        personal development, international networking and community service. Affiliated with Rotary
                        International, our commitment is to create positive change on a global scale.
                    </p>
                    <h5 class="mb-3">Why To Join?</h5>
                    <ul>
                        <li class="mb-2">
                            Shape Tomorrow's Leaders: As today's youth, you'll evolve into responsible, productive
                            members
                            of
                            society through the tools and skills learned in Rotaract.
                        </li>
                        <li class="mb-2">
                            Global Impact: Participate in community service locally and internationally, building
                            valuable
                            networks
                            and honing public, professional, and leadership skills.
                        </li>
                    </ul>
                    <h5 class="mb-3">Rotaract Club of Narayani Mid Town Highlights:</h5>
                    <ul>
                        <li class="mb-2">
                            Established in 1st Februrary, 2007.
                        </li>
                        <li class="mb-2">
                            16 years of active involvement in education, healthcare, environmental conservation, and
                            social
                            welfare
                            projects.
                        </li>
                        <li class="mb-2">
                            Proudly sponsored by the Rotary Club of Narayani Mid Town.
                        </li>
                    </ul>
                    <h5 class="mb-3"> Our Focus:</h5>
                    <ul>
                        <li class="mb-2">
                            Professional Development
                        </li>
                        <li class="mb-2">
                            Community Service
                        </li>
                        <li class="mb-2">
                            Public and Leadership development
                        </li>
                        <li class="mb-2">
                            National and Internation Networking
                        </li>
                        <li class="mb-2">
                            Fellowship
                        </li>
                    </ul>
                    <h5 class="mb-3">Membership Benefits:</h5>
                    <ul>
                        <li class="mb-2">
                            Gain valuable insights for well-rounded personal development.
                        </li>
                        <li class="mb-2">
                            Access mentorship and guidance for career growth.
                        </li>
                        <li class="mb-2">
                            Connect with like-minded individuals locally and internationally .
                        </li>
                        <li class="mb-2">
                            Access networking opportunities and mentorship from experienced Rotarians.'
                        </li>
                        <li class="mb-2">
                            Build lasting friendships with individuals passionate about service
                        </li>
                    </ul>
                    <h5 class="mb-3"> Meeting Information:</h5>
                    <ul>
                        <li class="mb-2">
                            Date: Every 1st and 3rd Saturday of the Nepali Month
                        </li>
                        <li class="mb-2">
                            Time: 8:30 A.M.
                        </li>
                        <li class="mb-2">
                            Royal Century Hotel
                        </li>
                    </ul>
                    <p class="mb-3">
                        Seize the opportunity to join a worldwide initiative committed to service, fellowship, and
                        personal
                        development. Join in the Rotaract Club of Narayani Mid Town today, and together, let's forge a
                        brighter
                        future!
                    </p>
                </div>

                <form class="contact-form-validated contact-page__form" id="registerform"
                    action="https://html.themehealer.com/chioary/assets/inc/sendemail.php" method="post"
                    enctype="multipart/form-data" novalidate="novalidate" action="{{ route('member') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">Your Name</h4>
                                <input type="text" name="name" placeholder="Enter Your Name" required="">
                                <span class="text-danger">
                                    <strong id="name-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">Your Email</h4>
                                <input type="email" name="email" placeholder="example@gmail.com" required="">
                                <span class="text-danger">
                                    <strong id="email-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <h4 class="contact-page__input-title">Photo</h4>
                            <input class="form-control @error('image') is-invalid @enderror image" id=""
                                type="file" name="image">
                            <img class="view-image mt-2" src="" height="100" alt="">
                            <span class="text-danger">
                                <strong id="image-error"></strong>
                            </span>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">Current Address</h4>
                                <input type="text" name="current_address" placeholder="Enter Your current address"
                                    required="">
                                <span class="text-danger">
                                    <strong id="current_address-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">Permanent Address</h4>
                                <input type="text" name="permanent_address"
                                    placeholder="Enter your permanent address" required="">
                                <span class="text-danger">
                                    <strong id="permanent_address-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">Date of Birth (A.D.)</h4>
                                <input type="date" name="dobad" placeholder="yyyy-mm-dd" required="">
                                <span class="text-danger">
                                    <strong id="dobad-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">Date of Birth (B.S.)</h4>
                                <input type="date" name="dobbs" placeholder="yyyy-mm-dd" required="">
                                <span class="text-danger">
                                    <strong id="dobbs-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">Phone</h4>
                                <input type="number" name="phone" placeholder="Enter your Number" required="">
                                <span class="text-danger">
                                    <strong id="phone-error"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">Profession</h4>
                                <select name="profession" placeholder="Enter your Profession" required="">
                                    <option value="" disabled selected>Select Profession</option>
                                    <option value="NGO / INGO / Social work">NGO / INGO / Social work</option>
                                    <option value="Software Development / IT / Telecommunication">Software Development
                                        /
                                        IT / Telecommunication</option>
                                    <option value="Student- Finance/Management/Account/IT">Student-
                                        Finance/Management/Account/IT</option>
                                    <option value="Student -Medical/Science">Student -Medical/Science</option>
                                    <option value="Student-Engineering (Civil/ Mechanical/ Computer/Communication)">
                                        Student-Engineering (Civil/ Mechanical/ Computer/Communication)</option>
                                    <option value="Student- Legal Service">Student- Legal Service</option>
                                    <option value="Teaching/ Education">Teaching/ Education</option>
                                    <option value="Banker/ Administration/ Account/ Management/Insurance/Financial">
                                        Banker/ Administration/ Account/ Management/Insurance/Financial</option>
                                    <option value="Business/ Entrepreneur/Human Resource Management">Business/
                                        Entrepreneur/Human Resource Management</option>
                                    <option value="Healthcare/ Medical/ Dental/ Nurse/ Doctor/ Pharma/Lab">Healthcare/
                                        Medical/ Dental/ Nurse/ Doctor/ Pharma/Lab</option>
                                    <option value="Fashion/ Designing/ Graphic/ Multimedia/Art/ Photo-Video graphic">
                                        Fashion/ Designing/ Graphic/ Multimedia/Art/ Photo-Video graphic</option>
                                    <option value="Engineer (Civil/ Mechanical/ Computer/Communication)">Engineer
                                        (Civil/ Mechanical/ Computer/Communication)</option>
                                    <span class="text-danger">
                                        <strong id="profession-error"></strong>
                                    </span>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">Gender</h4>
                                <select id="gender" name="gender">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">Blood</h4>
                                <select id="" name="blood">
                                    <option value="" disabled selected>Select Blood group</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="contact-page__input-box">
                                <h4 class="contact-page__input-title">How do you know about rotaract?
                                </h4>
                                <input type="text" name="known" placeholder="Your Answer" required="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-page__input-box text-message-box">
                                <h4 class="contact-page__input-title">Message</h4>
                                <textarea name="comments" placeholder="Write your message"></textarea>
                            </div>
                        </div>
                        <div class="contact-page__btn-box">
                            <button class="contact-page__btn" id="memberform" type="submit"><span>Submit
                                    Now</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <a class="btn btn-success mt-5" href="{{ route('home') }}">Return Home</a>
        </div>
    </section>
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#memberform').click(function(e) {
            e.preventDefault();
            var RegisterData = new FormData($('#registerform')[0]);
            $('#name-error').html("");
            $('#email-error').html("");
            $('#current_address-error').html("");
            $('#permanent_address-error').html("");
            $('#phone-error').html("");
            $('#dobad-error').html("");
            $('#dobbs-error').html("");
            $('#profession-error').html("");
            $('#gender-error').html("");
            $('#blood-error').html("");
            $.ajax({
                url: "{{ route('member') }}",
                method: 'POST',
                data: RegisterData,
                processData: false,
                cache: false,
                contentType: false,

                success: function(data) {
                    if (data.errors) {
                        if (data.errors.name) {
                            $('#name-error').html('*' + data.errors.name[0]);
                        }
                        if (data.errors.email) {
                            $('#email-error').html('*' + data.errors.email[0]);
                        }
                        if (data.errors.current_address) {
                            $('#current_address-error').html('*' + data.errors.current_address[0]);
                        }
                        if (data.errors.permanent_address) {
                            $('#permanent_address-error').html('*' + data.errors.permanent_address[0]);
                        }
                        if (data.errors.phone) {
                            $('#phone-error').html('*' + data.errors.phone[0]);
                        }
                        if (data.errors.dobad) {
                            $('#dobad-error').html('*' + data.errors.dobad[0]);
                        }
                        if (data.errors.dobbs) {
                            $('#dobbs-error').html('*' + data.errors.dobbs[0]);
                        }
                        if (data.errors.profession) {
                            $('#profession-error').html('*' + data.errors.profession[0]);
                        }
                        if (data.errors.gender) {
                            $('#gender-error').html('*' + data.errors.gender[0]);
                        }
                        if (data.errors.blood) {
                            $('#blood-error').html('*' + data.errors.blood[0]);
                        }
                    }

                    if (data.success) {
                        toastr.success(data.success);
                        $('#registerform')[0].reset();
                    }

                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    alert("Error: " + xhr.responseText);
                }
            });

        });
    </script>
</body>

</html>
