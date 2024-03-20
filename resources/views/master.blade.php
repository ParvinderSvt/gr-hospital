<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GR Hospital | Multispeciality Hospitals in India | GR Hospitals for all Your Healthcare Needs - GR Hospitals
    </title>
    <meta name="description"
        content="GR Hospital is the leading multispecialty health care unit with best in class treatments for cancer, knee replacements, liver transplant, heart, diabetes, kidney etc." />
    <link rel="canonical" href="{{ config('app.url') }}/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="GR Hospital | Multispeciality Hospitals in India | GR Hospitals for all Your Healthcare Needs - GR Hospitals" />
    <meta property="og:description"
        content="GR Hospital is the leading multispecialty health care unit with best in class treatments for cancer, knee replacements, liver transplant, heart, diabetes, kidney etc." />
    <meta property="og:url" content="{{ config('app.url') }}/" />
    <meta property="og:site_name" content="GR Hospital" />
    <meta property="og:image" content="{{ config('app.url') }}/assets/images/gr-fav.png" />

    <meta name="theme-color" content="# 011b37">
    <meta name="msapplication-TileColor" content="# 011b37">
    <meta name="msapplication-navbutton-color" content="# 011b37">
    <meta name="apple-mobile-web-app-status-bar-style" content="# 011b37">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ config('app.url') }}/assets/images/gr-fav.png" sizes="16x16" />

    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/newhome_style.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/simple-lightbox.css">
    <!-- <link rel="stylesheet" href="homestyles.css"> -->
    {{--
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/assets/fontawesome-free-5.15.4-web/css/all.min.css">
    --}}

    <link rel="stylesheet" href="{{ config('app.url') }}/assets/assets/fontawesome-free-6.2.0-web/css/all.min.css">

    <!-- Sweet Alert CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    <script type="application/ld+json">
        {
	  "@context": "https://schema.org",
	  "@type": "WebSite",
	  "name": "grhospital",
	  "url": "https://www.grhospital.com/"
	}
    </script>

    <!-- Jquery  -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- Owl Crousal  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    @yield('head')

</head>

<body>


    <section class="ah-hdr">
        <div class="top_hdr">
            <nav>
                <div class="container d-flex flex-wrap">
                    <ul class="nav">
                        <li class="nav-item"><a href="" rel="nofollow" target="_blank" class="nav-link link-dark px-2"
                                title="Follow Us On Facebook"><i class="fa-brands fa-facebook-f"></i> </a></li>
                        <li class="nav-item"><a href="" rel="nofollow" target="_blank" class="nav-link link-dark px-2"
                                title="Follow Us On Instagram"><i class="fa-brands fa-instagram"></i></a></li>

                        <li class="nav-item"><a href="" rel="nofollow" target="_blank" class="nav-link link-dark px-2"
                                title="Follow Us On YouTube"><i class="fa-brands fa-youtube"></i></a></li>
                        <li class="nav-item"><a href="" rel="nofollow" target="_blank" class="nav-link link-dark px-2"
                                title="Follow Us On Linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>


                    <ul class="nav  d-none d-sm-flex ms-auto">

                        {{-- <li class="nav-item"><a href="tel:0562 325 9291"
                                class="nav-link link-dark px-2">Emergency:0562
                                325 9291</a> </li>
                        <li class="nav-item"><a href="disclaimer/index.html"
                                class="nav-link link-dark px-2">Disclaimer</a></li> --}}
                        <li class="nav-item "><a href="{{url('/contact')}}"
                                class="nav-link link-dark px-2 border-0">Emergency:0562325 9291</a></li>

                    </ul>
                </div>
            </nav>
        </div>

        <div class="container">

            <nav class="navbar navbar-expand-lg row my-2" aria-label="Eleventh navbar example">

                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ config('app.url') }}/"><img
                            src="{{ config('app.url') }}/assets/images/sm-logo.jpg" alt="GR Hospital"
                            class="ah_logo"></a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample09">
                        <div class="menu-main-menu-container ms-auto">
                            <ul id="menu-main-menu" class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-5419">
                                    <a href="{{ config('app.url') }}/" aria-haspopup="true"
                                        aria-expanded="false">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class=" dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        About Us
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li id="tl_pulmonology"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28481">
                                            <a href="{{url('/mission-vision')}}">Mission & Vision</a>
                                        </li>
                                        <li id="tl_ear,_nose_and_throat"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28549">
                                            <a href="{{url('/about-us')}}">About Us</a>
                                        </li>
                                    </ul>
                                </li>

                                <?php
                                $departments = App\Models\Department::all();
                                ?>

                                <li id="tl_corporate"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5419">
                                    <a href="{{url('/#services')}}" aria-haspopup=" true" aria-expanded="false">Our
                                        Services</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class=" dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Department
                                    </a>
                                    <ul class="dropdown-menu mega" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach ($departments as $department)
                                        <li id="tl_diseases_and_conditions"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27788">
                                            <a href="{{  route('department.show',$department->id) }}">{{
                                                $department->title }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>



                                </li>
                                <li id="tl_international_patient"
                                    class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-3763">
                                    <a rel="noopener" href="{{url('/doctors')}}" aria-haspopup="true"
                                        aria-expanded="false">Doctors</a>

                                </li>
                                <li id="tl_hospitals"
                                    class="cites_subnav menu-item menu-item-type-post_type menu-item-object-page  menu-item-29960">
                                    <a href="{{url('/gallery')}}" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                </li>
                                <li id="tl_corporate"
                                    class="highlight-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-6529">
                                    <a href="{{url('/faqs')}}" aria-haspopup="true" aria-expanded="false">FAQ’s</a>
                                </li>

                                <li id="tl_contact_us"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3767">
                                    <a href="{{ url('contact') }}" aria-haspopup="true" aria-expanded="false">Contact
                                        Us</a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </nav>
        </div>


        <div class="d-none d-md-block border-top">
            <nav class="header-bottom-nav">
                <div class="wrapper">
                    <ul>
                        <li>
                            <a class="request-callback-menu" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                href="#exampleModal">
                                <i class="fa-solid fa-phone me-2"></i>
                                Request a Callback
                            </a>
                        </li>
                        <li class="book-appointment">
                            <a target="_self" href="{{ route('appointment.index') }}">
                                <i class="fa-solid fa-calendar-days me-2"></i>
                                Book Appointment
                            </a>
                        </li>
                        <li class="">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#exampleModal">
                                <i class="fa-solid fa-stethoscope me-2"></i>
                                Get Health Checkup
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    @yield('content')
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">We Will Call You Back!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="container">

                            <form action="{{ route('enquiry.store') }}" method="POST">
                                @csrf
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required>


                                <label for="phone">Phone No:</label>
                                <input type="text" id="phone" name="phone" required>
                                <label for="date">Email:</label>
                                <input type="email" name="email">


                                <label for="department">Message:</label>
                                <textarea id="message" name="message" required rows="3"></textarea>


                                <input style="margin: 0;" type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php
    $latest_departments = App\Models\Department::latest()->take(5)->get();
    ?>
    <footer>
        <div class="container">
            <div class="row gx-5">
                <div class="col-md-3">
                    <h5 class="text-white">G R Hospital & Research Centre</h5>

                    <p><b>Address:</b> BEROLI AHIR SHAMSABAD ROAD, Shamsabad Road, Kaveri Vihar Phase II, Sri Nikunj
                        Colony, Agra, Uttar Pradesh
                        282001</p>
                    <p>098371 55566</p>
                    <p></p>
                </div>
                <div class="col-md-9">
                    <div class="row row-cols-lg-3 row-cols-2">
                        <div class="col">
                            <h5>Deapartments</h5>
                            <ul class="list-unstyled ft-links">
                                @foreach ($latest_departments as $item)
                                <li><a href="{{  route('department.show',$department->id) }}" target="_blank">{{
                                        $item->title }}</a> </li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="col">
                            <h5>Quick Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="{{ config('app.url') }}/">Home</a> </li>
                                <li><a href="{{url('/doctors')}}">Doctors </a> </li>
                                <li><a href="{{url('/gallery')}}">gallery</a> </li>
                                <li><a href="{{url('/faqs')}}">FAQ's</a> </li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5>Contact Us</h5>
                            <ul class="list-unstyled">
                                <li><a href="{{url('/contact')}}" target="_blank">Request a Callback</a> </li>
                                <li><a href="{{ route('appointment.index') }}">Book Appointment</a> </li>
                                <li><a href="{{url('/contact')}}">Get Health Checkup</a>
                                </li>
                            </ul>

                        </div>
                        {{-- <div class="col">
                            <h5>Corporate</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Company Overview</a> </li>
                                <li><a href="#">Our
                                        Doctors Achieve</a> </li>
                                <li><a href="#">The GR Ethos</a> </li>
                                <li><a href="#">The
                                        GR Story</a> </li>
                                <li><a href="#">Management</a> </li>
                                <li><a href="#">Investor
                                        Relations</a>
                                </li>
                                <li><a href="#">Investor
                                        Presentation</a> </li>
                                <li><a href="#">Initiatives</a> </li>

                            </ul>

                        </div>
                        <div class="col">
                            <h5>Academics &amp; Research</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Courses</a> </li>
                                <li><a href="#">Academics</a> </li>
                                <li><a href="#">Clinical
                                        Research</a> </li>
                                <li><a href="#">Honors List</a> </li>
                                <li><a href="#"> GR Torch: Alumni
                                        Network</a> </li>

                            </ul>
                            <h5>Contact Us</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Post A Query</a> </li>
                                <li><a href="#" target="_blank">Book Physical Appointment</a>
                                </li>

                            </ul>
                        </div>
                        <p></p> --}}
                    </div>
                    <p></p>
                </div>
            </div>

        </div>
    </footer>
    <section class="cprght_ftr">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="pt-2">© Copyright 2024. Designed and Developed by <a href="https://svtindia.in/"
                            style="color: aliceblue;">SVT
                            India.</a></div>
                </div>
                <div class="col-md-3">
                    <ul class="nav nav-social">
                        <li class="nav-item"><a href="#" rel="nofollow" target="_blank" class="nav-link link-dark px-2"
                                title="Follow Us On Facebook"><i class="fa-brands fa-facebook-f"></i> </a></li>
                        <li class="nav-item"><a href="#" rel="nofollow" target="_blank" class="nav-link link-dark px-2"
                                title="Follow Us On Instagram"><i class="fa-brands fa-instagram"></i></a></li>

                        <li class="nav-item"><a href="#" rel="nofollow" target="_blank" class="nav-link link-dark px-2"
                                title="Follow Us On YouTube"><i class="fa-brands fa-youtube"></i></a></li>
                        <li class="nav-item"><a href="#" rel="nofollow" target="_blank" class="nav-link link-dark px-2"
                                title="Follow Us On Linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="nav ms-auto">


                        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Privacy
                                policy</a> </li>
                        {{-- <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Disclaimer</a>
                        </li> --}}
                        <li class="nav-item"><a href="#" class="nav-link link-dark px-2 border-0">Disclaimer</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('/assets/') }}/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script src="{{ url('/assets/') }}/js/waypoints.min.js"></script>
    <script src="{{ url('/assets/') }}/js/owl.carousel.min.js"></script>
    <script src="{{ url('/assets/') }}/js/main.js"></script>

    <style type="text/css">
        a {
            text-decoration: none;
        }

        .alert {
            display: block;
            padding: 5px 10px;
            font-size: 14px;
        }
    </style>
    @if (Session::has('success'))
    <script>
        swal("Success", "{{ Session::get('success') }}", 'success', {
        buttons: {
            confirm: "OK",
        },
    });
    </script>
    @endif
    @yield('script')
</body>

</html>