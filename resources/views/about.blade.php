@extends('layouts.frontend')

@section('title', 'About Us')
@section('content')

<div id="main">
    <div class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center-sm">
                        <h1 class="title">About Us</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-16 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="text-center-xs">
                        <img src="images/film_8.jpg" alt="" class="mb-3" />
                        <h2 class="section-title fz-40">We Are The Best</h2>
                        <p>We are a creative film and photo production company hungry for quality in aesthetics. To create modern recognizable stuff we are working with a strong network of experienced professionals. We set up teams to shape your identity, push your idea and manage the workflow from pre- to post-production.</p>
                        <div class="mt-4"></div>
                        <a href="#" target="_self" class="button-2">Hire us now</a>
                        <div class="mb-9"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mt-3"></div>
                    <div class="film-single-testimonial small">
                        <div class="item">
                            <div class="photo">
                                <img src="{{ asset('assets/images/quote_bg_2.png') }}" alt="" />
                            </div>
                            <div class="text">
                                If you or your organization have a story to tell, an idea to share or word to spread, the Nine Studio can help you bring it to life.
                            </div>
                            <div class="info">
                                <div class="author">
                                    <span class="name">Jerry Hansen</span> 
                                    <span class="tagline">Actor</span>
                                </div>
                            </div>
                            <div class="mt-5"></div>
                            <img src="images/film_9.jpg" alt="" />
                        </div>
                    </div>
                    <div class="mb-9"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="film-list-member">
                        <div class="item">
                            <div class="photo">
                                <img src="{{ asset('assets/images/team/team_6.jpg') }}" alt="" />
                            </div>
                            <div class="info">
                                <span class="name">John Anderson</span>
                                <span class="tagline">/ Director</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="photo">
                                <img src="{{ asset('assets/images/team/team_7.jpg') }}" alt="" />
                            </div>
                            <div class="info">
                                <span class="name">Fabian Hellgardt</span>
                                <span class="tagline nd-font">/ Creative Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <h2 class="section-title fz-40 mb-3">Creative Directors</h2>
                    <p class="mb-3">Since 2008, we shot more than 50 short formats (commercials, music videos, documentaries and short movies). We set up teams to shape your identity, push your idea and manage the workflow from pre- to post-production.</p>
                    <div class="icon-boxes icon-boxes-small">
                        <div class="icon-boxes-icon">
                            <i class="ion-trophy"></i>
                        </div>
                        <h5 class="icon-boxes-title"> 06 Awards in 2014/2015.</h5>
                        <div class="icon-boxes-content">
                            These awards are both national and international<br /> in 2014/2015
                        </div>
                    </div>
                    <div class="mb-4"></div>
                    <div class="icon-boxes icon-boxes-small">
                        <div class="icon-boxes-icon">
                            <i class="ion-trophy"></i>
                        </div>
                        <h5 class="icon-boxes-title"> 04 Awards in 2016</h5>
                        <div class="icon-boxes-content">
                            These awards are both national and international<br /> in 2016
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg-light pt-14 pb-8">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h3 class="sub-title primary-color"> Filmming Services</h3>
                        <h2 class="section-title mb-2">Explore Services</h2>
                        <p class="mb-4">Doloremque, ad. Vero veniam dicta aliquid blanditiis ullam quibusdam, accusamus, <br />eius quia molestias nihil temporibus nam praesentium odit repellat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-boxes icon-boxes-bg text-center">
                        <div class="icon-boxes-icon" data-bg-image="{{ asset('assets/images/icon-boxes/icon_bg_1.png') }}">
                            <i class="ns-tripod"></i>
                        </div>
                        <div class="icon-boxes-inner">
                            <h5 class="icon-boxes-title">FILMING SERVICES</h5>
                            <div class="icon-boxes-content">
                                We can film your project whether it is a commercial advertise, a short film or a document film. We have expertise in these fields.
                            </div>
                            <div class="icon-boxes-link">
                                <a href="#"><span class="ion-android-arrow-forward"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-boxes icon-boxes-bg text-center">
                        <div class="icon-boxes-icon" data-bg-image="{{ asset('assets/images/icon-boxes/icon_bg_2.png') }}">
                            <i class="ns-seats"></i>
                        </div>
                        <div class="icon-boxes-inner">
                            <h5 class="icon-boxes-title">WORKSHOPS &amp; PRIVATE TUITION</h5>
                            <div class="icon-boxes-content">
                                Some workshops have invited us to come lecturing. We also offer private tuitions for absolute beginners or mid-level producers who need more advice.
                            </div>
                            <div class="icon-boxes-link">
                                <a href="#"><span class="ion-android-arrow-forward"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-boxes icon-boxes-bg text-center">
                        <div class="icon-boxes-icon" data-bg-image="{{ asset('assets/images/icon-boxes/icon_bg_3.png') }}">
                            <i class="ns-video-camera"></i>
                        </div>
                        <div class="icon-boxes-inner">
                            <h5 class="icon-boxes-title">Equipment hire</h5>
                            <div class="icon-boxes-content">
                                Sometimes we don’t use our equipment so you can hire them for your filming. Check our schedule and contact if it suits your time.
                            </div>
                            <div class="icon-boxes-link">
                                <a href="#"><span class="ion-android-arrow-forward"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.frontend.brand_logo')
</div>

@endsection