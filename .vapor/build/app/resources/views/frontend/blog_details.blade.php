@extends('frontend.main_master')
@section('main')
@section('title')
    Blog | Blog Details Section
@endsection
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">{{ $blogs->blog_title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-details-area -->
    <section class="standard__blog blog__details">
        <div class="container">
            <div class="row">
                <div class="col-lg-11">
                    <div class="standard__blog__post">
                        <div class="standard__blog__thumb">
                            <img src="{{ asset($blogs->blog_image) }}" alt="">
                        </div>
                        <div class="blog__details__content services__details__content">
                            <ul class="blog__post__meta">
                                <li><i class="fal fa-calendar-alt"></i>
                                    {{ Carbon\Carbon::parse($blogs->created_at)->diffForHumans() }}</li>


                            </ul>
                            <h2 class="title">{{ $blogs->blog_title }}</h2>
                            <p> {!! $blogs->blog_description !!} </p>
                        </div>
                        <div class="blog__details__bottom">
                            <ul class="blog__details__tag">
                                <li class="title">Tag:</li>
                                <li class="tags-list">
                                    <a href="#">{{ $blogs->blog_tags }}</a>

                                </li>
                            </ul>
                            <ul class="blog__details__social">
                                <li class="title">Share :</li>
                                <li class="social-icons">
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><i
                                            class="fab fa-facebook"></i></a>
                                    <a href="https://twitter.com/home" target="_blank" rel="noopener noreferrer"><i
                                            class="fab fa-twitter-square"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><i
                                            class="fab fa-instagram"></i></a>

                                </li>
                            </ul>
                        </div>
                    </div>

                        <div class="col-lg-8">

                        <!-- contact-area -->
                        <div class="comment__form">
                            <div class="comment__title">
                                <h4 class="title">Write your comment</h4>
                            </div>

                            <form method="post" action="{{ route('store.message') }}" class="contact__form">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="name" type="text" placeholder="Enter your name*">
                                    </div>
                                    <div class="col-md-6">
                                        <input name="email" type="email" placeholder="Enter your mail*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Enter your number*">
                                    </div>
                                    <div class="col-md-6">
                                        <input name="subject" type="text" placeholder="Enter your subject*">
                                    </div>
                                    <div class="col-md-6">
                                        <input name="phone" type="text" placeholder="Your Phone*">
                                    </div>
                                </div>
                                <textarea name="message" id="message" placeholder="Enter your Post*"></textarea>
                                <button type="submit" class="btn">post a comment</button>
                            </form>
                        </div>
                    </div>
                    <!-- contact-area-end -->

                     

                    <div class="col-lg-6">
                        <aside class="blog__sidebar">

                            <div class="widget">
                                <h4 class="widget-title">Recent Blog</h4>
                                <ul class="rc__post">

                                    {{-- ensure that the blogs are visible that is recent blogs from the controller --}} --}}

                                    @foreach ($allblogs as $all)
                                        <li class="rc__post__item">
                                            <div class="rc__post__thumb">
                                                <a href="{{ route('blog.details', $all->id) }}"><img src="{{ asset($all->blog_image) }} "
                                                        alt=""></a>
                                            </div>
                                            <div class="rc__post__content">
                                                <h5 class="title"><a href="{{ route('blog.details', $all->id) }}">{{ $all->blog_title }}
                                                    </a></h5>
                                                <span class="post-date"><i class="fal fa-calendar-alt"></i>
                                                    {{ Carbon\Carbon::parse($all->created_at)->diffForHumans() }}
                                                </span>
                                            </div>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="sidebar__cat">
                                    @foreach ($categories as $cat)
                                        <li class="sidebar__cat__item"><a
                                                href="{{ route('category.blog', $cat->id) }}">{{ $cat->blog_category }}
                                            </a>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>


                        </aside>
                    </div>
                </div>
            </div>
    </section>
    <!-- blog-details-area-end -->


    <!-- contact-area -->
    <section class="homeContact homeContact__style__two">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title"> Say hello</span>
                            <h2 class="title">Any questions? Feel free <br> to contact</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>Let us have a chat to discuss about the different implementation strategies that we may
                                enforce to achieve the objective.
                            </p>
                            <h2 class="mail"><a
                                    href="mailto:emmanuelmukhebi5@gmail.com">emmanuelmukhebi5@gmail.com</a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="homeContact__form">
                            <form action="#">
                                <input type="text" placeholder="Enter name*">
                                <input type="email" placeholder="Enter mail*">
                                <input type="number" placeholder="Enter number*">
                                <textarea name="message" placeholder="Enter Message*"></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
@endsection
