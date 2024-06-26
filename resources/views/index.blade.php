@extends('master')
@section('head')
    <style>
        .gtco-testimonials {
            position: relative;
            margin-top: 30px;

            h2 {
                font-size: 30px;
                text-align: center;
                color: #333333;
                margin-bottom: 50px;
            }

            .owl-stage-outer {
                padding: 30px 0;
            }

            .owl-nav {
                display: none;
            }

            .owl-dots {
                text-align: center;

                span {
                    position: relative;
                    height: 10px;
                    width: 10px;
                    border-radius: 50%;
                    display: block;
                    background: #fff;
                    border: 2px solid #011b37;
                    margin: 0 5px;
                }

                .active {
                    box-shadow: none;

                    span {
                        background: #011b37;
                        box-shadow: none;
                        height: 12px;
                        width: 12px;
                        margin-bottom: -1px;
                    }
                }
            }

            .card {
                background: #fff;
                box-shadow: 0 8px 30px -7px #c9dff0;
                margin: 0 20px;
                padding: 0 10px;
                border-radius: 20px;
                border: 0;

                .card-img-top {
                    max-width: 100%;
                    margin: 15px auto 0;
                    box-shadow: 0 8px 20px -4px #95abbb;
                    width: 90%;
                    height: 70%;
                }

                h5 {
                    color: #011b37;
                    font-size: 21px;
                    line-height: 1.3;

                    span {
                        font-size: 18px;
                        color: #666666;
                    }
                }

                p {
                    font-size: 18px;
                    color: #555;
                    padding-bottom: 15px;
                }
            }

            .active {
                opacity: 0.5;
                transition: all 0.3s;
            }

            .center {
                opacity: 1;

                h5 {
                    font-size: 24px;

                    span {
                        font-size: 20px;
                    }
                }

                .card-img-top {
                    max-width: 100%;
                    margin: 15px auto 0;
                    box-shadow: 0 8px 20px -4px #95abbb;
                    width: 90%;
                    height: 70%;
                }
            }
        }

        @media (max-width: 767px) {
            .gtco-testimonials {
                margin-top: 20px;
            }
        }

        .owl-carousel {
            .owl-nav button {

                &.owl-next,
                &.owl-prev {
                    outline: 0;
                }
            }

            button.owl-dot {
                outline: 0;
            }
        }

        .arrow-right {
            color: #011b35;
            font-size: 23px;
            margin-right: 2px;
        }
    </style>
