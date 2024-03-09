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

                        <p>At GR Hospital, we are dedicated to providing compassionate and high-quality healthcare
                            services to our community. With
                            a commitment to excellence in patient care, our team of experienced medical professionals
                            strives to meet the diverse
                            needs of every individual who walks through our doors. From routine check-ups to complex
                            surgeries, we prioritize
                            patient well-being and comfort above all else.
                        </p>


                        <p>At the heart of GR Hospital lies a relentless pursuit of innovation and advancement in
                            medical science. We continuously
                            invest in state-of-the-art technology and employ evidence-based practices to deliver the
                            best possible outcomes for our
                            patients. Beyond medical expertise, we foster a supportive and caring environment where
                            patients feel valued and
                            respected throughout their healthcare journey. At GR Hospital, we stand as a beacon of hope
                            and healing, dedicated to
                            serving our community with integrity and compassion.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>

</main>
@endsection
