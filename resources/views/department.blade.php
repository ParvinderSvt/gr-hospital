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
                        property="item" typeof="WebPage" title="Go to General Physician." href="{{ url('/about-us') }}"
                        class="post post-page"><span property="name">{{ $department->title }}</span></a>
            </div>
            <h1 style="margin-top: 40px;color: #fff;" class="page-ttl d-flx itm-cntr jstfy-cntr">{{ $department->title
                }}</h1>
        </div>
    </div>
</section>
<main style="background: aliceblue;">

    <div class="page-cms  py-5">
        <div class="container d-flx">

            <div class="page-cntn-area w-100">
                <div class="row g-lg-5 g-3">
                    <div class="col-md-7">
                        <h3 class="page-sub-ttl">GR Hospital - {{ $department->title }}</h3>
                        <p>{!! $department->desc !!}
                        </p>
                    </div>
                    <div class="col-md-5">

                        <div id="hospital-loc-holder" class="location-info ms-lg-auto">
                            <div class="card border-0 rounded-4 ah_shadow">
                                <img src="{{ Voyager::image($department->image) }}"
                                    class="card-img-top p-2 rounded-4 img-fluid" alt="GR Hospital">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>
@endsection