@endsection
@section('content')
    <!-- Indicators/dots -->
    <!--  <div class="carousel-indicators">

                                                              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                                                              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                                              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                                           </div> -->

    <div id="carouselExample" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active h-100">
                <div class="herobanner-img position-relative h-100">
                    <img src="{{ url('assets/images/nb3.jpg') }}" style="width:100%" alt="banner" class="jpdiv">


                </div>
            </div>

            <div class="carousel-item h-100">
                <div class="herobanner-img position-relative h-100">
                    <img src="{{ url('assets/images/nb1.jpg') }}" style="width:100%" alt="banner"
                        class="jpdiv">
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="herobanner-img position-relative h-100">
                    <img src="{{ url('assets/images/nb2.jpg') }}" style="width:100%" alt="banner"
                        class="jpdiv">
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="herobanner-img position-relative h-100">
                    <img src="{{ url('assets/images/nb6.jpg') }}" style="width:100%" alt="banner"
                        class="jpdiv">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="why_ah_sec">
        <div class="container">
            <div class="row g-lg-5 g-3">
                <div class="col-md-7">
                    {{-- <h4 class="sec_title">Welcome</h4> --}}
                    <h2>G.R. Hospital & Research Centre</h2>
                    <h5 class="card-title mb-3 fw-bold"></h5>
                    <p>The G.R Hospital & Research Centre was founded by Dr Rajendra Singh M.D Medicine who is a renowned
                        professional and a
                        constant pillar to the wellfare and health of the community. With 150 beds spanning
                        specialized units like
                        ICCU, CCU, NICU, Emergency, Trauma, and our cutting-edge BURN Unit, we're equipped to handle any
                        medical challenge with
                        precision and care.
                    </p>
                    <p>
                        <span class="arrow-right">&#8594;</span><span style="color: #011b35">Provides the best yet
                            affordable care. </span><br>
                        <span class="arrow-right">&#8594;</span><span style="color: #011b35">Dedicated, rigorously trained
                            nursing staff.</span> <br>
                        <span class="arrow-right">&#8594;</span><span style="color: #011b35">Team of over 50 specialists and
                            super specialists.</span><br>
                        <span class="arrow-right">&#8594;</span><span style="color: #011b35">Commitment to affordability,
                            making exceptional healthcare accessible to all.</span>
                    </p>

                    {{-- <p>Welcome to GR Hospital, a beacon of healthcare excellence since 2007, situated at Baroli Aheer
                    Shamsabad Road, Kaveri
                    Vihar Phase II, Sri Nikunj Colony, Agra, Uttar Pradesh 282001. Our commitment to providing
                    compassionate and
                    comprehensive medical services with the capicity of 100+ Beds has made us a trusted name in the
                    community.</p>

                <p>At GR Hospital, we believe in a patient-centric approach, ensuring that each individual receives
                    personalized care
                    tailored to their unique needs. Our state-of-the-art facility is equipped with advanced medical
                    technology and staffed
                    by a team of highly skilled healthcare professionals dedicated to delivering the highest
                    standards of medical care.</p> --}}
                    <a href="{{ url('/about-us') }}" class="text-warning text-decoration-none">Read More <i
                            class="fa fa-long-arrow-right ps-2 small"></i> </a>

                </div>
                <div class="col-md-5">

                    <div id="hospital-loc-holder" class="location-info ms-lg-auto">
                        <div class="card border-0 rounded-4 ah_shadow">
                            <img src="{{ url('assets/images/gr2.webp') }}"
                                class="card-img-top p-2 rounded-4 img-fluid" alt="GR Hospital" style="height: 30rem;object-fit: cover;">
                        </div>

                    </div>
                </div>
            </div>
    </section>
    {{-- <section class="ah_location_sec">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-12">
                <h2>We Specialize In</h2>
                <p class="sub_hdng pt-1">Staffed by the world’s leading specialists who can provide<br>
                    effective treatment plans to combat all your medical problems. </p>
                <br>
            </div>
        </div>

        <!-- COEs -->
        <div class="row">

            <div class="col-md-3 mb-3">
                <div class="card menu-card">
                    <div class="card-body">
                        <img src="{{ url('assets/images/transplants.svg') }}" alt="Transplants Icon" width="46">
                        <h5 class="card-title mt-2"><a href="#">Transplants</a>
                        </h5>
                        <p class="card-text">Heart transplant, Lung transplant, Liver transplant, Kidney transplant,
                            Pancreas
                            transplant, Multi Organ transplant, Bone marrow transplante</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card menu-card">
                    <div class="card-body">
                        <img src="{{ url('assets/images/heart-rate.png') }}" alt="Cardiology Icon" width="46">
                        <h5 class="card-title mt-2"><a href="#0">Cardiology</a>
                        </h5>
                        <p class="card-text">MitraClip, TAVR/TAVI, Minimally invasive cabg, Robotic min invasive cabg,
                            Ecmo</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card menu-card">
                    <div class="card-body">
                        <img src="{{ url('assets/images/leg.png') }}" alt="Orthopedics Icon" width="46">
                        <h5 class="card-title mt-2"><a href="#0">Orthopedics</a>
                        </h5>
                        <p class="card-text">Mako Robotic Knee Replacement, Spine Surgery, Excelsius GPS spine Robotic
                            Surgery,
                            VBT</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card menu-card">
                    <div class="card-body">
                        <img src="{{ url('assets/images/robotic-surgery.png') }}" alt="Robotic Surgery Icon" width="46">
                        <h5 class="card-title mt-2"><a href="#0">Robotic
                                Surgery</a></h5>
                        <p class="card-text">The precision and dexterity of robotic arms allow for more intricate
                            movements, improved visualization, and enhanced</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card menu-card">
                    <div class="card-body">
                        <img src="{{ url('assets/images/mammography.png') }}" alt="Diagnostics Icon" width="46">
                        <h5 class="card-title mt-2"><a href="#0">Diagnostics</a></h5>
                        <p class="card-text">640 Slice CT Angiogram, Brain and Spine Suite, Tru Beam STX with velocity
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card menu-card">
                    <div class="card-body">
                        <img src="{{ url('assets/images/stomach.png') }}" alt="Gastroenterology" width="46">
                        <h5 class="card-title mt-2"><a href="#0">Gastroenterology</a></h5>
                        <p class="card-text">Gastroenterology
                            Gastroenterology focuses on the diagnosis and treatment of diseases of
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card menu-card">
                    <div class="card-body">
                        <img src="{{ url('assets/images/radiology.png') }}" alt="Interventional Radiology Icon"
                            width="46">
                        <h5 class="card-title mt-2"><a href="#0">Interventional
                                Radiology</a></h5>
                        <p class="card-text">In IR, radiologists utilize various imaging modalities such as X-rays,
                            ultrasound, CT scans, and MR</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card menu-card">
                    <div class="card-body">
                        <img src="{{ url('assets/images/esophagus.png') }}" alt="ENT Icon" width="46">
                        <h5 class="card-title mt-2"><a href="#0specialities/ent-treatment/">ENT</a>
                        </h5>
                        <p class="card-text">Balance disorders, voice and swallowing disorders, thyroid disorders, and
                            facial plastic</p>

                    </div>
                </div>
            </div>


        </div>
        <!-- End COEs -->

    </div>
</section> --}}
    <section id="services" class="whatnew_sec">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-8">
                    <h2 class="mb-4">Our Services</h2>
                </div>
            </div>

            <div class="gtco-testimonials">
                <div class="owl-carousel owl-carousel1 owl-theme">
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\gremergency.png"
                                alt="">
                            <div class="card-body">
                                <h5>24X7 Hours Emergency <br />

                                </h5>
                                <p class="card-text">Rapid care, round-the-clock service,
                                    lifesaving treatments, immediate response, critical care
                                    expertise.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\icu,ccu,nicu.jpg"
                                alt="">
                            <div class="card-body">
                                <h5>NICU,ICU,CCU<br />

                                </h5>
                                <p class="card-text">NICU for newborns, ICU for critical patients, CCU for cardiac care;
                                    comprehensive lifesaving care.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\Cathlab1.jpg"
                                alt="">
                            <div class="card-body">
                                <h5>CATH LAB<br />

                                </h5>
                                <p class="card-text">Advanced heart care through diagnostic imaging and interventional
                                    procedures for cardiovascular conditions.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\ct-scan-15e991.gif"
                                alt="">
                            <div class="card-body">
                                <h5>CT SCAN<br />

                                </h5>
                                <p class="card-text">High-resolution imaging for detailed examination of internal
                                    structures, aiding diagnosis and treatment.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\xray.jpeg"
                                alt="">
                            <div class="card-body">
                                <h5>ALL X-RAY<br />

                                </h5>
                                <p class="card-text">Quick and non-invasive imaging method to visualize bones, tissues, and
                                    organs for diagnostic purposes..</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\ultra.jpg"
                                alt="">
                            <div class="card-body">
                                <h5>ULTRA SOUND<br />

                                </h5>
                                <p class="card-text">Non-invasive imaging using sound waves to visualize internal organs,
                                    aiding diagnosis and monitoring.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\echo.jpeg"
                                alt="">
                            <div class="card-body">
                                <h5>ECHO<br />

                                </h5>
                                <p class="card-text">Non-invasive ultrasound imaging of the heart's structure and function
                                    for diagnostic assessment.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\ecg.jpg"
                                alt="">
                            <div class="card-body">
                                <h5>ECG,TMT<br />

                                </h5>
                                <p class="card-text">ECG: Records heart's electrical activity, aiding in diagnosing cardiac
                                    conditions. TMT: Stress test assesses heart
                                    function under exertion.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\colour.jpeg"
                                alt="">
                            <div class="card-body">
                                <h5>COLOUR DOPPLER<br />

                                </h5>
                                <p class="card-text">Ultrasound technique visualizing blood flow, aiding diagnosis of
                                    vascular conditions like DVT or arterial stenosis.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\bankblood.png"
                                alt="">
                            <div class="card-body">
                                <h5>BLOOD BANK<br />

                                </h5>
                                <p class="card-text">Facility for collecting, testing, storing, and distributing blood and
                                    blood products for transfusions.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\rapidology.jpg"
                                alt="">
                            <div class="card-body">
                                <h5>RADIOLOGY<br />

                                </h5>
                                <p class="card-text">An approach or field emphasizing speed, efficiency, and quick outcomes
                                    in various disciplines or industries.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\pharmancy.png"
                                alt="">
                            <div class="card-body">
                                <h5>PHARMACY<br />

                                </h5>
                                <p class="card-text">Dispensing medications, compounding, advising, health education,
                                    patient care, pharmacists, prescriptions, drugs,
                                    pharmaceuticals, healthcare.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\pathology.jpg"
                                alt="">
                            <div class="card-body">
                                <h5>PATHOLOGY<br />

                                </h5>
                                <p class="card-text">Medical specialty studying diseases, examining tissues, fluids, and
                                    organs to diagnose conditions and guide treatment.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\Anaesthesia-2.jpg"
                                alt="">
                            <div class="card-body">
                                <h5>ANAESTHESIA<br />

                                </h5>
                                <p class="card-text">Administered to induce temporary loss of sensation or consciousness
                                    during medical procedures.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\phyiotherapy.jpeg"
                                alt="">
                            <div class="card-body">
                                <h5>PHYSIOTHERPY<br />

                                </h5>
                                <p class="card-text">Treatment using exercises, massage, and other techniques to improve
                                    movement and manage pain.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ config('app.url') }}/assets\images\dialysis.jpg"
                                alt="">
                            <div class="card-body">
                                <h5>DIALYSIS<br />

                                </h5>
                                <p class="card-text">Medical procedure purifying blood in patients with kidney failure,
                                    restoring balance and removing toxins.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <section id="connect" class="whatnew_sec">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-8">
                    <h2 class="mb-4">Meet Our Doctors</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="media_coverage_title">
                        <!--<h5 class="fs-4 fw-bold">Apollo In The News</h5>-->
                    </div>

                    <div id="slider_apollo_in_the_news" class="news-section-slider owl-carousel">

                        @foreach ($doctors as $item)
                            <div class="news_slide_wrap">
                                <div class="card pg-card">
                                    <a href="#"><img src="{{ Voyager::image($item->image) }}" class="card-img-top"
                                            alt="Doctors at GR Hospital."></a>
                                    <div class="card-body">
                                        <h5><a href="#">{{ $item->name }}</a></h5>
                                        <p class="card-text">{{ $item->speciality }}</p>
                                        <p class="card-text">{{ $item->qualification }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('doctors.index') }}" class="text-warning fs-6">View All <i
                            class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>


        </div>
    </section>

    <section class="appt-form" id="ppt-form">
        <div class="container">
            <div class="blue-box">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <div class="text-box">
                            <h2>Committed To Build A Positive, Safe, Patient Focused Culture.</h2>
                            <p class="mt-5">Today the hospital is recognised as a world-renowned institution, not only
                                providing
                                outstanding care and treatment,
                                but our goal is to deliver quality care in a respectful &amp; compassionate manner. We
                                strive to be the first and
                                best choice for healthcare.</p>
                            <br>
                            <div class="cms-button-wrapper cms-button layout1">
                                <a href="https://www.pushpanjalihospital.in/doctors/" target="_blank" rel="nofollow"
                                    class="btn btn-white-secondary">

                                    <span class="cms-button-text">Find A Doctor </span> <i class="fa fa-arrow-right"></i>
                                </a>
                                <a href="https://www.pushpanjalihospital.in/contact-us" target="_blank" rel="nofollow"
                                    class="btn btn-outline-white">
                                    <span class="cms-button-icon cms-align-icon-">
                                    </span>
                                    <span class="cms-button-text">Contact Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-box">
                            <div class="container">
                                <h2 class="mb-3" style="color: #fff;">Book Appointment</h2>
                                <form action="{{ route('appointment.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" name="name" required>
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                                            <label for="phone">Phone No:</label>
                                            <input type="tel" pattern="[6-9]{1}[0-9]{9}"
                                                title="Phone number with 6-9 and remaing 9 digit with 0-9" id="phone"
                                                name="phone" required>
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                                            <label for="gender">Email:</label>
                                            <input type="email" id="name" name="email" required>
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                                            <label for="date">Date:</label>
                                            <input type="date" id="date" name="appointment_date" required>
                                            @error('appointment_date')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                                            <label for="date">City:</label>
                                            <input type="text" id="city" name="city" required>
                                            @error('city')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                                            <label for="date">Time:</label>
                                            <input type="time" id="time" name="time" required>
                                            @error('city')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <?php
                                        $Doctor = App\Models\Doctor::all();
                                        ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                                            <label for="department">Doctor:</label>
                                            <select id="department" name="doctor" required>
                                                @foreach ($Doctor as $department)
                                                    <option value="{{ $department->name }}">{{ $department->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <input type="submit" value="Submit"
                                        style="
    color: #fff;
    background: #b90000;">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ah_location_sec">
        <div class="container">
            <div class="row g-lg-5 g-3">
                <div class="col-md-7">
                    <!-- <h4 class="sec_title">WHO WE ARE</h4> -->
                    <h2>Why Choose GR Hospital?</h2>
                    <p>GR Hospitals offer comprehensive medical services, advanced technology, and specialized expertise
                        under one roof. Quality
                        of care, reputation, and accessibility are pivotal factors. Hospitals provide critical emergency
                        care, surgical
                        interventions, and chronic disease management. Patient-centered approaches, compassionate staff, and
                        clear communication
                        enhance the healthcare experience.
                    </p>
                    <div class="row g-xl-5 g-2 pt-lg-4 pt-2 pb-3 pb-lg-0 whygr">
                        <div class="col-md-6">
                            <i class="fa-solid fa-check ps-2 "></i>
                            <h4>Quality of Care</h4>
                            <div>GR Hospital known for its high-quality patient care, which includes skilled healthcare
                                professionals...</div>
                        </div>
                        <div class="col-md-6">
                            <i class="fa-solid fa-info ps-2 "></i>
                            <h4>Advanced Technology</h4>
                            <div>GR Hospital invest in advanced medical equipment and technology, including diagnostic
                                imaging...</div>
                        </div>
                        <div class="col-md-6">
                            <i class="fa-solid fa-tasks ps-2 "></i>
                            <h4>Patient-Centered Approach</h4>
                            <div>GR Hospital prioritize patient satisfaction and comfort by offering personalized care,
                                compassionate support...</div>
                        </div>
                        <div class="col-md-6">
                            <i class="fa-solid fa-truck ps-2 "></i>
                            <h4>Accessibility and Convenience</h4>
                            <div>GR Hospital be conveniently located, easily accessible by public transportation and
                                equipped with amenities...</div>
                        </div>


                    </div>
                </div>
                <div class="col-md-5">
                    <!--   <h5 class="pb-3 text-center">Apollo Awards</h5> -->
                    <div class="card border-0 who-card">
                        <img src="{{ url('assets/images/mission.webp') }}" class="card-img " alt="...">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testmonial_sec">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-8 mb-5">
                    <h2>What Are People Saying</h2>

                </div>
            </div>

            <div class="row g-lg-5 scroll-items position-relative">

                <div class="col-md-4">
                    <div class="text-center">
                        <p>Evergreen Hospital surpassed my expectations. The skilled staff, modern facilities, and
                            personalized care made my
                            recovery smooth and comfortable. I felt supported every step of the way. I highly recommend
                            Evergreen Hospital for
                            anyone seeking exceptional healthcare services.<br><small style="color: #ff9e9c;">Keashav,
                                Agra</small></p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <p>The care I received at GR Hospital exceeded my expectations. From the compassionate staff to the
                            state-of-the-art
                            facilities, every aspect of my experience was exceptional. They provided personalized attention
                            and ensured
                            I felt
                            comfortable throughout my stay. I highly recommend GR Hospital for top-notch healthcare
                            services...<br><small style="color: #ff9e9c;">Pushpendra, Agra</small></p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <p>Choosing GR Hospital was the best decision for my family's health. The dedicated medical team
                            provided expert care with
                            empathy and professionalism. Their advanced facilities and personalized approach made us feel
                            reassured and valued. ABC
                            Hospital truly delivers excellence in healthcare.<br><small style="color: #ff9e9c;">Ramesh,
                                Agra</small></p>

                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- <section class="btm_widgets">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-8">
                <h2 class=" mb-4">Our Insurance Partners
                </h2>
                <!-- <p class="pb-lg-3 pb-2 text-white"> Helping Our Patients And Their Families Get Back To What Matters Most.</p> -->
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div id="partners" class="news-section-slider owl-carousel">
            <div class="">
                <a href="#" target="_blank" id="BookAppointment-BB" class=" ">
                    <img src="{{ url('assets/images/max-life-1.jpg') }}" alt="icon" width="64">

                </a>
            </div>
            <div class="">
                <a href="#" target="_blank" id="BookAppointment-BB" class=" ">
                    <img src="{{ url('assets/images/star-1.jpg') }}" alt="icon" width="64">

                </a>
            </div>
            <div class="">
                <a href="#" target="_blank" id="BookAppointment-BB" class=" ">
                    <img src="{{ url('assets/images/future-1.jpg') }}" alt="icon" width="64">

                </a>
            </div>
            <div class="">
                <a href="#" target="_blank" id="BookAppointment-BB" class=" ">
                    <img src="{{ url('assets/images/sbi-life-1.jpg') }}" alt="icon" width="64">

                </a>
            </div>

            <div class="">
                <a href="#" target="_blank" id="BookAppointment-BB" class=" ">
                    <img src="{{ url('assets/images/future-1.jpg') }}" alt="icon" width="64">

                </a>
            </div>
        </div>
    </div>
    </div>
    </div>
</section> --}}

    {{-- Our Services Section --}}
    {{-- <section id="services" class="whatnew_sec">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">Our Services</h2>
            </div>
        </div>

        <div class="gtco-testimonials">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\gremergency.png" alt="">
                        <div class="card-body">
                            <h5>24X7 Hours Emergency <br />

                            </h5>
                            <p class="card-text">Rapid care, round-the-clock service,
                                lifesaving treatments, immediate response, critical care
                                expertise.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\icu,ccu,nicu.jpg" alt="">
                        <div class="card-body">
                            <h5>NICU,ICU,CCU<br />

                            </h5>
                            <p class="card-text">NICU for newborns, ICU for critical patients, CCU for cardiac care;
                                comprehensive lifesaving care.</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\Cathlab1.jpg" alt="">
                        <div class="card-body">
                            <h5>CATH LAB<br />

                            </h5>
                            <p class="card-text">Advanced heart care through diagnostic imaging and interventional
                                procedures for cardiovascular conditions.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\ct-scan-15e991.gif"
                            alt="">
                        <div class="card-body">
                            <h5>CT SCAN<br />

                            </h5>
                            <p class="card-text">High-resolution imaging for detailed examination of internal
                                structures, aiding diagnosis and treatment.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\xray.jpeg" alt="">
                        <div class="card-body">
                            <h5>ALL X-RAY<br />

                            </h5>
                            <p class="card-text">Quick and non-invasive imaging method to visualize bones, tissues, and
                                organs for diagnostic purposes..</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\ultra.jpg" alt="">
                        <div class="card-body">
                            <h5>ULTRA SOUND<br />

                            </h5>
                            <p class="card-text">Non-invasive imaging using sound waves to visualize internal organs,
                                aiding diagnosis and monitoring.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\echo.jpeg" alt="">
                        <div class="card-body">
                            <h5>ECHO<br />

                            </h5>
                            <p class="card-text">Non-invasive ultrasound imaging of the heart's structure and function
                                for diagnostic assessment.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\ecg.jpg" alt="">
                        <div class="card-body">
                            <h5>ECG,TMT<br />

                            </h5>
                            <p class="card-text">ECG: Records heart's electrical activity, aiding in diagnosing cardiac
                                conditions. TMT: Stress test assesses heart
                                function under exertion.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\colour.jpeg" alt="">
                        <div class="card-body">
                            <h5>COLOUR DOPPLER<br />

                            </h5>
                            <p class="card-text">Ultrasound technique visualizing blood flow, aiding diagnosis of
                                vascular conditions like DVT or arterial stenosis.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\bankblood.png" alt="">
                        <div class="card-body">
                            <h5>BLOOD BANK<br />

                            </h5>
                            <p class="card-text">Facility for collecting, testing, storing, and distributing blood and
                                blood products for transfusions.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\rapidology.jpg" alt="">
                        <div class="card-body">
                            <h5>RAPIDOLOGY<br />

                            </h5>
                            <p class="card-text">An approach or field emphasizing speed, efficiency, and quick outcomes
                                in various disciplines or industries.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\pathology.jpg" alt="">
                        <div class="card-body">
                            <h5>PATHOLOGY<br />

                            </h5>
                            <p class="card-text">Medical specialty studying diseases, examining tissues, fluids, and
                                organs to diagnose conditions and guide treatment.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\Anaesthesia-2.jpg"
                            alt="">
                        <div class="card-body">
                            <h5>ANAESTHESIA<br />

                            </h5>
                            <p class="card-text">Administered to induce temporary loss of sensation or consciousness
                                during medical procedures.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\phyiotherapy.jpeg"
                            alt="">
                        <div class="card-body">
                            <h5>PHYSIOTHERPY<br />

                            </h5>
                            <p class="card-text">Treatment using exercises, massage, and other techniques to improve
                                movement and manage pain.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="assets\images\dialysis.jpg" alt="">
                        <div class="card-body">
                            <h5>DIALYSIS<br />

                            </h5>
                            <p class="card-text">Medical procedure purifying blood in patients with kidney failure,
                                restoring balance and removing toxins.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section> --}}

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

    <script>
        (function() {
            "use strict";

            var carousels = function() {
                $(".owl-carousel1").owlCarousel({
                    loop: true,
                    center: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: false,
                    margin: 0,
                    responsiveClass: true,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        680: {
                            items: 2,
                            nav: false,
                            loop: false
                        },
                        1000: {
                            items: 3,
                            nav: true
                        }
                    }
                });
            };

            (function($) {
                carousels();
            })(jQuery);
        })();
    </script>
@endsection
