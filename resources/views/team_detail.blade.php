@extends('layouts.frontend')
@section('title', 'Team Detail')
@section('content')

<div id="main">
    <div class="section page-title big-style big-style-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center-sm">
                        <h1 class="title">Fabian <span>Hellgardt</span></h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('our-team') }}">Our Team</a></li>
                                <li>John Anderson</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-13 pb-13">
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <p class="section-title small mont-font fw-bolder">
                        I’m a Director with experience across multiple genres from documentaries, to corporate films, music videos, narrative fiction and commercials.
                    </p>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <p>
                        I’m a world-renowned filmmaker who, for the past 9 years of my 26-years career have specialized in creating incredible cinematic images no matter what the camera. Some of my most iconic work was created with Canon DSLRs.
                    </p>
                    <div class="mt-4"></div>
                    <div class="film-member-info">
                        <div class="member-info">
                            <div class="line">
                                <div class="name">Position</div>
                                <div class="value">Designer</div>
                            </div>
                            <div class="line">
                                <div class="name">Experience</div>
                                <div class="value">5 years</div>
                            </div>
                            <div class="line">
                                <div class="name">Email</div>
                                <div class="value">fabianhellgardt@lelotus.com</div>
                            </div>
                            <div class="line">
                                <div class="name">Social</div>
                                <div class="value socials">
                                    <a href="#facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#googleplus"><i class="fa fa-google"></i></a>
                                    <a href="#pinterest"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
    <div class="section section-bg-13 pt-13 pb-9">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="mtn-19 mb-4 text-center">
                        <img src="{{ asset('assets/images/our_team_single.jpg') }}" alt="" class="box-shadow" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="film-member-skill mw-500">
                        <div class="title">There are<br>my skills</div>
                        <div class="skills">
                            <div class="progress-wraper group-progressbar mb-2">
                                <div class="block-progressbar">
                                    <h3 class="progress-title">Yoga dance</h3>
                                    <div class="progresswrap">
                                        <div role="progressbar" data-transitiongoal="87" class="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wraper group-progressbar mb-2">
                                <div class="block-progressbar">
                                    <h3 class="progress-title">Vinyasa</h3>
                                    <div class="progresswrap">
                                        <div role="progressbar" data-transitiongoal="69" class="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wraper group-progressbar mb-2">
                                <div class="block-progressbar">
                                    <h3 class="progress-title">Flow</h3>
                                    <div class="progresswrap">
                                        <div role="progressbar" data-transitiongoal="61" class="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wraper group-progressbar mb-2">
                                <div class="block-progressbar">
                                    <h3 class="progress-title">Kundalini</h3>
                                    <div class="progresswrap">
                                        <div role="progressbar" data-transitiongoal="92" class="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-9 pb-9">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-6 text-center">
                        <img src="{{ asset('assets/images/our_team_single_icon.png') }}" alt="" />
                    </div>
                    <p class="section-title small mont-font text-center">
                        We work with established agencies, labels and organizations, <br />as well as young talents and startups.
                    </p>
                    <div class="mt-6 text-center">
                        <a href="#" target="_self" class="button">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection