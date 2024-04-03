@extends('layouts.app')

@section('content')
    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/suheader_use.png') }}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">
                <p class="sub-header-heading">Services</p>
                <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr; Services &rarr; Canadian Citizenship Application</p>
            </div>
        </div>
    </div>
    {{-- content --}}

    <div class="project-content">
        <div class="container">
            <div class="project__img_single">
                <img class="img-fluid thumparallax-down" width="900" height="938"
                    src="{{ asset('image/proj2.jpg') }}">
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h2 class="post-name">Citizenship</h2>
                    <span class="venor-animate-border"></span>
                    <p>Canadian Citizenship was first introduced in 1947 by the Canadian <strong>Citizenship Act</strong>.
                        Since then, several major amendments were passed by Canadian Governments. And, in our days, law says
                        both Canadian-born and naturalized citizens are equally entitled to the right of the citizen and to
                        the duties of the citizen. Under the Act, all persons born in Canada are Canadian citizens at birth,
                        with minor exceptions (e.g., children of diplomats). However, at the same time, children born
                        outside Canada to a Canadian parent must submit an application to obtain a
                        Canadian&nbsp;<strong>Citizenship Certificate</strong> to prove they are Canadian citizens.</p>
                    <p>Canadian citizens are entitled to carry a Canadian passport, vote in Canadian elections or run own
                        political campaign. They have absolute right to live in Canada, and the right to leave and enter
                        Canada (can travel to 170+ countries visa free). Moreover, Canada is one of the countries which
                        recognize <strong>dual citizenship</strong>, so you don&rsquo;t need to give up on your previous
                        passport.</p>
                    <p><strong>Getting the Canadian PR</strong> is the first step towards obtaining the citizenship in
                        Canada. Since 2010, Canada has welcomed an average of more than 260,000 permanent residents each
                        year. Furthermore, Canada has the highest rate of naturalization in the world &ndash; 85% of
                        eligible permanent residents become citizens.</p>
                    <p>Immigration, Refugees and Citizenship Canada (IRCC) is the federal department that manages Canadian
                        citizenship, both for those applying for citizenship and for current Canadian citizens. Before you
                        submit a Canadian citizenship application, you must satisfy several <strong>IRCC
                            requirements</strong>. These requirements include a minimum of three years of being permanent
                        resident, as well as language and residence requirements.&nbsp;IRCC may return your application as
                        incomplete, if you do not send acceptable proof that you have met residence requirements or have
                        adequate knowledge of English or French.&nbsp;So, given the long application processing times, it is
                        critical to avoid any errors that can cause further delays or in some cases refusals.</p>
                    <p>Our&nbsp;<strong>Canadian immigration services</strong>&nbsp;include different options where you can
                        choose between Full Representation, Final Review and Do-It-Yourself packages. If you have any
                        questions, you can <strong>book consultation</strong>&nbsp;to speak with <strong>immigration
                            consultant in Toronto.</strong></p>
                    <p>After you submit the citizenship application, the final step will be taking Canadian
                        <strong>citizenship test</strong>. Once you pass the test, and you are approved as a Canadian
                        citizen, you will receive an invitation to a <strong>citizenship ceremony</strong>.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="post-name">Info</h4>
                    <span class="venor-animate-border"></span>
                    <p><strong>1-6 Years</strong></p>
                    <p><strong>On enquiry</strong></p>
                    <p><strong>Visa Application</strong></p>
                    <a href="https://www.canada.ca/en.html" target="_blank" class="btn btn-style1"><span>Learn
                            more</span></a>
                </div>
            </div>
            <div class="gallery">
                <div class="row">
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740940397xm.xyz313704.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740940397xm.xyz313704.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740940397xm.xyz837725.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740940397xm.xyz837725.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740940397xm.xyz645979.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740940397xm.xyz645979.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-image">
                            <a href="../images/media/16740940397xm.xyz313704.jpg">
                                <img class="thumparallax-down img-fluid lazy" src="../img/loading-blog.gif"
                                    data-src="https://flycanadaimmigration.com/public/images/media/16740940397xm.xyz313704.jpg">
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
