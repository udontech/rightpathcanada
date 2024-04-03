@extends('layouts.app')

@section('content')
{{-- hero section beginning --}}

 <section class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('image/carousel1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Immigration Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">We easily bring you to Canada</h1>
                            <a href="{{ route('about') }}" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Who we are</a>
                            <a href="{{ route('contact') }}" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('image/carousel3.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Immigration Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">We are all about guidance</h1>
                            <a href="{{ route('about') }}" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Who we are</a>
                            <a href="{{ route('contact') }}" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</section>

{{-- end of hero section --}}

{{-- sports arranged in cards --}}
<!-- <section class="container-fluid custom-bg-1 mb-3 pb-3">
        <h2 class="mt-4 mb-4 ms-sm-3 text-center text-sm-start our-activities" data-aos="fade-up" data-aos-duration="500"
            data-aos-delay="50">Some of our <span style="color: #6665B5">activities</span></h2>
        <div class="row ms-2 me-2">
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <img src="{{ asset('image/sport_icon.png') }}" height="50px" alt="">
                <h2 class="fw-normal my-3">Sport</h2>
                <p class="fs-5 my-3">Sports are games such as football, athletics and other leisure activities which need
                    physical effort and skill.</p>
            </div> -->
<!-- /.col-lg-4 -->
<!-- <div class="col-lg-4" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                <img src="{{ asset('image/music_icon.png') }}" height="50px" alt="" class="">
                <h2 class="fw-normal my-3">Music</h2>
                <p class="fs-5 my-3">Music is expression of ideas and emotions in significant forms through the elements of
                    rhythm and melody.</p>
            </div> -->
<!-- /.col-lg-4 -->
<!-- <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300">
                <img src="{{ asset('image/painting_icon.png') }}" height="50px" alt="">
                <h2 class="fw-normal my-3">Painting</h2>
                <p class="fs-5 my-3">Painting is the expression or application of imagination and creative skills in a
                    visual form.</p>
            </div> -->
<!-- /.col-lg-4 -->
<!-- </div>
    </section> -->

    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">What We Offer</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary1 text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-user-tie fa-2x"></i>
                    </div>
                    <h3 class="mb-3"> Preparing and Submitting applications</h3>
                    <p class="mb-0">We adequately help clients to prepare and submit applications</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary1 text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-pie fa-2x"></i>
                    </div>
                    <h3 class="mb-3"> Representation at immigration interviews</h3>
                    <p class="mb-0"> We provide representation at immigration interviews, either in-person or via telephone or video-conference.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary1 text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-line fa-2x"></i>
                    </div>
                    <h3 class="mb-3"> Appeal and Review Services</h3>
                    <p class="mb-0">If an application gets rejected, we can help our clients to appeal </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary1 text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-area fa-2x"></i>
                    </div>
                    <h3 class="mb-3">legal Advisory</h3>
                    <p class="mb-0">We give our clients professional legal advice</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary1 text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-balance-scale fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Representation before Immigration Boards or in Court</h3>
                    <p class="mb-0">We represent our clients before immigration courts or boards if need be</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

{{-- latest blogs arranged in cards --}}
{{-- sub-heading --}}
<section class="container-fluid mt-5" style="background-color:#E7E7E7">
    <div class="row">
        <div class="mx-auto col-lg-6 col-md-8 col-12 mt-4 mb-5 mb-lg-4" data-aos="fade-up" data-aos-duration="800"
            data-aos-delay="100">
            <div class="blog-sub-heading-div">
                <!-- <img src="{{ asset('image/Pattern.png') }}" alt="" width="40px" height="40px"
                        class="img-fluid bg-pattern"> -->
                <h2 id="team-head" class="text-sub-heading">Latest News</h2>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mx-3 mt-3 d-none d-sm-none d-md-flex">
        @foreach ($blogs as $key => $blog)
        <div class="col-lg-4 col-md-6 mx-md-auto col-sm-11 mx-sm-auto mx-auto mx-lg-auto col-12">
            <a href="{{ route('blog.show', $blog->id) }}" style="text-decoration: none; color:black">
                <div class="blog-card" style="width: 100%" data-aos="zoom-in" data-aos-duration="800" @if ($key===0)
                    data-aos-delay="100" @elseif ($key==1) data-aos-delay="200" @else data-aos-delay="300" @endif>

                    <div class="blog-img">
                        <img src="{{ asset('storage/' . $blog->image) }}" class="" alt="" height="300px" width="100%">
                    </div>


                    <div class="card-body">
                        <h4 class="card-title">{{ $blog->title }}</h4>
                        <p class="card-text">
                            {{ $blog->details = Str::limit($blog->details, 70) }}
                        </p>
                        <h5>
                            By Admin <i class="fa-solid fa-comments mx-3"></i>{{ $blog->comment->count() }} <i
                                class="fa-sharp fa-solid fa-eye mx-3"></i>{{ $blog->views }}
                        </h5>
                        <p>{{ $blog->created_at->format('F j, Y, g:i a') }}</p>

                        <p class="read-more">Read more &rarr;</p>

                    </div>

                </div>
            </a>

        </div>
        @endforeach

    </div> {{-- end of large devices for blog --}}


    {{-- small devices for blog section --}}
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mx-3 pt-1 d-block d-sm-block d-md-none blog-margin">
        @foreach ($blogs as $key => $blog)
        <div class="col-lg-4 col-md-6 mx-md-auto col-sm-11 mx-sm-auto mx-auto mx-lg-auto col-12">
            <a href="{{ route('blog.show', $blog->id) }}" style="text-decoration: none; color:black">
                <div class="blog-card" style="width: 100%" data-aos="zoom-in" data-aos-duration="800" @if ($key===0)
                    data-aos-delay="100" @elseif ($key==1) data-aos-delay="200" @else data-aos-delay="300" @endif>

                    <div class="blog-img">
                        <img src="{{ asset('storage/' . $blog->image) }}" class="" alt="" height="" width="100%">
                    </div>


                    <div class="card-body">
                        <h4 class="card-title">{{ $blog->title }}</h4>
                        <p class="card-text">
                            {{ $blog->details = Str::limit($blog->details, 70) }}
                        </p>
                        <h5>
                            By Admin <i class="fa-solid fa-comments mx-3"></i>{{ $blog->comment->count() }} <i
                                class="fa-sharp fa-solid fa-eye mx-3"></i>{{ $blog->views }}
                        </h5>
                        <p>{{ $blog->created_at->format('F j, Y, g:i a') }}</p>

                        <p class="read-more-sm">Click to read more &rarr;</p>

                    </div>

                </div>
            </a>

        </div>
        @endforeach

    </div> {{-- end of small devices for blog --}}

</section>

{{-- button for more blogs --}}
<div class="container-fluid d-flex justify-content-end" style="background-color:#E7E7E7">
    <a class="btn btn-lg my-5 text-light mx-4 more-article-btn" href="{{ route('news-blog') }}"
        style="background-color: #FF0000">
        More Articles <i class="fa-sharp fa-solid fa-arrow-right"></i>
    </a>
</div>

 <div class="fun-facts-section light-section" id="fun-facts">
        <div class="container">
            <h3 class="fun-facts-heading1 text-red">Our Figures</h3>
            <p>We have accomplished a great deal throughout the years that we are proud of. This encourages us to keep searching for fresh challenges so that we can enhance our offerings.</p>
            <div class="row fun-facts-timer">
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon"><i class="far fa-smile"></i></div>
                        <span class="timer" data-from="0" data-to="11" data-speed="4000">11</span><span class="ppos2">+ </span>
                        <h4>Application Types</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon"><i class="fas fa-mug-hot"></i></div>
                        <span class="timer" data-from="0" data-to="190" data-speed="4000">190</span><span class="ppos3">+ </span>
                        <h4>Countries Accepted</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon"><i class="far fa-lightbulb"></i></div>
                        <span class="timer position-relative" data-from="0" data-to="6500" data-speed="4000">6500</span><span class="ppos4">+</span>
                        <h4>Helped Immigrate</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon"><i class="fas fa-briefcase"></i></div>
                        <span class="timer" data-from="0" data-to="10" data-speed="4000">10</span><span class="ppos2">+ </span>
                        <h4> Years Team Experience</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- testimonial --}}

