@extends('frontend.main_master')
@section('main')
@section('title')
Portfolio | Portfolio Details 
@endsection
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">{{ $portfolio->portfolio_name }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $portfolio->portfolio_name }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__wrap__icon">
                <ul>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- portfolio-details-area -->
        <section class="services__details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="services__details__thumb">
                            <img src=" {{ asset($portfolio->portfolio_image) }} " alt="">
                        </div>
                        <div class="services__details__content">
                            <h2 class="title">{{ $portfolio->portfolio_title }}</h2>
                            <p> {!! $portfolio->portfolio_description !!} </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="services__sidebar">
                            <div class="widget">
                                <h5 class="title">Get in Touch</h5>
                                <form action="#" class="sidebar__contact">
                                    <input type="text" placeholder="Enter name*">
                                    <input type="email" placeholder="Enter your mail*">
                                    <textarea name="message" id="message" placeholder="Massage*"></textarea>
                                    <button type="submit" class="btn">send message</button>
                                </form>
                            </div>
                            
                            <div class="widget">
                                <h5 class="title">Project Information</h5>
                                <ul class="sidebar__contact__info">
                                    <li><span>Date :</span> {{ $portfolio->created_at->toDateString()}}</li>
                                    <li><span>Location :</span> Nairobi Kenya</li>
                        
                                    <li class="cagegory"><span>Category :</span>
                                        <a href="portfolio.html">Photo,</a>
                                        <a href="portfolio.html">UI/UX</a>
                                    </li>
                                    <li><span>Project Link :</span> <a
                                            href="portfolio-details.html">https://www.yournews.com/</a></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="title">Contact Information</h5>
                                <ul class="sidebar__contact__info">
                                    <li><span>Address :</span> 2331 Mulinge Street, <br> Nairobi, Area</li>
                                    <li><span>Mail :</span> emmanuelumukhebi5@gmail.com</li>
                                    <li><span>Phone :</span> +254 704 576 324</li>

                                </ul>
                                <ul class="sidebar__contact__social">
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio-details-area-end -->


        <!-- contact-area -->
        <section class="homeContact">
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
