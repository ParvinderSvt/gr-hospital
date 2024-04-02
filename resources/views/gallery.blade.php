@extends('master')

@section('content')



<!-- How It Work -->
<section id="brdcrmb-bg-section" class="brdcrmb-bg "
    style="background-image: url({{url('assets/images/Memorial-Hermann-Header-background.jpg')}});background-blend-mode: multiply;">


    <div class="brdcmb-and-ttl">
        <div class="container">

            <div class="brdcmb-wpr d-flx itm-cntr">
                <!-- Breadcrumb NavXT 6.6.0 -->
                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                        title="Go to Home." href="{{url('/')}}" class="home"><span property="name">Home</span></a>
                    <meta property="position" content="1">
                </span><span class="brdcmb-arrow"></span><span property="itemListElement" typeof="ListItem"><a
                        property="item" typeof="WebPage" title="Go to Our Gallery." href="#0"
                        class="post post-page"><span property="name">Our Gallery</span></a>
            </div>



            <h1 style="margin-top: 40px;color: #fff;" class="page-ttl d-flx itm-cntr jstfy-cntr mb-3">Our Gallery</h1>


        </div>
    </div>
</section>
<main style="background: aliceblue;">

    <div class="page-cms  py-5">
        <div class="container d-flx">

            <div class="page-cntn-area w-100">

                <h3 class="page-sub-ttl mb-5">GR Hospital - Our Gallery</h3>



                <div class="photo-gallery">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid">
                        @foreach ($gallery as $item )

                        <div class="col">
                            <a class="gallery-item" href="{{ Voyager::image($item->image) }}">
                                <img src="{{ Voyager::image($item->image) }}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>


</main>




@endsection
@section('script')
<script src="{{ url('/assets/') }}/js/simple-lightbox.js"></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.photo-gallery .gallery-item', {});
    })();
</script>
@endsection
