@extends('master')

@section('content')


<!-- Pricing -->

<!-- /Pricing -->

<!-- Faq -->


<!-- News Letter -->
<section class="news-letter-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading d-block">
                    <h2>Our Blog</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

                <!-- Blog -->

                <!-- /Blog -->

                <!-- Blog -->
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ config('app.url') }}/blog-detail"><img
                                src="{{ config('app.url') }}/assets/img/blog/blog-2.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">

                        <div class="blog-title">
                            <h3><a href="{{ config('app.url') }}/blog-detail">The most popular cities for homebuyers</a>
                            </h3>
                            <p>There are many variations of passages of lorem ipsum available.</p>
                            <p>Posted on : 15 Jan 2023</p>
                        </div>
                    </div>
                </div>
                <!-- /Blog -->
            </div>
            <div class="col-md-4">
                <!-- Blog -->
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ config('app.url') }}/blog-detail"><img
                                src="{{ config('app.url') }}/assets/img/blog/blog-3.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">

                        <div class="blog-title">
                            <h3><a href="{{ config('app.url') }}/blog-detail">Learn how real estate really shapes our
                                    future</a></h3>
                            <p>There are many variations of passages of lorem ipsum available.</p>
                            <p>Posted on : 13 Jan 2023</p>
                        </div>

                    </div>
                </div>
                <!-- /Blog -->
            </div>
            <div class="col-md-4">
                <!-- Blog -->
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ config('app.url') }}/blog-detail"><img
                                src="{{ config('app.url') }}/assets/img/blog/blog-2.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">

                        <div class="blog-title">
                            <h3><a href="{{ config('app.url') }}/blog-detail">The most popular cities for homebuyers</a>
                            </h3>
                            <p>There are many variations of passages of lorem ipsum available.</p>
                            <p>Posted on : 13 Jan 2023</p>
                        </div>

                    </div>
                </div>
                <!-- /Blog -->
            </div>
            <div class="col-md-4">
                <!-- Blog -->
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ config('app.url') }}/blog-detail"><img
                                src="{{ config('app.url') }}/assets/img/blog/blog-1.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">

                        <div class="blog-title">
                            <h3><a href="{{ config('app.url') }}/blog-detail">How to achieve financial independence</a>
                            </h3>
                            <p>There are many variations of passages of lorem ipsum available.</p>
                            <p>Posted on : 13 Jan 2023</p>
                        </div>

                    </div>
                </div>
                <!-- /Blog -->
            </div>

        </div>
    </div>

</section>

@endsection