@extends('frontend.main_master')
@section('main')
@section('title')
    Contact | Contact Us Section
@endsection

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Contact us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-map -->
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
            marginwidth="0"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Yaya%20Centre+(Personal%20Maps%20Section)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe></div>
    <!-- contact-map-end -->

    <!-- contact-area -->
    <div class="contact-area">
        <div class="container">
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
                        <input name="subject" type="text" placeholder="Enter your subject*">
                    </div>
                    <div class="col-md-6">
                        <input name="phone" type="text" placeholder="Your Phone*">
                    </div>
                </div>
                <textarea name="message" id="message" placeholder="Enter your massage*"></textarea>
                <button type="submit" class="btn">send message</button>
            </form>
        </div>
    </div>
    <!-- contact-area-end -->

    <!-- contact-info-area -->
    <section class="contact-info-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon01.png') }}" alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">address line</h4>
                            <span>Yaya Centre Junction, Nairobi, <br> 3rd Floor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon02.png') }}" alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">Phone Number</h4>
                            <span>+254 704576324</span>
                            <span>+254 731649547</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon03.png') }}" alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">Mail Address</h4>
                            <span>emmanuelmukhebi5@gmail.com</span>
                            <span>info@mukhebiemmanuel.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-area-end -->

    <!-- contact-area -->
    <section class="homeContact homeContact__style__two">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title"> </span>
                            <h2 class="title"> </h2>
                        </div>
                        <div class="homeContact__content">
                            <p></p>
                            <h2 class="mail"><a href="mailto:Info@webmail.com"></a></h2>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
@endsection
