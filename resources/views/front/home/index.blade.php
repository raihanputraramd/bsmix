@extends('layouts.app')

@section('content')
<section id="headerCarousel">
    <div id="carouselHeader" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselHeader" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselHeader" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselHeader" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="image-overlay"></div>
                <img src="{{ asset('images/pages/home/header-bg.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <div class="image-overlay"></div>
                <img src="{{ asset('images/pages/home/ceo-img.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <div class="image-overlay"></div>
                <img src="{{ asset('images/pages/home/date-img-1.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</section>

<section id="aboutUs">
    <div class="container">
        <span class="header-3 color-grey font-weight-600 mb-2">About Us</span>
        <h2 class="header-1 color-black font-weight-700 mb-3">We Provide You The Best Experience</h2>
        <p class="body-1 color-grey mb-4">
            At Aezakmi, our team is a blend of creative minds,
            skilled designers, and dedicated professionals who are passionate
            about crafting exceptional interior spaces. With a shared
            commitment to innovation and excellence, we collaborate to bring your design visions to life.
        </p>

        <button class="btn about-btn mb-5">Contact Us</button>

        <div class="row gx-5">
            <div class="col-lg-6">
                <img src="{{ asset('images/pages/home/teka-img-1.png') }}" class="img-fluid w-100 rounded-2" alt="">
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('images/pages/home/teka-img-2.png') }}" class="img-fluid w-100 rounded-2" alt="">
            </div>
        </div>
    </div>
</section>

<section id="gallery">
    <div class="container">
        <div class="row mb-4 align-items-start">
            <div class="col-lg-7">
                <span class="header-3 color-grey font-weight-600 mb-2">Gallery</span>
                <h2 class="header-1 color-white font-weight-700 mb-3">We Provide You The Best Experience</h2>
                <p class="body-1 color-white mb-4">
                    Welcome to our gallery, where we invite you to explore a visual
                    journey of our finest interior design projects. Each image captures
                    the essence of our creativity, showcasing the diverse range
                    of styles, aesthetics, and concepts that we bring to life.
                </p>
            </div>

            <div class="col-lg-5">
                <div class="d-flex align-items-center justify-content-end">
                    <button id="gallerySwiperPreviousButton" class="btn swiper-arrow me-2">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <button id="gallerySwiperNextButton" class="btn swiper-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-overlay-container">
                        <img class="img-fluid" src="{{ asset('images/pages/home/galeri-img-1.png') }}" alt="">

                        <div class="swiper-overlay-content">
                            <h3 class="header-1 color-white font-weight-700 mb-4 text-center">Krisna Desa Wisata</h3>
                            <p class="body-1 color-white text-center font-weight-400 mb-4">Krisna desa wisata, Gianyar construction outdoor and landscaping Located in Gianyar surrounded with waterfalls, Irrigation system as a main concept of the landscaping.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-overlay-container">
                        <img class="img-fluid" src="{{ asset('images/pages/home/galeri-img-2.png') }}" alt="">

                        <div class="swiper-overlay-content">
                            <h3 class="header-1 color-white font-weight-700 mb-4 text-center">Krisna Desa Wisata</h3>
                            <p class="body-1 color-white text-center font-weight-400 mb-4">Krisna desa wisata, Gianyar construction outdoor and landscaping Located in Gianyar surrounded with waterfalls, Irrigation system as a main concept of the landscaping.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-overlay-container">
                        <img class="img-fluid" src="{{ asset('images/pages/home/galeri-img-3.png') }}" alt="">

                        <div class="swiper-overlay-content">
                            <h3 class="header-1 color-white font-weight-700 mb-4 text-center">Krisna Desa Wisata</h3>
                            <p class="body-1 color-white text-center font-weight-400 mb-4">Krisna desa wisata, Gianyar construction outdoor and landscaping Located in Gianyar surrounded with waterfalls, Irrigation system as a main concept of the landscaping.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ourTeam">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <span class="header-3 color-grey font-weight-600 mb-2">Our Team</span>
                <h2 class="header-1 color-black font-weight-700 mb-3">Meet Our Team: Turning Dreams into Design</h2>
                <p class="body-1 color-grey mb-4">
                    At Aezakmi, our team is a blend of creative minds,
                    skilled designers, and dedicated professionals who are passionate about crafting exceptional
                    interior spaces. With a shared commitment to innovation and excellence,
                    we collaborate to bring your design visions to life.
                </p>
            </div>
        </div>

        <div class="team-background mb-4">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <img class="img-fluid" src="{{ asset('images/pages/home/ceo-img.png') }}" alt="">
                </div>

                <div class="offset-lg-1 col-lg-6">
                    <h3 class="header-1 color-white font-weight-700 mb-2">Alexander Pierce, S.Ds., M.B.A</h3>
                    <span class="header-2 color-secondary font-weight-600 mb-3 d-block">CEO</span>
                    <p class="body-1 color-white font-weight-400 mb-4">
                        Meet Alexander Pierce, the visionary founder behind Aezakmi. With
                        a passion for design and an unwavering commitment to excellence, Alexander
                        has been the driving force that has shaped our company's journey in the world of interior design.
                    </p>

                    <span class="body-1 color-white font-weight-400 font-weight-700">
                        <i class="fab fa-instagram me-1"></i>
                        @alexanderpierce
                    </span>
                </div>
            </div>
        </div>

        <div class="row row-cols-4 g-5">
            <div class="col">
                <img src="{{ asset('images/pages/home/team-img-1.png') }}" class="img-fluid team-img" alt="">
                <h3 class="header-2 color-black text-left font-weight-600 mb-2">Phoenix Baker</h3>
                <span class="body-1 color-grey text-left font-weight-400 mb-0">Principal of Vision Design</span>
            </div>

            <div class="col">
                <img src="{{ asset('images/pages/home/team-img-2.png') }}" class="img-fluid team-img" alt="">
                <h3 class="header-2 color-black text-left font-weight-600 mb-2">Phoenix Baker</h3>
                <span class="body-1 color-grey text-left font-weight-400 mb-0">Principal of Vision Design</span>
            </div>

            <div class="col">
                <img src="{{ asset('images/pages/home/team-img-3.png') }}" class="img-fluid team-img" alt="">
                <h3 class="header-2 color-black text-left font-weight-600 mb-2">Phoenix Baker</h3>
                <span class="body-1 color-grey text-left font-weight-400 mb-0">Principal of Vision Design</span>
            </div>

            <div class="col">
                <img src="{{ asset('images/pages/home/team-img-4.png') }}" class="img-fluid team-img" alt="">
                <h3 class="header-2 color-black text-left font-weight-600 mb-2">Phoenix Baker</h3>
                <span class="body-1 color-grey text-left font-weight-400 mb-0">Principal of Vision Design</span>
            </div>

            <div class="col">
                <img src="{{ asset('images/pages/home/team-img-5.png') }}" class="img-fluid team-img" alt="">
                <h3 class="header-2 color-black text-left font-weight-600 mb-2">Phoenix Baker</h3>
                <span class="body-1 color-grey text-left font-weight-400 mb-0">Principal of Vision Design</span>
            </div>
        </div>
    </div>
</section>

<section id="project">
    <div class="container">
        <div class="row mb-4 align-items-start">
            <div class="col-lg-7">
                <span class="header-3 color-grey font-weight-600 mb-2 d-block">Projects</span>
                <h2 class="header-1 color-white font-weight-700 mb-3">Visit At Our Successful Project</h2>
                <p class="body-1 color-white mb-4">
                    A curated collection of design projects that showcase our commitment to creating
                    captivating and functional interior spaces. Each project is a testament to our passion for
                    design, attention to detail, and dedication to transforming visions into reality.
                </p>
            </div>
        </div>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Show all</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Krisna Desa Wisata</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="row row-cols-4 gx-5 gy-4">
                    <div class="col">
                        <div class="project-item-container">
                            <img src="{{ asset('images/pages/home/project-1.png') }}" class="project-item-img" alt="">

                            <div class="project-item-content">
                                <h3 class="header-2 color-white text-center font-weight-600 mb-3">Krisna By Pass</h3>
                                <p class="body-1 color-white text-center font-weight-400 mb-2">
                                    Choosing the right plants for a rooftop garden is crucial for several
                                    reasons. Proper plant selection ensures they can thrive in
                                    the rooftop environment, withstand exposure to wind and sun,
                                    contribute to insulation , improve air quality, enhance
                                    aesthetics, and promote a sustainable and enjoyable urban oasis
                                </p>

                                <span class="body-1 color-white font-weight-400 font-weight-700 d-block text-center">
                                    <i class="fab fa-instagram me-1"></i>
                                    @alexanderpierce
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="project-item-container">
                            <img src="{{ asset('images/pages/home/project-2.png') }}" class="project-item-img" alt="">

                            <div class="project-item-content">
                                <h3 class="header-2 color-white text-center font-weight-600 mb-3">Krisna By Pass</h3>
                                <p class="body-1 color-white text-center font-weight-400 mb-2">
                                    Choosing the right plants for a rooftop garden is crucial for several
                                    reasons. Proper plant selection ensures they can thrive in
                                    the rooftop environment, withstand exposure to wind and sun,
                                    contribute to insulation , improve air quality, enhance
                                    aesthetics, and promote a sustainable and enjoyable urban oasis
                                </p>

                                <span class="body-1 color-white font-weight-400 font-weight-700 d-block text-center">
                                    <i class="fab fa-instagram me-1"></i>
                                    @alexanderpierce
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="project-item-container">
                            <img src="{{ asset('images/pages/home/project-3.png') }}" class="project-item-img" alt="">

                            <div class="project-item-content">
                                <h3 class="header-2 color-white text-center font-weight-600 mb-3">Krisna By Pass</h3>
                                <p class="body-1 color-white text-center font-weight-400 mb-2">
                                    Choosing the right plants for a rooftop garden is crucial for several
                                    reasons. Proper plant selection ensures they can thrive in
                                    the rooftop environment, withstand exposure to wind and sun,
                                    contribute to insulation , improve air quality, enhance
                                    aesthetics, and promote a sustainable and enjoyable urban oasis
                                </p>

                                <span class="body-1 color-white font-weight-400 font-weight-700 d-block text-center">
                                    <i class="fab fa-instagram me-1"></i>
                                    @alexanderpierce
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="project-item-container">
                            <img src="{{ asset('images/pages/home/project-4.png') }}" class="project-item-img" alt="">

                            <div class="project-item-content">
                                <h3 class="header-2 color-white text-center font-weight-600 mb-3">Krisna By Pass</h3>
                                <p class="body-1 color-white text-center font-weight-400 mb-2">
                                    Choosing the right plants for a rooftop garden is crucial for several
                                    reasons. Proper plant selection ensures they can thrive in
                                    the rooftop environment, withstand exposure to wind and sun,
                                    contribute to insulation , improve air quality, enhance
                                    aesthetics, and promote a sustainable and enjoyable urban oasis
                                </p>

                                <span class="body-1 color-white font-weight-400 font-weight-700 d-block text-center">
                                    <i class="fab fa-instagram me-1"></i>
                                    @alexanderpierce
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="project-item-container">
                            <img src="{{ asset('images/pages/home/project-5.png') }}" class="project-item-img" alt="">

                            <div class="project-item-content">
                                <h3 class="header-2 color-white text-center font-weight-600 mb-3">Krisna By Pass</h3>
                                <p class="body-1 color-white text-center font-weight-400 mb-2">
                                    Choosing the right plants for a rooftop garden is crucial for several
                                    reasons. Proper plant selection ensures they can thrive in
                                    the rooftop environment, withstand exposure to wind and sun,
                                    contribute to insulation , improve air quality, enhance
                                    aesthetics, and promote a sustainable and enjoyable urban oasis
                                </p>

                                <span class="body-1 color-white font-weight-400 font-weight-700 d-block text-center">
                                    <i class="fab fa-instagram me-1"></i>
                                    @alexanderpierce
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">Krisna Desa Wisata</div>
        </div>
    </div>
</section>

<section id="social">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h2 class="header-1 color-black text-left font-weight-700 mb-3">Follow Us: Stay Inspired and Connected</h2>
                <p class="body-1 color-grey text-left font-weight-400 mb-4">
                    Stay connected with Aezakmi and immerse yourself in a
                    world of design inspiration, trends, and insights. Join our social media
                    community to stay updated on our latest projects,
                    design tips, and captivating interior stories.
                </p>

                <button class="btn social-btn">
                    <i class="fab fa-instagram me-1"></i>
                    Visit our instagram
                </button>
            </div>

            <div class="col-lg-6 offset-lg-1">
                <img src="{{ asset('images/pages/home/instagram-profile.png') }}" class="img-fluid social-img" alt="">
            </div>
        </div>
    </div>
</section>
@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="{{ mix('css/home/index.css') }}">
@endpush

@push('js')
<script src="{{ mix('js/page/home/index.js') }}"></script>
@endpush
