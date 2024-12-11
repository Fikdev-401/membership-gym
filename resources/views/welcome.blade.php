<!DOCTYPE html>
<html>

<head>
    <title>Membership Gym</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('./bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('./style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./fonts/icomoon/icomoon.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('./slick/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('./slick/slick/slick-theme.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">



</head>

<body class="overflow-x">
    <div id="body-wrapper">
        <header id="header" class="bg-black">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg col-md-12 padding-small">
                        <div class="nav-brand">
                            <a href="/" class="text-danger text-uppercase">Alpha Gym</a>
                        </div>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#slide-navbar-collapse" aria-controls="slide-navbar-collapse"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="icon icon-navicon"></i></span>
                        </button>
                        <div class="navbar-collapse collapse text-hover" id="slide-navbar-collapse">
                            <ul class="navbar-nav list-inline light text-uppercase">
                                <li class="nav-item active"><a href="index.html" class="navlink">home</a></li>
                                <li class="nav-item"><a href="about.html">about us</a></li>
                                <li class="nav-item"><a href="trainer.html">trainers</a></li>
                                <li class="nav-item"><a href="#">class</a></li>
                                <li class="nav-item"><a href="">blog</a></li>
                                <li class="nav-item"><a href="">contact us</a></li>
                            </ul>
                            <ul class="navbar-nav list-inline light text-uppercase">
                                @if (Route::has('login'))
                                    @auth
                                        <a class="dropdown-item bg-black" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @else
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}">Login</a>
                                        </li>
                                    @endif
                                    @endif
                                </ul>

                            </div><!--navbar-collapse-->
                        </nav>
                    </div>
                </div>
            </header>

            <section id="billboard">
                <div class="button-container">
                    <button class="prev slick-arrow"><i class="icon mb-2 mr-1 icon-angle-left"></i></button>
                    <button class="next slick-arrow"><i class="icon mb-2 mr-1 icon-angle-right"></i></button>
                </div>
                <div class="slider">
                    <div class="slider-item">
                        <div class="container">
                            <div class="row">
                                <div class="text-content light offset-md-5">
                                    <h2><strong class="colored">Hard Work</strong> is for Every Success</h2>
                                    <p><em>Start by taking inspirations, continue it to give inspirations</em></p>
                                </div><!--text-content-->
                            </div>
                        </div>
                    </div><!--slider-item-->

                    <div class="slider-item">
                        <div class="container">
                            <div class="row">
                                <div class="text-content light offset-md-5">
                                    <h2><strong class="colored">Hard Work</strong> is for Every Success</h2>
                                    <p><em>Start by taking inspirations, continue it to give inspirations</em></p>
                                </div><!--text-content-->
                            </div>
                        </div>
                    </div><!--slider-item-->

                    <div class="slider-item">
                        <div class="container">
                            <div class="row">
                                <div class="text-content light offset-md-5">
                                    <h2><strong class="colored">Hard Work</strong> is for Every Success</h2>
                                    <p><em>Start by taking inspirations, continue it to give inspirations</em></p>
                                </div><!--text-content-->
                            </div>
                        </div>
                    </div><!--slider-item-->
                </div>
            </section><!----#billboard----->

            <section class="about-us padding-medium bg-sand">
                <div class="container">
                    <div class="row">
                        <div class="section-header text-center">
                            <h2 class="section-title pb-4">About Us</h2>
                            <p>Alpha Gym adalah tempat terbaik untuk memulai dan mencapai tujuan kebugaran Anda. Dengan
                                fasilitas modern, pelatih profesional, dan berbagai program yang dirancang untuk semua
                                tingkat kemampuan, kami menyediakan lingkungan yang mendukung dan memotivasi. Bergabunglah
                                dengan komunitas kami untuk menjalani gaya hidup sehat dan aktif bersama orang-orang yang
                                memiliki semangat yang sama.</p>
                        </div>
                        <div class="iconbox-wrapper d-flex pt-4 p-sm-3">
                            <div class="iconbox col-md-4 text-center bg-white p-40 mb-3">
                                <div class="iconbox-icon mb-3">
                                    <i class="icon icon-group"></i>
                                </div>
                                <div class="iconbox-content">
                                    <h3 class="colored">Winner Coaches</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div><!--iconbox-->

                            <div class="iconbox col-md-4 text-center bg-white p-40 mrl-3 mb-3">
                                <div class="iconbox-icon mb-3">
                                    <i class="icon icon-price-tags"></i>
                                </div>
                                <div class="iconbox-content">
                                    <h3 class="colored">Affordable Price</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div><!--iconbox-->

                            <div class="iconbox col-md-4 text-center bg-white p-40 mb-3">
                                <div class="iconbox-icon mb-3">
                                    <i class="icon icon-dumble"></i>
                                </div>
                                <div class="iconbox-content">
                                    <h3 class="colored">Modern Equipments</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div><!--iconbox-->
                        </div><!--iconbox-wrapper-->
                    </div>
                </div>
            </section>

            <section class="membership padding-medium light front-dark">
                <div class="membership-wrapper padding-medium">
                    <h2 class="section-title text-center mb-4">Membership</h2>
                        <div class="container">
                            <div class="row">
                                <div class="flex-container">
                                    <div class="membership-box mb-3">
                                        <div class="heading-box">
                                            <h3>standard</h3>
                                        </div>
                                        <div class="text-content">
                                            <div class="inclusion">
                                                <ul class="list-unstyled colored-alto">
                                                    <li><i class="icon icon-check"></i>Includes Membership</li>
                                                    <li><i class="icon icon-check"></i>Access To All Gym Facilities</li>
                                                    <li><i class="icon icon-close"></i>Diet Plan Included</li>
                                                    <li><i class="icon icon-check"></i>Health and Fitness Tips</li>
                                                    <li><i class="icon icon-close"></i>Monday-Friday Gym Access</li>
                                                    <li><i class="icon icon-check"></i>Full Access To Everything</li>
                                                    <li><i class="icon icon-close"></i>No Additional Amenities</li>
                                                </ul>
                                            </div><!--inclusion-->
                                            <div class="meta-price">
                                                <p><sup>$</sup><strong>30</strong><em>/month</em></p>
                                            </div>
                                        </div><!--text-content-->
                                    </div><!--membership-box-->

                                    <div class="membership-box mb-3">
                                        <div class="heading-box">
                                            <h3>ultimate</h3>
                                        </div>
                                        <div class="text-content">
                                            <div class="inclusion">
                                                <ul class="list-unstyled colored-alto">
                                                    <li><i class="icon icon-check"></i>Includes Membership</li>
                                                    <li><i class="icon icon-check"></i>Access To All Gym Facilities</li>
                                                    <li><i class="icon icon-check"></i>Diet Plan Included</li>
                                                    <li><i class="icon icon-check"></i>Health and Fitness Tips</li>
                                                    <li><i class="icon icon-check"></i>Monday-Friday Gym Access</li>
                                                    <li><i class="icon icon-check"></i>Full Access To Everything</li>
                                                    <li><i class="icon icon-check"></i>No Additional Amenities</li>
                                                </ul>
                                            </div><!--inclusion-->
                                            <div class="meta-price">
                                                <p><sup>$</sup><strong>45</strong><em>/month</em></p>
                                            </div>
                                        </div><!--text-content-->
                                    </div><!--membership-box-->

                                    <div class="membership-box mb-3">
                                        <div class="heading-box">
                                            <h3>professional</h3>
                                        </div>
                                        <div class="text-content">
                                            <div class="inclusion">
                                                <ul class="list-unstyled colored-alto">
                                                    <li><i class="icon icon-check"></i>Includes Membership</li>
                                                    <li><i class="icon icon-check"></i>Access To All Gym Facilities</li>
                                                    <li><i class="icon icon-check"></i>Diet Plan Included</li>
                                                    <li><i class="icon icon-check"></i>Health and Fitness Tips</li>
                                                    <li><i class="icon icon-check"></i>Monday-Friday Gym Access</li>
                                                    <li><i class="icon icon-check"></i>Full Access To Everything</li>
                                                    <li><i class="icon icon-check"></i>No Additional Amenities</li>
                                                </ul>
                                            </div><!--inclusion-->
                                            <div class="meta-price">
                                                <p><sup>$</sup><strong>60</strong><em>/month</em></p>
                                            </div>
                                        </div><!--text-content-->
                                    </div><!--membership-box-->
                                </div><!--col-md-12-->
                            </div>
                        </div>
                        @if (Route::has('login'))
                        @auth
                        <div class="hvr-shutter-in-horizontal light text-center btn-box ml-4 mb-2"><a
                            href="{{route('form')}}" >Buy Memebership</a></div><!--membership-wrapper-->
                        @else
                        <div class="hvr-shutter-in-horizontal light text-center btn-box ml-5 mb-5"><a
                            href="{{route('login')}}" >Login to buy</a></div>
                        @endif
                        @endif
                    </div>
                </section>

                <section class="bmi-calculator padding-small">
                    <div class="section-header text-center p-30">
                        <h2 class="section-title pb-4">BMI Calculator</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="calculator-wrap d-flex flex-wrap mb-4">
                                <select id="gender" class="btn-box mr-2 mb-2">
                                    <option value="Your Gender" disabled selected>Your Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <input type="text" id="height" placeholder="Your Height in Meters" class="btn-box mr-2 mb-2">
                                <input type="text" id="weight" placeholder="Your Weight in Kg" class="btn-box mr-2 mb-2">
                                <div id="calculateBtn" class="hvr-shutter-in-horizontal light text-center btn-box mr-2 mb-2">
                                    <a href="#">Calculate</a>
                                </div>
                                <div id="resetBtn" class="hvr-shutter-in-horizontal light text-center btn-box mr-2 mb-2">
                                    <a href="#">Reset</a>
                                </div>
                                <input type="text" id="result" placeholder="Result here" class="btn-box" readonly>
                            </div><!--calculator-wrap-->

                            <div class="bodymassindex text-center">
                                <h5>Body Mass Index</h5>
                                <p>Enter your details above to calculate your BMI.</p>
                                <table class="index">
                                    <tr class="text-uppercase border-bottom">
                                        <th>BMI</th>
                                        <th>Classification</th>
                                    </tr>
                                    <tr>
                                        <td>18-25</td>
                                        <td>Normal Weight</td>
                                    </tr>
                                    <tr>
                                        <td>25-30</td>
                                        <td>Overweight</td>
                                    </tr>
                                    <tr>
                                        <td>30-40</td>
                                        <td>Obesity</td>
                                    </tr>
                                    <tr>
                                        <td>40-above</td>
                                        <td>Morbid Obesity</td>
                                    </tr>
                                </table>
                            </div><!--bodymassindex-->
                        </div>
                    </div>
                </section>

                <section class="testimonials-wrap mt-3 mb-5">
                    <div class="section-header text-center p-30">
                        <h2 class="section-title pb-4">Our Testimonials</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="testimonial-slider d-flex mb-6">

                                <div class="col-md-4 testimonials-inner text-center">
                                    <figure>
                                        <img src="images/lucy.jpg" alt="lucy" class="authorImg img-circle">
                                    </figure>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.</p>
                                    <div class="testimonial-author">
                                        <span class="name colored">Lucy Antony</span>
                                    </div>
                                </div>

                                <div class="col-md-4 testimonials-inner text-center">
                                    <figure>
                                        <img src="images/michael.jpg" alt="Michael" class="authorImg img-circle">
                                    </figure>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.</p>
                                    <div class="testimonial-author">
                                        <span class="name colored">Michael Smith</span>
                                    </div>
                                </div>

                                <div class="col-md-4 testimonials-inner text-center">
                                    <figure>
                                        <img src="images/maria.jpg" alt="Maria" class="authorImg img-circle">
                                    </figure>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.</p>
                                    <div class="testimonial-author">
                                        <span class="name colored">Maria Garcia</span>
                                    </div>
                                </div>

                                <div class="col-md-4 testimonials-inner text-center">
                                    <figure>
                                        <img src="images/lucy.jpg" alt="Lucy" class="authorImg img-circle">
                                    </figure>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.</p>
                                    <div class="testimonial-author">
                                        <span class="name colored">Jennie Rose</span>
                                    </div>
                                </div>

                                <div class="col-md-4 testimonials-inner text-center">
                                    <figure>
                                        <img src="images/lucy.jpg" alt="Lucy" class="authorImg img-circle">
                                    </figure>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.</p>
                                    <div class="testimonial-author">
                                        <span class="name colored">Jennie Rose</span>
                                    </div>
                                </div>

                            </div><!--testimonial-slider-->
                        </div>
                    </div>
                </section>


                <div class="footer-bottom  bg-black padding-small">
                    <div class="container ">
                        <div class="text-center">
                            <div class="text-center">
                                <div class="copyright ">
                                    <p class="mb-0">© Copyright 2022 Alpha Gym. <a href="" target="_blank">Allpa
                                            taniy</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--body-wrapper-->


            <script src="{{ asset('./js/jquery-1.11.0.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('./bootstrap/js/bootstrap.js') }}"></script>
            <script type="text/javascript" src="{{ asset('./bootstrap/js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('./js/hc-sticky.js') }}"></script>

            <script type="text/javascript" src="{{ asset('./js/jquery-1.11.0.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('./slick/slick/slick.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('./js/script.js') }}"></script>
            <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
            <script>
                document.getElementById('calculateBtn').addEventListener('click', function (e) {
                    e.preventDefault();

                    // Get input values
                    const height = parseFloat(document.getElementById('height').value);
                    const weight = parseFloat(document.getElementById('weight').value);
                    const resultField = document.getElementById('result');

                    // Validate inputs
                    if (isNaN(height) || isNaN(weight) || height <= 0 || weight <= 0) {
                        resultField.value = "Invalid input";
                        return;
                    }

                    // Calculate BMI
                    const bmi = weight / (height * height);

                    // Display BMI
                    resultField.value = `Your BMI is ${bmi.toFixed(2)}`;
                });

                document.getElementById('resetBtn').addEventListener('click', function (e) {
                    e.preventDefault();

                    // Reset all fields
                    document.getElementById('gender').selectedIndex = 0;
                    document.getElementById('height').value = "";
                    document.getElementById('weight').value = "";
                    document.getElementById('result').value = "";
                });
            </script>
        </body>

        </html>
