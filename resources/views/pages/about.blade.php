@extends('layouts.app')

@section('content')
{{-- sub-header --}}
<div style="background-image: url('{{ asset('image/suheader_use.png')}}'); height: 150px;">
    <div class="sub-header-overlay d-flex align-items-center">
        <div class=" ms-4">
            <p class="sub-header-heading">About us</p>
            <p  class="sub-header-text"><a href="{{ route('home')}}" class="sub-header-link">Home</a> &rarr; About us</p>
        </div>
    </div>
</div>

<section id="about" class="container-fluid mt-5">
    {{-- First row --}}

    {{-- view in large devices --}}
    <div class="row d-md-none d-sm-none d-none d-lg-flex d-xl-flex ms-2 me-2">
        <div class="col-xl-6 col-lg-6 mx-auto" data-aos="slide-right" data-aos-duration="800" data-aos-delay="50">

            <img src="{{ asset('image/carousel1.jpg')}}" alt="" class="mx-auto img-fluid about-image">

        </div>

        <div class="col-xl-6 col-lg-6 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                <!-- <img src="{{ asset('image/Pattern.png')}}" alt="" width="" height="" class="img-fluid"> -->
                <p class="sub-heading">Our Mission</p>
            </div>
            <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                At Right Path Canada, our mission is to empower individuals to achieve their dreams of living in Canada by providing professional, regulated, and efficient immigration services. We strive to leverage our team's combined expertise and personal experiences to guide our clients through every step of the immigration process, ensuring their journey to Canada is smooth and successful
            </p>


        </div>
    </div>

    {{-- view in small devices --}}
    <div class="row d-xl-none d-lg-none d-md-block d-sm-block d-xs-block ms-2 me-2">

        <div class="col-md-12 col-sm-12 col-xs-12 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="50">
                <!-- <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x"> -->
                <p class="sub-heading">Our Mission</p>
            </div>
            <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                At Right Path Canada, our mission is to empower individuals to achieve their dreams of living in Canada by providing
                professional, regulated, and efficient immigration services. We strive to leverage our team's combined expertise and
                personal experiences to guide our clients through every step of the immigration process, ensuring their journey to
                Canada is smooth and successful
            </p>


        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 mx-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <img src="{{ asset('image/carousel1.jpg')}}" alt="" class="mx-auto d-flex img-fluid about-image">
        </div>

    </div>

    {{-- second row --}}

    {{-- view in large devices --}}
    <div class="row mt-5 d-xl-flex d-lg-flex d-md-none d-sm-none d-none ms-2 me-2">
        <div class="col-xl-6 col-lg-6 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="50">
                <!-- <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x"> -->
                <p class="sub-heading">About Us</p>
            </div>
            <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                Right Path Canada is committed to helping you achieve your dream of living in Canada and to provide you with
                professional, regulated and efficient service. At Right Path Canada, our Regulated Canadian Immigration Consultants have
                over 10 years of combined experience in the Canadian immigration industry. Several of our Regulated Canadian Immigration
                Consultants have also gone through the immigration process themselves and are able to relate to our clients on a
                personal level.
                Right Path Canada is committed to helping you achieve your dream of living in Canada and to provide you with
                professional, regulated and efficient service.
</p>

        </div>

        <div class="col-xl-6 col-lg-6 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="50">
                <!-- <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x"> -->
                <p class="sub-heading">Our Vision</p>
            </div>
            <p class="text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                Our vision at Right Path Canada is to be recognized as the premier destination for individuals seeking to immigrate to
                Canada. We aim to set the standard for excellence in immigration consultancy, delivering personalized and empathetic
                service to every client. Through our commitment to professionalism, regulation, and efficiency, we envision a future
                where every individual's dream of building a new life in Canada becomes a reality with ease and confidence
            </p>
        </div>
    </div>

    {{-- view in small devices --}}
    <div class="row mt-5 d-md-block d-sm-block d-xs-block d-xl-none d-lg-none ms-2 me-2">
        <div class="col-md-12 col-sm-12 col-xs-12 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <!-- <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x"> -->
                <p class="sub-heading">About Us</p>
            </div>
            <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            Right Path Canada is committed to helping you achieve your dream of living in Canada and to provide you with
            professional, regulated and efficient service. At Right Path Canada, our Regulated Canadian Immigration Consultants have
            over 10 years of combined experience in the Canadian immigration industry. Several of our Regulated Canadian Immigration
            Consultants have also gone through the immigration process themselves and are able to relate to our clients on a
            personal level.
            Right Path Canada is committed to helping you achieve your dream of living in Canada and to provide you with
            professional, regulated and efficient service.
</p>

        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 text-background">
            <div class="mb-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <!-- <img src="{{ asset('image/Pattern.png')}}" alt="" width="45px" height="45x"> -->
                <p class="sub-heading">Our Vision</p>
            </div>
            <p class="text-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                Our vision at Right Path Canada is to be recognized as the premier destination for individuals seeking to immigrate to
                Canada. We aim to set the standard for excellence in immigration consultancy, delivering personalized and empathetic
                service to every client. Through our commitment to professionalism, regulation, and efficiency, we envision a future
                where every individual's dream of building a new life in Canada becomes a reality with ease and confidence
            </p>
        </div>
    </div>

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
                        "I believe in fostering a world where borders are not barriers but bridges to opportunity. Our
                        mission transcends paperwork; it's about uniting families, empowering professionals, and enriching
                        communities. Every visa application represents a life transformed, a dream pursued, and a
                        contribution to the tapestry of our global society. We are stewards of hope, guiding individuals
                        through the complexities of immigration with compassion, integrity, and expertise. Our commitment is
                        unwavering: to advocate for our clients tirelessly, navigate legal intricacies diligently, and
                        celebrate every success with unwavering pride. Together, we build futures, break down walls, and
                        champion the inherent dignity and worth of every person. At our consultancy, we don't just process
                        visas; we pave pathways to brighter tomorrows."
                    </p>
                </div>
    
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex">
                    <img src="{{ asset('image/ceo.jpg') }}" alt="" class="w-100 mx-auto founder-pics" height="" width=""
                        data-aos="slide-left" data-aos-duration="1000" data-aos-delay="300">
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
                        "I believe in fostering a world where borders are not barriers but bridges to opportunity. Our
                        mission transcends paperwork; it's about uniting families, empowering professionals, and enriching
                        communities. Every visa application represents a life transformed, a dream pursued, and a
                        contribution to the tapestry of our global society. We are stewards of hope, guiding individuals
                        through the complexities of immigration with compassion, integrity, and expertise. Our commitment is
                        unwavering: to advocate for our clients tirelessly, navigate legal intricacies diligently, and
                        celebrate every success with unwavering pride. Together, we build futures, break down walls, and
                        champion the inherent dignity and worth of every person. At our consultancy, we don't just process
                        visas; we pave pathways to brighter tomorrows."
                    </p>
                </div>
    
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex">
                    <img src="{{ asset('image/ceo.jpg') }}" alt="" class="w-100 mx-auto founder-pics" height="" width=""
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
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



</section>
@endsection
