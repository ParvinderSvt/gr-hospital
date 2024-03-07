@extends('master')

@section('content')

<div class="section blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-banner">
                    <div class="blog-banner-img">
                        <img src="{{ config('app.url') }}/assets/img/blog/blog-banner.jpg" alt="img">
                    </div>
                    <div class="blog-banner-content">
                        <div class="blog-banner-contenthead">
                            <h6>Property</h6>
                            <h5>Why community living is important for elderly people</h5>
                        </div>
                        <div class="blog-detailset">
                            <div class="post-author">
                                <div class="post-author-img">
                                    <img src="{{ config('app.url') }}/assets/img/profiles/avatar-01.jpg" alt="author">
                                </div>
                                <a href="javascript:void(0)"> <span> Francis</span></a>
                            </div>
                            <i class="fa-solid fa-calendar-days"></i> <span class="ms-2">Feb 6, 2023</span>
                        </div>
                    </div>

                </div>
                <div class="blog-para-content">
                    <p>If you are living alone in your home or mostly living by yourself and are looking for ways to
                        make your life better, then you should try community living. Elderly people need to live in a
                        community with other people. This means that you are close to your friends and family, but not
                        so much that you lose your privacy. Living in a community can help you feel more comfortable and
                        safe.Let’s further check out why community living is important for elderly people:</p>
                    <h4>There’s no place like home:</h4>
                    <img src="assets/img/blog/blog-baassets/img/blog/blog-banner1.jpg" alt="img">
                    <p>Home is where the heart is. It’s where you make memories, laugh with friends and family, and feel
                        safe. Where you can relax and enjoy life and be yourself. Home is where you can sleep peacefully
                        at night, knowing that someone is there to watch over you when you need them most.
                        There’s no place like home. This is true for everyone, but it is especially important for the
                        elderly because they have more responsibilities than young people do. The elderly need support
                        at home, and the same support and care are only possible in community settings.
                        It’s not just the physical aspect of community living that’s important, but also the social
                        side. There are several benefits to having a group of friends and family members who can help
                        you out in your time of need.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection