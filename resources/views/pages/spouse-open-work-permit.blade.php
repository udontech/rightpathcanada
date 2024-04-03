@extends('layouts.app')

@section('content')
    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/suheader_use.png') }}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">
                <p class="sub-header-heading">Services</p>
                <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr; Services &rarr; Spouse Open Work Permit</p>
            </div>
        </div>
    </div>
    {{-- content --}}

    <div class="project-content">
        <div class="container">
            <div class="project__img_single">
                <img class="img-fluid thumparallax-down" width="900" height="938"
                    src="{{ asset('image/proj4a.jpg') }}">
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h2 class="post-name">Spouses</h2>
                    <span class="venor-animate-border"></span>
                    <p>Spouses or common-law partners of full-time students with a&nbsp;<strong>valid study
                            permit</strong>&nbsp;may apply for an open work permit. An open work permit will enable the
                        spouse or common-law partner of the international student&nbsp;to work.&nbsp;</p>
                    <p>Your spouse/partner&nbsp;<strong>will not require a job offer to apply</strong>, and his/her permit
                        will be valid for&nbsp;<strong>the same period</strong>&nbsp;as your study permit.&nbsp;This is an
                        excellent way for your spouse or your common-law partner to connect with the local community, gain
                        valuable work experience and earn extra money.&nbsp;Your spouse or your common-law partner can apply
                        for a work permit after you arrive to Canada.&nbsp;</p>
                    <p>It is also possible to apply for the spouse/common-law partner work permit at the same time
                        as&nbsp;applying for your initial study permit&nbsp;outside of Canada.&nbsp;Your&nbsp;<strong>minor
                            child/children</strong>&nbsp;may also study without a study permit at the preschool, primary, or
                        secondary level. Please note children accompanying an adult who is in Canada on a work or study
                        permit may study in Canada without a study permit at the pre-school, primary and secondary levels.
                    </p>
                    <p>&nbsp;</p>
                    <p>Please note Immigration, Refugees and Citizenship Canada (IRCC) require that applicants submit
                        government&nbsp;<strong>application processing fees</strong>&nbsp;for most of applications.</p>
                    <p>Your spouse or common-law partner&nbsp;<strong>may apply</strong>&nbsp;for an&nbsp;open work
                        permit&nbsp;if you:</p>
                    <ul>
                        <li>are a<strong>&nbsp;full-time</strong>&nbsp;student at a:
                            <ul>
                                <li>public post-secondary school, such as a college or university, or CEGEP in Quebec</li>
                                <li>private college-level school in Quebec or</li>
                                <li>Canadian private school that can legally award degrees under provincial law (for
                                    example, Bachelors, Masters or Doctorate degree) and</li>
                            </ul>
                        </li>
                        <li>have a&nbsp;<strong>valid</strong>&nbsp;study permit.</li>
                    </ul>
                    <p>Our&nbsp;<strong>Canadian immigration services</strong>&nbsp;include different options where you can
                        choose between Full Representation, Final Review and Do-It-Yourself packages. If you have any
                        questions, you can&nbsp;<strong>book consultation</strong>&nbsp;to speak
                        with&nbsp;<strong>immigration consultant</strong></p>
                </div>
                <div class="col-md-4">
                    <h4 class="post-name">Info</h4>
                    <span class="venor-animate-border"></span>
                    <p><strong>1 Year</strong></p>
                    <p><strong>On Enquiry</strong></p>
                    <p><strong>Visa Application</strong></p>
                    <a href="https://www.canada.ca/en.html" target="_blank" class="btn btn-style1"><span>Learn
                            More</span></a>
                </div>
            </div>
            <div class="gallery">
                <div class="row">
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740959977xm.xyz865868.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740959977xm.xyz865868.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740961367xm.xyz994011.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740961367xm.xyz994011.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740961357xm.xyz802751.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740961357xm.xyz802751.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740962957xm.xyz723509.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740962957xm.xyz723509.jpg">
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
