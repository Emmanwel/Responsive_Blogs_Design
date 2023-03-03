@extends('frontend.main_master')
@section('main')
@section('title')
    About | Get to know what I Can Offer
@endsection

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">About me</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Me</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about about__style__two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about__image">
                        <img src="{{ $aboutpage->about_image }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">
                            <span class="sub-title">01 - About me</span>
                            <h2 class="title">{{ $aboutpage->title }}</h2>
                        </div>
                        <div class="about__exp">
                            <div class="about__exp__icon">
                                <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }} " alt="">
                            </div>
                            <div class="about__exp__content">
                                <p><span>{{ $aboutpage->short_title }}</span> </p>
                            </div>
                        </div>
                        <p class="desc">{{ $aboutpage->short_description }}</p>
                        <a href="" class="btn">Download my resume</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about__info__wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="about-tab" data-bs-toggle="tab"
                                    data-bs-target="#about" type="button" role="tab" aria-controls="about"
                                    aria-selected="true">About</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills"
                                    type="button" role="tab" aria-controls="skills"
                                    aria-selected="false">Skills</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards"
                                    type="button" role="tab" aria-controls="awards"
                                    aria-selected="false">Experience </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                    data-bs-target="#education" type="button" role="tab" aria-controls="education"
                                    aria-selected="false">education</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="about" role="tabpanel"
                                aria-labelledby="about-tab">
                                <p class="desc">

                                    {!! $aboutpage->long_description !!}

                                </p>
                                </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                <div class="about__skill__wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">HTML/CSS/Bootstrap</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">90%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">JavaScript</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">80%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Vue JS</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%;"
                                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">80%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">React JS</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">80%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">PHP</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">84%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Laravel</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;"
                                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">80%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Node JS</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">55%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">User Research</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%;"
                                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">75%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Git</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">85%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">MySQL</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">70%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">MONGO DB</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">70%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                <div class="about__award__wrap">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_01.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Software Developer at Teknohub Limited </h5>
                                                    <span class="date">Jan2022 – Dec/2022</span>
                                                    <p>
                                                        ➔ Customization of portals as per to the client specifications
                                                    </p>
                                                    <p> ➔ Develop web application using JavaScript, jQuery, React JS and
                                                        Vue JS.
                                                    </p>
                                                    <p>➔ Implemented REST API to connect to Microsoft Dynamics Business
                                                        Central (ERP).</p>
                                                    <p> ➔ Perform Integration with third party applications.</p>
                                                    <p> ➔ Gathered requirements as per to clients specifications.</p>
                                                    <p> ➔ Conducted User Acceptance Training (UAT)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_02.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Part time Web Developer at Infonet Global </h5>
                                                    <span class="date">Nov/2022 – March/2023</span>
                                                    <p>Responsible for revamping infonet Global website.</p>
                                                    <p> http://infonet.or.ke/</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_03.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">System Analyst at ABNO Softwares International
                                                    </h5>
                                                    <span class="date">June/2022 – Nov/2021</span>
                                                    <p>➔ Performed Unit and functional testing for bugs and operating
                                                        speed, aimed at increasing efficiency. </p>
                                                    <p>
                                                        ➔ Collaborated with project managers to research on
                                                        re-architecting multipage web apps into a simpler user
                                                        interface. </p>
                                                    </p>
                                                    <p>➔ Developed mock-ups, workflows, and flowcharts for developers to
                                                        follow.</p>
                                                    <p>
                                                        ➔ Collaborated with developers to resolve issues by offering
                                                        support to clients’ system issues.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_04.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Systems and Application Developer at ICT
                                                        Authority</h5>
                                                    <span class="date">Sep/2020 – May/2021</span>
                                                    <p> ➔ Improved website functionality by redesigning, updating, and
                                                        adding extensions to existing systems and applications.</p>
                                                    <p>➔ Collaborated with UI/UX to come up with the best UI for
                                                        excellent
                                                        UX experience.</p>
                                                    <p>➔ Created and maintained system documentation and technical
                                                        process
                                                        flows.</p>
                                                    <p>➔ Performed Integration testing and used Version Control
                                                        technologies (Git).</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="education" role="tabpanel"
                                aria-labelledby="education-tab">
                                <div class="about__education__wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">Technical University of Kenya </h3>
                                                <span class="date">2015 – 2019</span>
                                                <p>Bachelor of Technology in Communication and Compouter Networks.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">Microsost Interns4Africa </h3>
                                                <span class="date">2020 – 2020</span>
                                                <p>Obtained a Certification in Microsost Power Platforms Fundamentals.

                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">Master Full-stack Web Development </h3>
                                                <span class="date">2021 – 2021</span>
                                                <p>Obtained the certification from Udemy.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">S.T Teresa's Secondary School</h3>
                                                <span class="date">2011 - 2014</span>
                                                <p>Obtained Kenya Certificate of Secondary Education.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services__style__two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section__title text-center">
                        <span class="sub-title">Services</span>
                        <h2 class="title">Some Services Provided</h2>
                    </div>
                </div>
            </div>
            <div class="services__style__two__wrap">
                <div class="row gx-0">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="assets/img/icons/services_light_icon01.png" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="">Business Strategy</a></h3>
                                <p>specific, measurable, achievable, relevant, and time-bound (SMART) goals. Aligned
                                    with the core values, objectives,key stakeholders, including employees, customers,
                                    suppliers, and investors.</p>
                                <a href="" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="assets/img/icons/services_light_icon02.png" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="">Visual Design</a></h3>
                                <p>Effective visual design should be visually appealing and engaging, but it should also
                                    serve a functional purpose, and communicate the
                                    intended message clearly.</p>
                                <a href=""class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="assets/img/icons/services_light_icon03.png" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="">Product Design</a></h3>
                                <p>Design process typically begins with ideation, where designers generate
                                    and evaluate concepts for new products or improvements to existing ones.
                                </p>
                                <p>
                                    <a href="" class="services__btn"><i
                                            class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="assets/img/icons/services_light_icon05.png" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="">Animation</a></h3>
                                <p>There are several types of animation techniques, including traditional animation,
                                    stop-motion animation, computer-generated animation, and motion graphics.</p>
                                <a href="" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="assets/img/icons/services_light_icon06.png" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="">Marketing</a></h3>
                                <p>Marketing tactics include market research, branding,
                                    advertising, public relations, direct marketing, and sales promotion.</p>
                                <a href="" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="assets/img/icons/services_light_icon05.png" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Brand strategy</a></h3>
                                <p>Brand strategy refers to the long-term plan that outlines the goals, values,
                                    messaging, and visual identity of a brand.</p>
                                <a href="" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="assets/img/icons/services_light_icon04.png" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="">Graphic Design</a></h3>
                                <p>Graphic design is the process of creating visual content to communicate information
                                    or ideas.</p>
                                <a href="" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="assets/img/icons/services_light_icon07.png" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="">Visual Design</a></h3>
                                <p>Visual design uses visual elements such as colors, shapes,to create a cohesive and
                                    aesthetically pleasing visual experience for the viewer.</p>
                                <a href="" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial testimonial__style__two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <div class="testimonial__wrap">
                        <div class="section__title text-center">
                            <span class="sub-title">Client Feedback</span>

                        </div>
                        <div class="testimonial__two__active">
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>"The project turned out better than I could have imagined. I appreciate your
                                        creativity and expertise.".</p>
                                    <div class="testimonial__avatar">
                                        <span>Kelan Keroka</span>
                                        <div class="testi__avatar__img">
                                            <img src="assets/img/images/testi_avatar01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>"I noticed a few errors in the final product. Can we work together to make sure
                                        these are corrected before final delivery?"
                                        "While I appreciate your input, I think we need to explore more options before
                                        making a final decision.".</p>
                                    <div class="testimonial__avatar">
                                        <span>Dudu Kidude</span>
                                        <div class="testi__avatar__img">
                                            <img src="assets/img/images/testi_avatar02.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__arrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial__two__icons">
            <ul>
                <li><img src="assets/img/icons/testi_shape01.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape02.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape03.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape04.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape05.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape06.png" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <div class="section__title text-center">


         <span class="sub-title mt-14">Blogs</span>
    </div>

    @php

        $blogs = App\Models\Blog::latest()
            ->limit(3)
            ->get();

    @endphp


    <section class="blog">
        <div class="container">
            <div class="row gx-0 justify-content-center">

                @foreach ($blogs as $item)
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <div class="blog__post__tags">
                                    <a href="{{ route('blog.details', $item->id) }}">{{ $item['category']['blog_category'] }}</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                </span>
                                <h3 class="title"><a href="{{ route('blog.details', $item->id) }}">
                                        {{ $item->blog_title }}
                                    </a></h3>
                                <a href="{{ route('blog.details', $item->id) }}" class="read__more">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="blog__button text-center">
                <a href="{{ route('home.blog') }}" class="btn">More blogs</a>
            </div>
        </div>
    </section>

    <!-- contact-area -->
<section class="homeContact">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">
                        <span class="sub-title">Say hello</span>
                        <h2 class="title">Any questions? Feel free <br> to contact</h2>
                    </div>
                    <div class="homeContact__content">
                        <p>Let us have a chat to discuss about the different implementation strategies that we may
                            enforce to achieve the objective.
                        </p>
                        <h2 class="mail"><a href="mailto:emmanuelmukhebi5@gmail.com">emmanuelmukhebi5@gmail.com</a>
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
</main>
@endsection
