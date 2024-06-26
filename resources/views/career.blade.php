@extends('master')

<style>
    .career-img {
        width: 32rem;
        height: auto;
        object-fit: cover;
    }

    @media (max-width: 342px) {
        .career-img {
            width: 19rem;
            height: auto;
            object-fit: cover;
        }
    }

    /* @media (min-width: 343px) and (max-width: 540px) {
        .career-img {
            width: 19rem;
            height: auto;
            object-fit: cover;
        }
    } */
</style>

@section('content')
    <section id="brdcrmb-bg-section" class="brdcrmb-bg "
        style="background-image: url({{ url('assets/images/Memorial-Hermann-Header-background.jpg') }});background-blend-mode: multiply;">


        <div class="brdcmb-and-ttl">
            <div class="container">

                <div class="brdcmb-wpr d-flx itm-cntr">
                    <!-- Breadcrumb NavXT 6.6.0 -->
                    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home."
                            href="{{ url('/') }}" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span><span class="brdcmb-arrow"></span><span property="itemListElement" typeof="ListItem"><a
                            property="item" typeof="WebPage" title="Go to Patient Care." href="{{ url('/career') }}"
                            class="post post-page"><span property="name">Career</span></a>
                </div>



                <h1 style="margin-top: 40px;color: #fff;" class="page-ttl d-flx itm-cntr jstfy-cntr">Career</h1>


            </div>
        </div>
    </section>
    <section class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class="mb-4 display-5 text-center">Career</h2>
                    <p class="text-secondary mb-5 text-center">Join our team of dedicated professionals at G.R. Hospital &
                        Research Centre, where your expertise and compassion can make a difference in delivering exceptional
                        healthcare.</p>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-lg-6 col-sm-12 col-md-12 mb-2">
                    <img src="{{ config('app.url') }}/assets/images/career.jpg" alt="" class="career-img ">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="bg-white border rounded shadow-sm overflow-hidden p-3">

                        <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>

                            <label for="phone">Phone No:</label>
                            <input type="text" id="phone" name="phn_no" required>

                            <label for="email">Email:</label>
                            <input type="email" name="email">

                            <label for="resume">Resume:</label>
                            <input type="file" name="resume" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">

                            <input style="margin: 0;" type="submit" value="Submit">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.840451777061!2d78.05006517444957!3d27.129834850727946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397473d81439c7cf%3A0xa7001f6bc2883eb4!2sG.R.%20Hospital%20%26%20Research%20Centre!5e0!3m2!1sen!2sin!4v1709817294554!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
