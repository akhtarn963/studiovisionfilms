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
    <div class="section section-bg-11 section-cover mt-18">
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
    <div class="section pt-7 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-push-4 col-sm-12">
                    <div class="team-filter team-filter-scroll">
                        <ul class="masonry-filter">
                            <li><a href="#" data-filter="" class="active">#All</a></li>
                            <li><a href="#" data-filter=".cinematographers">#Cinematographers</a></li>
                            <li><a href="#" data-filter=".designers">#Designers</a></li>
                            <li><a href="#" data-filter=".directors">#Directors</a></li>
                            <li><a href="#" data-filter=".photographers">#Photographers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg-lighter pt-10 pb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 pl-0">
                    <div class="film-hire-box">
                        <div class="title"> Our Team</div>
                        <div class="text"> We set up teams to shape your identity, push your idea &amp; manage the workflow from pre- to post production.</div>
                        <div class="link">
                            <a href="#" target="_self"> Hire Us Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 p-0">
                    <div class="team-masonry masonry-grid-post">
                        <div class="col-md-3 col-sm-6 film-masonry-item masonry-item cinematographers designers">
                            <div class="team-item p-0">
                                <div class="thumb">
                                    <a href="{{ route('team-detail') }}">
                                        <img src="{{ asset('assets/images/team/team_1.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="{{ route('team-detail') }}">John Anderson</a>
                                    </div>
                                    <div class="tagline">Designer</div>
                                    <div class="socials">
                                        <a href="#">Facebook</a>
                                        <a href="#">Twitter</a>
                                        <a href="#">Youtube</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 film-masonry-item masonry-item designers photographers">
                            <div class="team-item p-0">
                                <div class="thumb">
                                    <a href="{{ route('team-detail') }}">
                                        <img src="{{ asset('assets/images/team/team_2.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="{{ route('team-detail') }}">Alexander Vexler</a>
                                    </div>
                                    <div class="tagline">Designer</div>
                                    <div class="socials">
                                        <a href="#">Facebook</a>
                                        <a href="#">Twitter</a>
                                        <a href="#">Youtube</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 film-masonry-item masonry-item cinematographers designers">
                            <div class="team-item p-0">
                                <div class="thumb">
                                    <a href="{{ route('team-detail') }}">
                                        <img src="{{ asset('assets/images/team/team_3.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="{{ route('team-detail') }}">Hannah Hlavacek</a>
                                    </div>
                                    <div class="tagline">Designer</div>
                                    <div class="socials">
                                        <a href="#">Facebook</a>
                                        <a href="#">Twitter</a>
                                        <a href="#">Youtube</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 film-masonry-item masonry-item designers directors photographers">
                            <div class="team-item p-0">
                                <div class="thumb">
                                    <a href="{{ route('team-detail') }}">
                                        <img src="{{ asset('assets/images/team/team_4.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="{{ route('team-detail') }}">Philipp Stengelin</a>
                                    </div>
                                    <div class="tagline">Designer</div>
                                    <div class="socials">
                                        <a href="#">Facebook</a>
                                        <a href="#">Twitter</a>
                                        <a href="#">Youtube</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 film-masonry-item masonry-item cinematographers designers">
                            <div class="team-item p-0">
                                <div class="thumb">
                                    <a href="{{ route('team-detail') }}">
                                        <img src="{{ asset('assets/images/team/team_5.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="{{ route('team-detail') }}">Hannah Hlavacek</a>
                                    </div>
                                    <div class="tagline">Designer</div>
                                    <div class="socials">
                                        <a href="#">Facebook</a>
                                        <a href="#">Twitter</a>
                                        <a href="#">Youtube</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 film-masonry-item masonry-item designers directors photographers">
                            <div class="team-item p-0">
                                <div class="thumb">
                                    <a href="{{ route('team-detail') }}">
                                        <img src="{{ asset('assets/images/team/team_9.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="{{ route('team-detail') }}">Alexander Vexler</a>
                                    </div>
                                    <div class="tagline">Designer</div>
                                    <div class="socials">
                                        <a href="#">Facebook</a>
                                        <a href="#">Twitter</a>
                                        <a href="#">Youtube</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 film-masonry-item masonry-item designers photographers">
                            <div class="team-item p-0">
                                <div class="thumb">
                                    <a href="{{ route('team-detail') }}">
                                        <img src="{{ asset('assets/images/team/team_10.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="{{ route('team-detail') }}">Philipp Stengelin</a>
                                    </div>
                                    <div class="tagline">Designer</div>
                                    <div class="socials">
                                        <a href="#">Facebook</a>
                                        <a href="#">Twitter</a>
                                        <a href="#">Youtube</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 film-masonry-item masonry-item designers photographers">
                            <div class="team-item p-0">
                                <div class="thumb">
                                    <a href="{{ route('team-detail') }}">
                                        <img src="{{ asset('assets/images/team/team_11.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="{{ route('team-detail') }}">John Anderson</a>
                                    </div>
                                    <div class="tagline">Designer</div>
                                    <div class="socials">
                                        <a href="#">Facebook</a>
                                        <a href="#">Twitter</a>
                                        <a href="#">Youtube</a>
                                    </div>
                                </div>
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