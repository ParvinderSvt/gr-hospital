@extends('master')

@section('content')
    <!-- How It Work -->
    <section id="brdcrmb-bg-section" class="brdcrmb-bg "
        style="background-image: url({{ url('assets/images/Memorial-Hermann-Header-background.jpg') }});background-blend-mode: multiply;">


        <div class="brdcmb-and-ttl">
            <div class="container">

                <div class="brdcmb-wpr d-flx itm-cntr"><!-- Breadcrumb NavXT 6.6.0 -->
                    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home."
                            href="{{ url('/') }}" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span><span class="brdcmb-arrow"></span><span property="itemListElement" typeof="ListItem"><a
                            property="item" typeof="WebPage" title="Go to Our Doctors." href="#0"
                            class="post post-page"><span property="name">Our Doctors</span></a>
                </div>



                <h1 style="    margin-top: 40px;
    color: #fff;" class="page-ttl d-flx itm-cntr jstfy-cntr">Our Doctors
                </h1>


            </div>
        </div>
    </section>
    <main style="    background: aliceblue;">

        <div class="page-cms  py-5">
            <div class="container d-flx">

                <div class="page-cntn-area w-100">

                    <h3 class="page-sub-ttl">GR Hospital - Our Doctors</h3>

                    <div class="row">
                        @foreach ($doctors as $item)
                            <div class="col-md-3">
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
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
