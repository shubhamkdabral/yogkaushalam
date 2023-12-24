@extends('front-end/layouts.header')

@section('title', 'YogKaushlam | Poses')
@section('content')


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Pose</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('pose') }}">Pose</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Portfolio Start -->
    <div class="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Yoga Pose</p>
                <h2>Awesome Yoga Pose</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-filter">
                        <li data-filter="*" class="filter-active">All Pose</li>
                        <li data-filter=".first">Pilates Yoga</li>
                        <li data-filter=".second">Vinyasa yoga</li>
                        <li data-filter=".third">Hatha Yoga</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <a href="{{ asset('storage/front-end/portfolio-1.jpg') }}" data-lightbox="portfolio">
                            <img src="{{ asset('storage/front-end/portfolio-1.jpg') }}" alt="Portfolio Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-wrap">
                        <a href="{{ asset('storage/front-end/portfolio-2.jpg') }}" data-lightbox="portfolio">
                            <img src="{{ asset('storage/front-end/portfolio-2.jpg') }}" alt="Portfolio Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-wrap">
                        <a href="{{ asset('storage/front-end//portfolio-3.jpg') }}" data-lightbox="portfolio">
                            <img src="{{ asset('storage/front-end//portfolio-3.jpg') }}" alt="Portfolio Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.7s">
                    <div class="portfolio-wrap">
                        <a href="{{ asset('storage/front-end//portfolio-4.jpg') }}" data-lightbox="portfolio">
                            <img src="{{ asset('storage/front-end//portfolio-4.jpg') }}" alt="Portfolio Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.9s">
                    <div class="portfolio-wrap">
                        <a href="{{ asset('storage/front-end//portfolio-5.jpg') }}" data-lightbox="portfolio">
                            <img src="{{ asset('storage/front-end//portfolio-5.jpg') }}" alt="Portfolio Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="1.1s">
                    <div class="portfolio-wrap">
                        <a href="{{ asset('storage/front-end//portfolio-6.jpg') }}" data-lightbox="portfolio">
                            <img src="{{ asset('storage/front-end//portfolio-6.jpg') }}" alt="Portfolio Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->



@endsection
