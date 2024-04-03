@extends('layouts.app')

@section('content')
    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/suheader_use.png') }}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">
                <p class="sub-header-heading">Services</p>
                <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr; Services</p>
            </div>
        </div>
    </div>
    {{-- content --}}

    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">What We Offer</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-user-tie fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Business Research</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                        stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-pie fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Stretagic Planning</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                        stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-line fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Market Analysis</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                        stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-area fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Financial Analaysis</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                        stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-balance-scale fa-2x"></i>
                    </div>
                    <h3 class="mb-3">legal Advisory</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                        stet lorem</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-house-damage fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Tax & Insurance</h3>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed
                        stet lorem</p>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-section">
        <div class="container">
            <h3><span>Areas</span> we Specialize in</h3>
            <div class="portfolio-slider owl-carousel">
                <div class="portfolio-slider-inner">
                    <div class="project-box-div">
                        <a href="project/federal-skilled-worker.html" title="FEDERAL SKILLED WORKER">
                            <img class="img-fluid project-image lazy" width="400" height="400"
                                src="public/img/loading-blog.gif"
                                data-src="/public/images/media/16740912577xm.xyz485862.jpg" alt="FEDERAL SKILLED WORKER">
                        </a>
                        <div class="project-meta">
                            <div class="project-number">
                                <span>01</span>
                            </div>
                            <div class="project-category">
                                <span class="block_text">Visa Application </span>
                            </div>
                            <div class="project-meta-title">
                                <a href="project/federal-skilled-worker.html" title="FEDERAL SKILLED WORKER"><span
                                        class="project__text">FEDERAL SKILLED WORKER</span></a>
                            </div>
                            <div class="project-button">
                                <a href="project/federal-skilled-worker.html" title="FEDERAL SKILLED WORKER"><span>View
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
                        <a href="project/express-entry.html" title="Express Entry Visa">
                            <img class="img-fluid project-image lazy" width="400" height="400"
                                src="public/img/loading-blog.gif" data-src="/public/images/media/16740897489989665.webp"
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
                                <a href="project/express-entry.html" title="Express Entry Visa"><span
                                        class="project__text">Express Entry Visa</span></a>
                            </div>
                            <div class="project-button">
                                <a href="project/express-entry.html" title="Express Entry Visa"><span>View
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
                        <a href="project/Citizenship-application.html" title="CANADIAN CITIZENSHIP APPLICATION">
                            <img class="img-fluid project-image lazy" width="400" height="400"
                                src="public/img/loading-blog.gif"
                                data-src="/public/images/media/16740944777xm.xyz645979.jpg"
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
                                <a href="project/Citizenship-application.html"
                                    title="CANADIAN CITIZENSHIP APPLICATION"><span class="project__text">CANADIAN
                                        CITIZENSHIP APPLICATION</span></a>
                            </div>
                            <div class="project-button">
                                <a href="project/Citizenship-application.html"
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
                        <a href="project/spouse-open-work-permit.html" title="SPOUSE OPEN WORK PERMIT">
                            <img class="img-fluid project-image lazy" width="400" height="400"
                                src="public/img/loading-blog.gif"
                                data-src="/public/images/media/16740966697xm.xyz936450.jpg" alt="SPOUSE OPEN WORK PERMIT">
                        </a>
                        <div class="project-meta">
                            <div class="project-number">
                                <span>04</span>
                            </div>
                            <div class="project-category">
                                <span class="block_text">Visa Application </span>
                            </div>
                            <div class="project-meta-title">
                                <a href="project/spouse-open-work-permit.html" title="SPOUSE OPEN WORK PERMIT"><span
                                        class="project__text">SPOUSE OPEN WORK PERMIT</span></a>
                            </div>
                            <div class="project-button">
                                <a href="project/spouse-open-work-permit.html" title="SPOUSE OPEN WORK PERMIT"><span>View
                                        project</span><svg viewbox="0 0 80 80">
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
    
@endsection