<div class="portfolio-section">
        <div class="container">
            <h3><span>Areas</span> we Specialize in</h3>
            <div class="portfolio-slider owl-carousel">
                <div class="portfolio-slider-inner">
                    <div class="project-box-div">
                        <a href="{{ route('federal-skilled-worker') }}" title="FEDERAL SKILLED WORKER">
                            <img class="img-fluid project-image lazy" width="400" height="400"
                                src="{{ asset('image/proj1.jpg') }}"
                                alt="FEDERAL SKILLED WORKER">
                        </a>
                        <div class="project-meta">
                            <div class="project-number">
                                <span>01</span>
                            </div>
                            <div class="project-category">
                                <span class="block_text">Visa Application </span>
                            </div>
                            <div class="project-meta-title">
                                <a href="{{ route('federal-skilled-worker') }}" title="FEDERAL SKILLED WORKER"><span
                                        class="project__text">FEDERAL SKILLED WORKER</span></a>
                            </div>
                            <div class="project-button">
                                <a href="{{ route('federal-skilled-worker') }}" title="FEDERAL SKILLED WORKER"><span>View
                                        project</span><svg viewbox="0 0 80 80">
                                        <polyline points="19.89 15.25 64.03 15.25 64.03 59.33"></polyline>
                                        <line x1="64.03" y1="15.25" x2="14.03" y2="65.18"></line>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-slider-inner">
                    <div class="project-box-div">
                        <a href="{{ route('express-entry') }}" title="Express Entry Visa">
                            <img class="img-fluid project-image lazy" width="400" height="400"
                                src="{{ asset('image/16740882329989665.webp') }}"
                                alt="Express Entry Visa">
                        </a>
                        <div class="project-meta">
                            <div class="project-number">
                                <span>02</span>
                            </div>
                            <div class="project-category">
                                <span class="block_text">Visa Application </span>
                            </div>
                            <div class="project-meta-title">
                                <a href="{{ route('express-entry') }}" title="Express Entry Visa"><span
                                        class="project__text">EXPRESS ENTRY VISA</span></a>
                            </div>
                            <div class="project-button">
                                <a href="{{ route('express-entry') }}" title="Express Entry Visa"><span>View
                                        project</span><svg viewbox="0 0 80 80">
                                        <polyline points="19.89 15.25 64.03 15.25 64.03 59.33"></polyline>
                                        <line x1="64.03" y1="15.25" x2="14.03" y2="65.18"></line>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-slider-inner">
                    <div class="project-box-div">
                        <a href="{{ route('citizenship-application') }}" title="CANADIAN CITIZENSHIP APPLICATION">
                            <img class="img-fluid project-image lazy" width="400" height="400"
                                src="{{ asset('image/proj2.jpg') }}"
                                alt="CANADIAN CITIZENSHIP APPLICATION">
                        </a>
                        <div class="project-meta">
                            <div class="project-number">
                                <span>03</span>
                            </div>
                            <div class="project-category">
                                <span class="block_text">Visa Application </span>
                            </div>
                            <div class="project-meta-title">
                                <a href="{{ route('citizenship-application') }}"
                                    title="CANADIAN CITIZENSHIP APPLICATION"><span class="project__text">CANADIAN
                                        CITIZENSHIP APPLICATION</span></a>
                            </div>
                            <div class="project-button">
                                <a href="{{ route('citizenship-application') }}"
                                    title="CANADIAN CITIZENSHIP APPLICATION"><span>View project</span><svg
                                        viewbox="0 0 80 80">
                                        <polyline points="19.89 15.25 64.03 15.25 64.03 59.33"></polyline>
                                        <line x1="64.03" y1="15.25" x2="14.03" y2="65.18"></line>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-slider-inner">
                    <div class="project-box-div">
                        <a href="{{ route('spouse-open-work-permit') }}" title="SPOUSE OPEN WORK PERMIT">
                            <img class="img-fluid project-image lazy" width="400" height="400"
                                src="{{ asset('image/proj4a.jpg') }}"
                                alt="SPOUSE OPEN WORK PERMIT">
                        </a>
                        <div class="project-meta">
                            <div class="project-number">
                                <span>04</span>
                            </div>
                            <div class="project-category">
                                <span class="block_text">Visa Application </span>
                            </div>
                            <div class="project-meta-title">
                                <a href="{{ route('spouse-open-work-permit') }}" title="SPOUSE OPEN WORK PERMIT"><span
                                        class="project__text">SPOUSE OPEN WORK PERMIT</span></a>
                            </div>
                            <div class="project-button">
                                <a href="{{ route('spouse-open-work-permit') }}"
                                    title="SPOUSE OPEN WORK PERMIT"><span>View project</span><svg viewbox="0 0 80 80">
                                        <polyline points="19.89 15.25 64.03 15.25 64.03 59.33"></polyline>
                                        <line x1="64.03" y1="15.25" x2="14.03" y2="65.18"></line>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('image/testimonial.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Testimonials!!!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>                                Right Path Canada have been a great pleasure to work with. They have been with us every
                                step of the way from initial
                                consultation, work permit and finally PR. We highly recommend their immigration services
                                and would like to thank them
                                once again for their amazing service.


.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="{{ asset('image/testimonial-1.png') }}" alt="">
                            <div class="ps-4">
                                <h3>Emil Khan</h3>
                                <span class="">From India</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Right Path Canada has all the services you need. Their team are absolutely amazing!
                                Their support was very important when submitting our express entry profile.
                                They took their time to explain everything thoroughly.
                                I 100% recommend Right Path Canada for any immigration process.
</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="{{ asset('image/testimonial-2.png') }}" alt="">
                            <div class="ps-4">
                                <h3>Sanjay Puri</h3>
                                <span class="">From Nepal</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Right Path Canada has all the services you need. Their team are absolutely amazing!
                                Their support was very important when submitting our express entry profile.
                                They took their time to explain everything thoroughly.
                                I 100% recommend Right Path Canada for any immigration process.
</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="{{ asset('image/testimonial-3.png') }}" alt="">
                            <div class="ps-4">
                                <h3>Salim Mohammed</h3>
                                <span class="">From Algeria</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

     <!-- Team Start -->
    <div class="container-fluid" style="background-color:#edf6fd">
        <div class=" py-6a px-5 text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Team Members</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>


                <div class="container-fluid mt-5 mb-5">

        {{-- view in large devices --}}
        <div class="row ms-2 me-2 d-md-none d-sm-none d-none d-xl-flex d-lg-flex">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-background">
                <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <img src="{{ asset('image/Pattern.png') }}" alt="" width="45px" height="45px">
                    <p class="sub-heading">Chief Executive officer</p>
                </div>
                <p class="text pt-4" style="color: #5C5BA3;" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">&bull; Adams William &bull;</p>

                <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    "I believe in fostering a world where borders are not barriers but bridges to opportunity. Our mission transcends paperwork; it's about uniting families, empowering professionals, and enriching communities. Every visa application represents a life transformed, a dream pursued, and a contribution to the tapestry of our global society. We are stewards of hope, guiding individuals through the complexities of immigration with compassion, integrity, and expertise. Our commitment is unwavering: to advocate for our clients tirelessly, navigate legal intricacies diligently, and celebrate every success with unwavering pride. Together, we build futures, break down walls, and champion the inherent dignity and worth of every person. At our consultancy, we don't just process visas; we pave pathways to brighter tomorrows."
                </p>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex">
                <img src="{{ asset('image/ceo.jpg') }}" alt="" class="w-100 mx-auto founder-pics"
                    height="" width="" data-aos="slide-left" data-aos-duration="1000" data-aos-delay="300">
            </div>
        </div>

        {{-- view in small devices --}}
        <div class="row ms-2 me-2 d-xl-none d-lg-none d-xs-block d-sm-block d-md-block">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-background">
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <img src="{{ asset('image/Pattern.png') }}" alt="" width="45px" height="45px">
                    <p class="sub-heading">Chief Executive officer</p>
                </div>
                <p class="text pt-4" style="color: #5C5BA3;" data-aos="fade-up" data-aos-duration="800"
                    data-aos-delay="100">&bull; Adams William &bull;</p>

                <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    "I believe in fostering a world where borders are not barriers but bridges to opportunity. Our mission transcends paperwork; it's about uniting families, empowering professionals, and enriching communities. Every visa application represents a life transformed, a dream pursued, and a contribution to the tapestry of our global society. We are stewards of hope, guiding individuals through the complexities of immigration with compassion, integrity, and expertise. Our commitment is unwavering: to advocate for our clients tirelessly, navigate legal intricacies diligently, and celebrate every success with unwavering pride. Together, we build futures, break down walls, and champion the inherent dignity and worth of every person. At our consultancy, we don't just process visas; we pave pathways to brighter tomorrows."
                </p>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex">
                <img src="{{ asset('image/ceo.jpg') }}" alt="" class="w-100 mx-auto founder-pics"
                    height="" width="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            </div>
        </div>

    </div>


        <div class="px-5 px-lg-0 row g-5">
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid1 w-100 h-75a" src="{{ asset('image/coo.jpg') }}" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">George Binoy</h3>
                        <p class="text-white text-uppercase mb-0">Chief operating officer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid1 w-100 h-75a" src="{{ asset('image/sio.jpg') }}" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Chan Frances</h3>
                        <p class="text-white text-uppercase mb-0">Senior Immigration Agent</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid1 w-100 h-75a" src="{{ asset('image/sio2.jpg') }}" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Taha Ahmed</h3>
                        <p class="text-white text-uppercase mb-0">Senior Immigration Agent</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" py-5 px-5 px-lg-0 row g-5">
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid1 w-100 h-75a" src="{{ asset('image/sio3.jpg') }}" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Sanchez Heather</h3>
                        <p class="text-white text-uppercase mb-0">Senior Immigration Agent</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid1 w-100 h-75a" src="{{ asset('image/sio4.jpg') }}" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Pamon Anne</h3>
                        <p class="text-white text-uppercase mb-0">Senior Immigration Agent</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid1 w-100 h-75a" src="{{ asset('image/sio5.jpg') }}" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Lam Cherin</h3>
                        <p class="text-white text-uppercase mb-0">Senior Immigration Agent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



<!-- faq -->
<h2 id="team-head" class="mt-4">FAQS</h2>
<section class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                 What is the Canadian immigration points system? 
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Canada uses multiple points systems to assess prospective immigrants. The most commonly used are the Federal Skilled Worker points system and the Comprehensive Ranking System used by Express Entry applicants.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                What are the requirements to immigrate to Canada?
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Each program has its own requirements but typically you will need to prove you are fluent in French/English, have a high school diploma or higher and work experience in a skilled occupation. Some programs may require you to have a job offer, but you can immigrate without a job offer.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                How much money do you need to immigrate to Canada?
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Some programs require that you have a certain amount of money available based on your family size. These is called settlement funds
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                Can you immigrate to Canada without a job offer?
            </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">You can immigrate to Canada without a job offer depending on your personal background. As Canada uses a points system to assess applicants, only those with a high enough score can successfully immigrate without requiring a job offer. 
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
               Which is the easiest province to immigrate to in Canada?
            </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"> Currently Alberta, Saskatchewan, Ontario, Prince Edward Island and Nova Scotia are the easiest Provinces to immigrate to as they do not require a job offer. 
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                Can I immigrate to Canada?
            </button>
        </h2>
        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">The ability to immigrate to Canada is based on a variety of factors including age, level of completed education, skilled work experience, language proficiency and current and past connections to Canada.
            </div>
        </div>
    </div>
    <div class="mb-5"></div>
</section>



{{-- copied card carousel --}}


@endsection