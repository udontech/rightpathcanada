@extends('layouts.app')

@section('content')
{{-- sub-header --}}
<div style="background-image: url('{{ asset('image/suheader_use.png') }}'); height: 150px;">
    <div class="sub-header-overlay d-flex align-items-center">
        <div class=" ms-4">
            <p class="sub-header-heading">Contact us</p>
            <p class="sub-header-text"><a href="{{ route('home') }}" class="sub-header-link">Home</a> &rarr; Contact us
            </p>
        </div>
    </div>
</div>

{{-- <div class="container-fluid"> --}}

    <div class="mt-5 mx-5 d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
        {{-- first column --}}
        <div class="row pt-3 mx-4 ms-5 d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">

                <p style="color: white; font-size: 30px;" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">&bull; CONTACT INFO &bull;</p>

                <div class="row">
                    <div class="col-11">

                        {{-- call --}}
                        {{-- <a href="" class="email-call-address btn w-100">
                            <div class="row contact-divs mb-4 p-5">
                                <div class="col-3">
                                    <img src="{{ asset('image/call-icon.png')}}" alt="" class="img-fluid" width="80px"
                                        height="80px">
                                </div>
                                <div class="col-9">
                                    <h6>Call us directly on </h6>
                                    <p>+xxxxxxxxxxx</p>
                                </div>
                            </div>
                        </a> --}}

                        <a href="tel:+xxxxxxxxxxx"
                            class="btn btn-light w-100 email-call-address contact-divs py-4 mb-3" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-delay="400">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('image/call-icon.png') }}" alt="" class="img-fluid"
                                        width="100px">
                                </div>
                                <div class="col-8 d-flex align-items-center">

                                    <p class="text-start" style="font-size: 17px;"><b>Call us directly on</b><br>+1 (609) 237-4269</p>
                                </div>
                            </div>
                        </a>

                        {{-- mail --}}
                        {{-- <div class="row contact-divs mb-4 p-5">
                            <div class="col-3">
                                <img src="{{ asset('image/mail-icon.png')}}" alt="" class="img-fluid" width="80px"
                                    height="80px">
                            </div>
                            <div class="col-9">
                                <h6>Mail us directly on</h6>
                                <p>info@rightpathcanada.com</p>
                            </div>
                        </div> --}}
                        <a href="mailto:info@rightpathcanada.com" class="btn btn-light w-100 email-call-address py-4 mb-3"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('image/mail-icon.png') }}" alt="" class="img-fluid"
                                        width="100px">
                                </div>
                                <div class="col-8 d-flex align-items-center">

                                    <p class="text-start"><b>Mail us directly on</b><br><span
                                            style="font-size: 13px;">info@rightpathcanada.com</span></p>
                                </div>
                            </div>
                        </a>

                        {{-- address --}}
                        {{-- <div class="row contact-divs mb-4 py-4 px-5">
                            <div class="col-3">
                                <img src="{{ asset('image/location-icon.png')}}" alt="" class="img-fluid" width="80px"
                                    height="80px">
                            </div>
                            <div class="col-6 ">
                                <h6>Find us </h6>
                                <p>2115 South Service Road W., Oakville, Ontario, L6L 5W2.</p>
                            </div>
                        </div> --}}
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('image/location-icon.png') }}" alt="" class="img-fluid"
                                        width="100px">
                                </div>
                                <div class="col-8 d-flex align-items-center">

                                    <p class="text-start pe-lg-3" style="font-size: 17px;"><b>Find us</b><br>
                                        2115 South Service Road W., Oakville, Ontario, L6L 5W2.</p>
                                </div>
                            </div>

                    </div>
                </div>

            </div>

            {{-- second column --}}
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                <p style="color: white; font-size: 30px;" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">&bull; GET IN TOUCH &bull;</p>
                <form action="mailto:info@rightpathcanada.com" method="post" enctype="text/plain">
                    <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <input type="text" class="form-control get-in-touch" placeholder="Name" name="name">
                    </div>
                    <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <input type="email" class="form-control get-in-touch" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <input type="text" class="form-control get-in-touch" placeholder="Subject" name="subject">
                    </div>
                    <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <textarea class="form-control" rows="7" placeholder="Message here..."></textarea>
                    </div>
                    <div class="d-flex justify-content-end mb-5 pb-5">
                        <input type="submit" value="Send message" class="btn form-btn" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-delay="200">
                    </div>
                </form>
            </div>

        </div>

    </div>


    {{-- small & medium devices --}}
    <div class="mt-5 mx-3 py-5 d-lg-none d-md-block d-sm-block d-block">
        <div class="row pt-3 d-xl-none d-lg-none d-md-block d-sm-block d-block">
            <div class="col-10 mx-auto">
                {{-- call button --}}
                <p style="color: white; font-size: 25px;" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">&bull; CONTACT INFO &bull;</p>
                <a href="tel:+1 (609) 237 4269"
                    class="btn btn-light w-100 email-call-address contact-divs mb-3 d-flex align-items-center"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('image/call-icon.png') }}" alt="" class="img-fluid" width="100px">
                        </div>
                        <div class="col-8 d-flex align-items-center ps-0 ps-md-5">
                            <p><b>Call us directly on</b><br>+1 (609) 237-4269</p>
                        </div>
                    </div>
                </a>
                {{-- mail button --}}
                <a href="mailto:info@rightpathcanada.com"
                    class="btn btn-light w-100 email-call-address d-flex align-items-center mb-3" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="100">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('image/mail-icon.png') }}" alt="" class="img-fluid" width="100px">
                        </div>
                        <div class="col-8 d-flex align-items-center ps-0 ps-md-5">
                            <p class="text-start"><b>Mail us directly on</b><br>info@rightpathcanada.com</p>
                        </div>
                    </div>
                </a>

                {{-- location button --}}
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('image/location-icon.png') }}" alt="" class="img-fluid" width="100px">
                    </div>
                    <div class="col-8 d-flex align-items-center ps-0 ps-md-auto">

                        <p class="text-start pe-3"><b>Find us</b><br>2115 South Service Road W., Oakville, Ontario, L6L 5W2.</p>
                    </div>
                </div>


                {{-- form area --}}
                <p style="color: white; font-size: 25px;" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="100">&bull; GET IN TOUCH &bull;</p>
                <form action="mailto:info@rightpathcanada.com" method="post" enctype="text/plain">
                    <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <input type="text" class="form-control get-in-touch" placeholder="Name" name="name">
                    </div>
                    <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <input type="email" class="form-control get-in-touch" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="350">
                        <input type="text" class="form-control get-in-touch" placeholder="Subject" name="subject">
                    </div>
                    <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <textarea class="form-control" rows="7" placeholder="Message here..."></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" value="Send message" class="btn form-btn" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-delay="250">
                    </div>
                </form>
            </div>
        </div>

    </div>



    {{-- google map --}}
    <!-- <div class="row mt-5 mx-2 mx-md-4 mx-lg-4">
            <div class="map" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <iframe src="https://maps.google.com/maps?q=ango crystal&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
            </div>End Google Maps

        </div> -->
    @endsection