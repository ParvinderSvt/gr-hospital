@extends('master')

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
                <img src="{{ url('assets/images/banner1.webp') }}" style="width:100%" alt="banner" class="jpdiv">


            </div>
        </div>

        <div class="carousel-item h-100">
            <div class="herobanner-img position-relative h-100">
                <img src="{{ url('assets/images/17-compressed.jpg') }}" style="width:100%" alt="banner" class="jpdiv">
            </div>
        </div>
        <div class="carousel-item h-100">
            <div class="herobanner-img position-relative h-100">
                <img src="{{ url('assets/images/123123-compressed_0.jpg') }}" style="width:100%" alt="banner"
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
                <h5 class="card-title mb-3 fw-bold">We Provide Most Professional Service
                    Since 1984</h5>

                <p>G.R. Hospital & Research Centre is a multi super facility Hospital equipped to address a wide range
                    of medical needs
                    across various disciplines. With specialized departments including cardiology, neurology,
                    orthopedics, oncology, and
                    more, it offers diagnostic, therapeutic, and surgical services to patients. These hospitals
                    integrate advanced medical
                    technologies, skilled healthcare professionals, and cutting-edge treatments to deliver optimal care.
                    Patients benefit
                    from coordinated care plans tailored to their individual needs, ensuring holistic treatment and
                    recovery. Multispecialty
                    hospitals often serve as hubs for medical research, innovation, and education, striving to improve
                    healthcare outcomes
                    and enhance the overall well-being of the community they serve.</p>
                <a href="#" class="text-warning text-decoration-none">Read More <i
                        class="fa fa-long-arrow-right ps-2 small"></i> </a>

            </div>
            <div class="col-md-5">

                <div id="hospital-loc-holder" class="location-info ms-lg-auto">
                    <div class="card border-0 rounded-4 ah_shadow">
                        <img src="{{ url('assets/images/2023-01-12.jpg') }}"
                            class="card-img-top p-2 rounded-4 img-fluid" alt="GR Hospital">
                    </div>

                </div>
            </div>
        </div>
</section>
<section class="ah_location_sec">
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
                            imaging, robotic surgery...</div>
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
<section class="btm_widgets">
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
</section>

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
@endsection
