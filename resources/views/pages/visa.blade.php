@extends('layouts.app')

@section('content')
    {{-- sub-header --}}
    <div style="background-image: url('{{ asset('image/suheader_use.png') }}'); height: 150px;">
        <div class="sub-header-overlay d-flex align-items-center">
            <div class=" ms-4">
                <p class="sub-header-heading">Visa</p>
                <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr; Visa</p>
            </div>
        </div>
    </div>
    {{-- content --}}

    <div class="page-content">
        <div class="container">
            <h3 style="text-align: center;"><strong>Visa Application&nbsp;Types Available&nbsp;</strong></h3>
            <p>There are several types of visa applications available for those who want to migrate to Canada, each with
                their own specific requirements. Some of the most common types of visa applications are:</p>
            <ol>
                <li>
                    <p>Express Entry: This is a federal program for skilled workers who wish to immigrate to Canada. It is a
                        points-based system that evaluates candidates based on factors such as age, education, work
                        experience, language proficiency, and other factors. To be eligible for Express Entry, applicants
                        must have at least one year of continuous full-time work experience in a skilled occupation, a
                        Canadian high school diploma or equivalent, and a valid language test score.</p>
                </li>
                <li>
                    <p>Provincial Nominee Program (PNP): This program allows Canadian provinces and territories to nominate
                        individuals who wish to immigrate to their specific region. Each province and territory has its own
                        specific requirements and criteria for nomination, but generally, candidates must have a job offer
                        or a business plan and meet certain education and language requirements.</p>
                </li>
                <li>
                    <p>Family Sponsorship: This program allows Canadian citizens and permanent residents to sponsor certain
                        family members to immigrate to Canada. Eligible family members include spouses, common-law partners,
                        dependent children, and parents or grandparents. The sponsor must meet certain income requirements
                        and must provide financial support for the sponsored family member for a certain period of time.</p>
                </li>
                <li>
                    <p>Study Permit: This type of visa is for international students who wish to study in Canada. To be
                        eligible for a study permit, applicants must have been accepted into a designated learning
                        institution, have enough money to pay for tuition, living expenses, and return transportation, and
                        must not have any criminal convictions.</p>
                </li>
                <li>
                    <p>Work Permit: This type of visa is for individuals who wish to work in Canada temporarily. To be
                        eligible for a work permit, applicants must have a valid job offer from a Canadian employer and must
                        meet certain education and language requirements. Some types of work permits also require a Labour
                        Market Impact Assessment (LMIA) from Employment and Social Development Canada.</p>
                </li>
                <li>
                    <p>Permanent Residence: This type of visa is for individuals who wish to immigrate to Canada
                        permanently. To be eligible for permanent residence, applicants must meet certain criteria such as
                        language proficiency, education, work experience, and adaptability.</p>
                </li>
                <li>
                    <p>Citizenship: This type of visa is for individuals who wish to become Canadian citizens. To be
                        eligible for citizenship, applicants must be permanent residents, meet certain residency
                        requirements, have knowledge of Canada, and pass a citizenship test.</p>
                </li>
            </ol>
            <p>It's important to note that the requirements for each type of visa application can change over time and vary
                depending on the specific program, so it's always best to check with the most recent and official
                immigration website for up-to-date information and also consult with a licensed immigration consultant for a
                personalized assessment.</p>
            <h3 style="text-align: center;"><strong>Requirements you need before you can start your
                    application&nbsp;</strong></h3>
            <p>To be eligible for the various types of visa applications available for those who want to migrate to Canada,
                applicants must typically meet certain criteria and requirements. Below is a summary of the general
                requirements for each type of visa application:</p>
            <ol>
                <li>
                    <p>Express Entry: To be eligible for Express Entry, applicants must have at least one year of continuous
                        full-time work experience in a skilled occupation, a Canadian high school diploma or equivalent, and
                        a valid language test score. They must also pass a points-based assessment that evaluates factors
                        such as age, education, work experience, language proficiency, and other factors.</p>
                </li>
                <li>
                    <p>Provincial Nominee Program (PNP): To be eligible for the PNP, applicants must have a job offer or a
                        business plan and meet certain education and language requirements. Each province and territory has
                        its own specific requirements and criteria for nomination, so it's best to check with the specific
                        province or territory for more information.</p>
                </li>
                <li>
                    <p>Family Sponsorship: To be eligible for Family Sponsorship, applicants must be the spouse, common-law
                        partner, dependent child, or parent or grandparent of a Canadian citizen or permanent resident. The
                        sponsor must meet certain income requirements and must provide financial support for the sponsored
                        family member for a certain period of time.</p>
                </li>
                <li>
                    <p>Study Permit: To be eligible for a Study Permit, applicants must have been accepted into a designated
                        learning institution, have enough money to pay for tuition, living expenses, and return
                        transportation, and must not have any criminal convictions.</p>
                </li>
                <li>
                    <p>Work Permit: To be eligible for a Work Permit, applicants must have a valid job offer from a Canadian
                        employer and must meet certain education and language requirements. Some types of work permits also
                        require a Labour Market Impact Assessment (LMIA) from Employment and Social Development Canada.</p>
                </li>
                <li>
                    <p>Permanent Residence: To be eligible for Permanent Residence, applicants must meet certain criteria
                        such as language proficiency, education, work experience, and adaptability. They must also pass a
                        medical examination and a security clearance.</p>
                </li>
                <li>
                    <p>Citizenship: To be eligible for citizenship, applicants must be permanent residents, meet certain
                        residency requirements, have knowledge of Canada, and pass a citizenship test.</p>
                </li>
            </ol>
            <p><sup id="cite_ref-2" class="reference"></sup></p>
        </div>
    </div>
    <script>
        (function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer1' ? '&l=' + l : ''; j.async = true; j.src = '../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer1', 'GTM-TLGQ9K');
    </script>
    
@endsection
