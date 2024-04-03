@extends('layouts.app')

@section('content')
    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/suheader_use.png') }}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">
                <p class="sub-header-heading">Services</p>
                <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr; Services &rarr; Federal Skilled Workers</p>
            </div>
        </div>
    </div>
    {{-- content --}}
<div class="project-content">
    <div class="container">
        <div class="project__img_single">
            <img class="img-fluid thumparallax-down" width="900" height="938"
                src="{{ asset('image/proj1.jpg') }}">
                
        </div>
        <div class="row">
            <div class="col-md-8">
                <h2 class="post-name">Skilled Workers</h2>
                <span class="venor-animate-border"></span>
                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                        <p>Federal Skilled Worker Class has traditionally been the most popular category. For
                            applicants&nbsp;meeting minimum criteria, Federal Worker Skilled Class utilizes a point
                            system to determine the applicant&rsquo;s ability to become economically established in
                            Canada. Applicants need at least 67 points to be eligible to apply. Skilled workers are
                            chosen as permanent residents based on their education, work experience,&nbsp;English/French
                            language skills, and other factors.&nbsp;&nbsp;If you score 67 or higher (out of 100), you
                            may qualify to immigrate to Canada as a federal skilled worker. If you score lower, than the
                            pass mark of 67 points, you won&rsquo;t qualify to immigrate to Canada as a federal skilled
                            worker. In addition to selection criteria, applicant should be able to demonstrate
                            sufficient funds available for resettlement in Canada.&nbsp;Once IRCC has determined that an
                            applicant is a member of the Federal Skilled Worker Class, both the principal applicant and
                            their family members, whether accompanying or not, must&nbsp;complete medical
                            examinations&nbsp;if required, and pass criminal and security checks.</p>
                    </div>
                </div>
                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                        <p>Please note Immigration, Refugees and Citizenship Canada (IRCC) require that applicants
                            submit government&nbsp;application processing fees&nbsp;for most of applications. As of
                            January 1, 2015 foreign nationals will be selected through Express Entry System and must
                            receive invitation before they may apply.&nbsp;Under Express Entry,&nbsp;Federal Skilled
                            Workers&nbsp;across 347&nbsp;eligible occupations&nbsp;who meet minimum entry criteria,
                            submit an expression of interest profile to the Express Entry Pool.</p>
                        <p>To be considered for Federal Skilled Worker program candidates require to
                            meet&nbsp;<em>minimum requirements</em>&nbsp;such as:</p>
                        <p><strong>Work experience</strong></p>
                        <ul>
                            <li>in the same type of job as your primary NOC</li>
                            <li>within the last 10 years</li>
                            <li>paid work (volunteer work, unpaid internships don&rsquo;t count)</li>
                            <li>at skill type 0, or skill levels A or B of the 2011&nbsp;National Occupational
                                Classification (NOC)</li>
                        </ul>
                        <ul>
                            <li>at least 1 year (1,560 hours total / 30 hours per week), continuous:
                                <ul>
                                    <li>full-time at 1 job:&nbsp;30 hours/week for 12 months = 1 year full time (1,560
                                        hours)</li>
                                    <li>equal amount in part-time:&nbsp;15 hours/week for 24 months = 1 year full time
                                        (1,560 hours)</li>
                                    <li>full-time at more than 1 job:&nbsp;30 hours/week for 12 months at more than 1
                                        job = 1 year full time (1,560 hours)</li>
                                </ul>
                            </li>
                            <li>You must show that you performed the duties set out in the occupational description in
                                the NOC.</li>
                        </ul>
                        <p><strong>Education</strong></p>
                        <p>If you went to school&nbsp;<strong>in Canada</strong>, you must have a certificate, diploma
                            or degree from a Canadian&nbsp;secondary (high school) or&nbsp;post-secondary
                            school.&nbsp;If you have&nbsp;<strong>foreign education</strong>, you must
                            have&nbsp;an<strong>&nbsp;Educational Credential Assessment (ECA)</strong>&nbsp;report from
                            an approved agency&nbsp;showing that your foreign education is equal to a completed
                            certificate, diploma or degree&nbsp; from a Canadian&nbsp;secondary (high school)
                            or&nbsp;post-secondary school.</p>
                        <p><strong>Language Ability</strong></p>
                        <p>You must take&nbsp;<strong>an approved language test</strong>&nbsp;in English or French that
                            shows you meet the level for&nbsp;writing,&nbsp;reading,&nbsp;listening and&nbsp;speaking
                            and get a minimum score&nbsp;of&nbsp;Canadian Language Benchmark (CLB) 7 in all four
                            abilities.&nbsp;Your&nbsp;test results&nbsp;must not be more than two years old on the day
                            you apply for permanent residence.</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4 class="post-name">Info</h4>
                <span class="venor-animate-border"></span>
                <p><strong>1 Month</strong></p>
                <p><strong>All Nationality</strong></p>
                <p><strong>Visa Application</strong></p>
                <a href="https://www.canada.ca/en.html" target="_blank" class="btn btn-style1"><span>Canada
                        Immigration</span></a>
            </div>
        </div>
        <div class="gallery">
            <div class="row">
                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="../images/media/16740911167xm.xyz227072.jpg">
                            <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                data-src="https://flycanadaimmigration.com/public/images/media/16740911167xm.xyz227072.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="../images/media/16740910797xm.xyz379242.jpg">
                            <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                data-src="https://flycanadaimmigration.com/public/images/media/16740910797xm.xyz379242.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="../images/media/16740910807xm.xyz814783.jpg">
                            <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                data-src="https://flycanadaimmigration.com/public/images/media/16740910807xm.xyz814783.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="../images/media/16740910807xm.xyz479831.jpg">
                            <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                data-src="https://flycanadaimmigration.com/public/images/media/16740910807xm.xyz479831.jpg">
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
