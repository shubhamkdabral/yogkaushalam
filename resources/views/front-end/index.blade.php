@extends('front-end/layouts.header')

@section('title', 'YogKaushlam | Home')
@section('content')

    <!-- Hero Start -->
    <div class="hero">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-text">
                        <h1>Nourish Your Body, Elevate Your Spirit</h1>
                        <p>
                            Yoga nourishes the body with movement and breath while uplifting the spirit, promoting holistic
                            well-being and inner growth
                        </p>
                        <div class="hero-btn">
                            <a class="btn" href="">Join Now</a>
                            <a class="btn" href="{{ route('contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="hero-image">
                        <img src="{{ asset('storage/front-end/hero.png') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{ asset('storage/front-end/about.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>Welcome to YogKaushalam</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            Nowadays, yoga has become just a physical exercise, but in reality, yoga is a way for human
                            being to establish the mutual relationship between physical, mental and spiritual emotions,
                            which connects man with his reality. In this busy life, no person has time to know his real
                            purpose, due to which it is common to get lost in the path. Due to which worries and spontaneous
                            discussions keep going on in the mind, but through yoga, human being can get rid of all these
                            problems.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>What we do</p>
                <h2>Yoga For Health</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout"></i>
                        </div>
                        <h3>Heal emotions</h3>
                        <p>
                            Yoga heals emotions through mindful practices, fostering self-awareness, and cultivating
                            balance, resilience, and inner peace for practitioners.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item active">
                        <div class="service-icon">
                            <i class="flaticon-workout-1"></i>
                        </div>
                        <h3>Mindfulness and Awareness</h3>
                        <p>
                            Yoga fosters emotional healing through mindfulness and awareness, promoting balance, resilience,
                            and inner peace for practitioners' well-being
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout-2"></i>
                        </div>
                        <h3>Breath Awareness</h3>
                        <p>
                            Yoga utilizes breath awareness for emotional healing, fostering balance, resilience, and inner
                            peace in practitioners' journey to well-being.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout-3"></i>
                        </div>
                        <h3>Body Refreshes</h3>
                        <p>
                            Yoga makes your body feel fresh and renewed, helping you feel balanced, strong, and peaceful
                            inside and out.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout-4"></i>
                        </div>
                        <h3>Body & Spirituality</h3>
                        <p>
                            Yoga connects body and spirit, fostering inner growth, peace, and alignment for a harmonious and
                            fulfilling life journey.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-yoga-pose"></i>
                        </div>
                        <h3>Body & Mind</h3>
                        <p>
                            Yoga unites body and mind, promoting harmony, clarity, and well-being through mindful movement,
                            breath, and meditation practices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    {{-- <div class="testimonial wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-header text-center">
                <p>Testimonial</p>
                <h2>Our Client Say!</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front-end/testimonial-1.jpg') }}" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip
                            justo dictum.
                        </p>
                        <h3>Customer Name</h3>
                        <h4>Profession</h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front-end/testimonial-2.jpg') }}" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip
                            justo dictum.
                        </p>
                        <h3>Customer Name</h3>
                        <h4>Profession</h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front-end/testimonial-3.jpg') }}" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip
                            justo dictum.
                        </p>
                        <h3>Customer Name</h3>
                        <h4>Profession</h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front-end/testimonial-4.jpg') }}" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip
                            justo dictum.
                        </p>
                        <h3>Customer Name</h3>
                        <h4>Profession</h4>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Yoga Trainer</p>
                <h2>Expert Yoga Trainer</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('storage/front-end/arti.jpeg') }}" alt="Image">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/artiishankar07"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Arti Shankar</h2>
                            <p>Yoga Teacher</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('storage/front-end/khushal.jpeg') }}" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/yogacharya_kushal"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Khushal Singh</h2>
                            <p>Yoga Teacher</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('storage/front-end/shubham_joshi.jpeg') }}" alt="Image">
                            <div class="team-social">
                                <a href="https://www.facebook.com/shubam.joshi.3344?mibextid=kFxxJD"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/_shubham_joshi0"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Shubham Joshi</h2>
                            <p>Yoga Teacher</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Our Courses</p>
                <h2>Latest Yoga Courses</h2>
            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/front-end/regular.jpeg') }}" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>Regular Classes</h2>
                        {{-- <div class="blog-meta">
                            <p><i class="far fa-list-alt"></i>Body Fitness</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>5</p>
                        </div> --}}
                        <p>
                            Join our regular yoga classes for mindful movement, breathwork, and relaxation, fostering
                            physical fitness, mental clarity, and inner peace
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/front-end/private.jpeg') }}" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>Private Classes</h2>
                        {{-- <div class="blog-meta">
                            <p><i class="far fa-list-alt"></i>Body Fitness</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>5</p>
                        </div> --}}
                        <p>
                            Experience personalized attention and tailored practices with our private yoga classes,
                            fostering growth, healing, and well-being at your own pace.
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/front-end/retreat.jpeg') }}" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>Retreat</h2>
                        {{-- <div class="blog-meta">
                            <p><i class="far fa-list-alt"></i>Body Fitness</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>5</p>
                        </div> --}}
                        <p>
                            Escape to our rejuvenating yoga retreat, where tranquility and self-discovery await amidst
                            serene surroundings and transformative practices.
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/front-end/100hours.jpeg') }}" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>100 Hours TTC</h2>
                        {{-- <div class="blog-meta">
                            <p><i class="far fa-list-alt"></i>Body Fitness</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>5</p>
                        </div> --}}
                        <p>
                            Embark on a transformative journey with our 100-hour Yoga Teacher Training Course, deepening
                            your practice and nurturing your teaching skills.
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/front-end/200hours.jpeg') }}" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>200 Hours TTC</h2>
                        {{-- <div class="blog-meta">
                            <p><i class="far fa-list-alt"></i>Body Fitness</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>5</p>
                        </div> --}}
                        <p>
                            Unlock your potential with our comprehensive 200-hour Yoga Teacher Training Course, designed to
                            deepen your practice and empower your teaching journey.
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


@endsection
