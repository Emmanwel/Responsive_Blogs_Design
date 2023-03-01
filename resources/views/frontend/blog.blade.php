@extends('frontend.main_master')
@section('main')
@section('title')
    Blog | Personal Blog Section
@endsection

<main>

    <!-- breadcrumb-area -->

       <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title"> All Blogs </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- breadcrumb-area-end -->


    <!-- blog-area -->
    <section class="standard__blog">
        <div class="container ">
            <div class="column">
                <div class="col-lg-10">
                    @foreach ($allblogs as $item)
                        <div class="standard__blog__post">
                            <div class="standard__blog__thumb">
                                <a href="{{ route('blog.details', $item->id) }}"><img
                                        src="{{ asset($item->blog_image) }}" alt=""></a>
                                <a href="{{ route('blog.details', $item->id) }}" class="blog__link"><i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                            <div class="standard__blog__content">
                                <div class="blog__post__avatar">
                                    <div class="thumb"><img src="{{ asset($item->blog_image) }}" alt=""></div>
                                    <span class="post__by">By : <a href="#">Emmanuel Mukhebi</a></span>
                                </div>
                                <h2 class="title"><a
                                        href="{{ route('blog.details', $item->id) }}">{{ $item->blog_title }}</a></h2>
                                <p>{!! Str::limit($item->blog_description, 300) !!} </p>
                                <ul class="blog__post__meta">
                                    <li><i class="fal fa-calendar-alt"></i>
                                        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>

                                </ul>
                            </div>
                        </div>
                    @endforeach

                    <div class="pagination-wrap">
                        {{-- {{ $allblogs->links('vendor.laravel.framework.src.illuminate.pagination.resources.views.custom') }} --}}
                        {{ $allblogs->links('vendor.pagination.custom') }}
                    </div>
                </div>
                <div class="col-lg-10">
                    <aside class="blog__sidebar">
                        <div class="widget">
                            <h4 class="widget-title">Recent Blog</h4>
                            <ul class="rc__post">

                                @foreach ($allblogs as $all)
                                    <li class="rc__post__item">
                                        <div class="rc__post__thumb">
                                            <a href="{{ route('blog.details', $item->id) }}"><img src="{{ asset($all->blog_image) }} "
                                                    alt=""></a>
                                        </div>
                                        <div class="rc__post__content">
                                            <h5 class="title"><a href="{{ route('blog.details', $item->id) }}">{{ $all->blog_title }}
                                                </a></h5>
                                            <span class="post-date"><i class="fal fa-calendar-alt"></i>
                                                {{ Carbon\Carbon::parse($all->created_at)->diffForHumans() }} </span>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>

                        {{-- <div class="widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="sidebar__cat">
                                @foreach ($categories as $cat)
                                    <li class="sidebar__cat__item"><a
                                            href="{{ route('category.blog', $cat->id) }}">{{ $cat->blog_category }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div> --}}

                        <div class="widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="sidebar__tags">
                                @foreach ($categories as $cat)
                                    <li class="sidebar__cat__item"><a
                                            href="{{ route('category.blog', $cat->id) }}">{{ $cat->blog_category }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                        @php
                            
                            $blogs = App\Models\Blog::latest()->get();
                            
                        @endphp

                        <div class="widget">
                            <h4 class="widget-title">Popular Tags</h4>
                            <ul class="sidebar__tags">
                                @foreach ($blogs as $blog)
                                    <li class="sidebar__cat__item"><a
                                            href="{{ route('blog.details', $blog->id) }}">{{ $blog->blog_tags }}
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
    <!-- blog-area-end -->


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
                                <textarea name="message" placeholder="Enter Massage*"></textarea>
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
