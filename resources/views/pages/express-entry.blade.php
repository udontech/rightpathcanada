@extends('layouts.app')

@section('content')
    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/suheader_use.png') }}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">
                <p class="sub-header-heading">Services</p>
                <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr; Services &rarr; Express Entry</p>
            </div>
        </div>
    </div>
    {{-- content --}}

    <div class="project-content">
        <div class="container">
            <div class="project__img_single">
                <img class="img-fluid thumparallax-down" width="900" height="938"
                    src="{{ asset('image/16740882329989665.webp') }}">
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h2 class="post-name">Express Entry</h2>
                    <span class="venor-animate-border"></span>
                    <p>Canada has one of the most positive immigration policies in the world and welcomes more than 200,000
                        new immigrants each year. According to an international survey conducted recently, 53 per cent of
                        adults in the world&rsquo;s 24 leading countries said they would immigrate to Canada. While Canada
                        offers a great choice of both Federal and Provincial immigration programs, immigration to Canada has
                        become increasingly popular due to main driver of the Canadian immigration system &ndash; Express
                        Entry. Express Entry applicants receive priority processing and increased accessibility for
                        candidates from a broader range of occupations. Without a cap on the number of applications being
                        accepted for processing, applicants can apply to Express Entry at any time without being concerned
                        that the program will close or fill up before their application is completed.</p>
                    <p>All immigration programs managed under the Express Entry system have different&nbsp; eligibility
                        criteria. The programs are: <strong>Federal Skilled Worker</strong>, Federal Skilled Trades Program
                        and <strong>Canadian Experience Class</strong>.&nbsp; Thus ability to qualify under one of these
                        categories is the first requirement under Express Entry.</p>
                    <p>The Express Entry involves two steps: 1. Complete an online Express Entry profile, &nbsp;be placed in
                        pool of candidates and 2. Receive invitation to apply for permanent residence from IRCC. Candidates
                        in the pool are ranked using a point-based system (CRS). Getting into Express Entry doesn&rsquo;t
                        guarantee invitation to apply, since applicants have to meet all eligible and admissibility
                        requirements. Upon entering the pool, candidates are assigned a CRS score based on factors
                        including&nbsp; education, work experience, language ability, and other criteria. Highest-ranking
                        candidates are regularly selected from draw and invited to apply for permanent residence.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="post-name">Info</h4>
                    <span class="venor-animate-border"></span>
                    <p><strong>3 Weeks</strong></p>
                    <p><strong>Generally</strong></p>
                    <p><strong>Visa Application</strong></p>
                    <a href="https://www.canadavisa.com/" target="_blank" class="btn btn-style1"><span>Official
                            Canada</span></a>
                </div>
            </div>
            <div class="gallery">
                <div class="row">
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740884417xm.xyz522651.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740884417xm.xyz522651.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740886387xm.xyz280518.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740886387xm.xyz280518.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740895847xm.xyz812079.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740895847xm.xyz812079.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740896717xm.xyz944199.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740896717xm.xyz944199.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer1' ? '&l=' + l : ''; j.async = true; j.src = '../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer1', 'GTM-TLGQ9K');
    </script>
    
@endsection
