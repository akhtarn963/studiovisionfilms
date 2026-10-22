@extends('layouts.frontend')
@section('title', 'Our Team')
@section('content')
<div id="main">
    <div class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center-sm">
                        <h1 class="title">Our Team</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>Our Team</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-bg-11 section-cover mt-18 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
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
                <div class="col-sm-5">
                    <div class="mt-5"></div>
                    <div class="mt-13 hidden-sm"></div>
                    <h2 class="section-title white fz-40 mb-3">Creative Directors</h2>
                    <p class="mb-3 gray">Since 2008, we shot more than 50 short formats (commercials, music videos, documentaries and short movies). We set up teams to shape your identity, push your idea and manage the workflow from pre- to post-production.</p>
                    <div class="icon-boxes icon-boxes-small">
                        <div class="icon-boxes-icon">
                            <i class="ion-trophy"></i>
                        </div>
                        <h5 class="icon-boxes-title white"> 06 Awards in 2014/2015.</h5>
                        <div class="icon-boxes-content gray">
                            These awards are both national and international<br /> in 2014/2015
                        </div>
                    </div>
                    <div class="mb-4"></div>
                    <div class="icon-boxes icon-boxes-small">
                        <div class="icon-boxes-icon">
                            <i class="ion-trophy"></i>
                        </div>
                        <h5 class="icon-boxes-title white"> 04 Awards in 2016</h5>
                        <div class="icon-boxes-content gray">
                            These awards are both national and international<br /> in 2016
                        </div>
                    </div>
                    <div class="mt-5"></div>
                    <div class="mt-13 hidden-sm"></div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection