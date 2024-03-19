@extends('master')

@section('content')
<!-- How It Work -->
<section id="brdcrmb-bg-section" class="brdcrmb-bg "
    style="background-image: url({{ url('assets/images/Memorial-Hermann-Header-background.jpg') }});background-blend-mode: multiply;">


    <div class="brdcmb-and-ttl">
        <div class="container">
            <div class="brdcmb-wpr d-flx itm-cntr">
                <!-- Breadcrumb NavXT 6.6.0 -->
                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                        title="Go to Home." href="{{ url('/') }}" class="home"><span property="name">Home</span></a>
                    <meta property="position" content="1">
                </span><span class="brdcmb-arrow"></span><span property="itemListElement" typeof="ListItem"><a
                        property="item" typeof="WebPage" title="Go to Mission And Vision." href="{{ url('/about-us') }}"
                        class="post post-page"><span property="name">About Us</span></a>
            </div>
            <h1 style="margin-top: 40px;color: #fff;" class="page-ttl d-flx itm-cntr jstfy-cntr">About Us
            </h1>
        </div>
    </div>
</section>

<main>
    <div class="page-cms  py-5">
        <div class="container d-flx">

            <div class="page-cntn-area w-100">
                <div class="row g-lg-5 g-3">
                    <div class="col-md-5">
                        <div id="hospital-loc-holder" class="location-info ms-lg-auto">
                            <div class="card border-0 rounded-4 ah_shadow">
                                <img src="{{ url('assets/images/aboutus.jpg') }}"
                                    class="card-img-top p-2 rounded-4 img-fluid" alt="GR Hospital">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="page-sub-ttl">GR Hospital - About Us</h3>

                        <p>Welcome to GR Hospital, a beacon of healthcare excellence since 2007, situated at Baroli Aheer
                        Shamsabad Road, Kaveri
                        Vihar Phase II, Sri Nikunj Colony, Agra, Uttar Pradesh 282001. Our commitment to providing
                        compassionate and
                        comprehensive medical services has made us a trusted name in the community.</p>

                        <p>At GR Hospital, we believe in a patient-centric approach, ensuring that each individual receives
                        personalized care
                        tailored to their unique needs. Our state-of-the-art facility is equipped with advanced medical
                        technology and staffed
                        by a team of highly skilled healthcare professionals dedicated to delivering the highest
                        standards of medical care.</p>

                        <p>We offer a wide range of medical services, including:</p>

                        <p>General Medicine and Surgery</p>
                        <p>Pediatrics</p>
                        <p>Obstetrics and Gynecology</p>
                        <p>Orthopedics</p>
                        <p>Cardiology</p>
                        <p>Neurology</p>
                        <p>Dermatology</p>
                        <p>Ophthalmology</p>
                        <p>ENT (Ear, Nose, and Throat) Care</p>
                        <p>Urology</p>
                        <p>Psychiatry</p>
                        <p>Dental Care</p>
                        <p>Radiology and Imaging Services</p>
                        <p>Laboratory Services</p>
                        <p>Emergency Care</p>
                        <p>Our mission is to promote wellness, prevent illness, and provide exceptional medical treatment
                        to our patients. We
                        strive to create a healing environment where patients feel comfortable and supported throughout
                        their
                        healthcare journey.</p>

                        <p>At GR Hospital, your health and well-being are our top priorities. We are committed to upholding the highest standards
                        of medical ethics, professionalism, and patient satisfaction. Thank you for choosing GR Hospital for your
                        healthcare needs.</p>

                        <p>Our Vision:</p>
                        <p>GR Hospital envisions becoming a leading healthcare institution recognized for excellence in patient care, medical
                        education, and research. We aim to be a trusted healthcare partner for individuals and families, offering innovative
                        solutions and compassionate services that improve lives and contribute to the overall well-being of our community.</p>

                        <p>Our Core Values:</p>

                        <p>Compassion: We approach every patient with empathy, understanding, and kindness, ensuring their comfort and well-being
                        throughout their healthcare journey.</p>
                        <p>Excellence: We strive for excellence in all aspects of our services, from medical treatment and technology to customer
                        service and patient experience.</p>
                        <p>Integrity: We uphold the highest standards of integrity, ethics, and transparency in all our interactions and
                        operations.</p>
                        <p>Collaboration: We foster collaboration and teamwork among our staff, medical professionals, and partners to achieve the
                        best possible outcomes for our patients.</p>
                        <p>Innovation: We embrace innovation and continuous improvement, leveraging the latest advancements in medical science and
                        technology to deliver superior healthcare solutions.</p>
                        <p>Community Commitment: We are dedicated to serving our local community by providing accessible, affordable, and
                        high-quality healthcare services to people of all backgrounds.</p>
                        <p>Our Team:</p>
                        <p>The success of GR Hospital is attributed to our dedicated team of healthcare professionals who are passionate about
                        making a positive impact on the lives of our patients. Our team includes experienced doctors, nurses, technicians, and
                        support staff who work together seamlessly to deliver comprehensive and compassionate care.</p>

                        <p>Accreditations and Certifications:</p>
                        <p>GR Hospital maintains rigorous standards of quality and safety, and we are proud to be accredited by National
                        Accreditation Board For Hospitals . This reflect our commitment to delivering excellence in healthcare and meeting
                        international standards of healthcare service delivery.</p>

                        <p>Community Outreach:</p>
                        <p>In addition to providing exceptional medical care, GR Hospital actively participates in community outreach programs,
                        health education initiatives, and preventive healthcare campaigns. We believe in empowering individuals to take charge
                        of their health and well-being through education, awareness, and early intervention.</p>

                        </p>We invite you to experience the difference at GR Hospital, where your health is our priority, and compassionate care
                        is our commitment.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

</main>
@endsection
