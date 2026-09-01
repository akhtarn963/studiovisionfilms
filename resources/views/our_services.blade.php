@extends('layouts.frontend')
@section('title', 'Our Services')
@section('content')

<div id="main">
    <div class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center-sm">
                        <h1 class="title">Our Services</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>Our Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mt-13 hidden-sm"></div>
                    <div class="film-our-services type-image mb-7">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-6 col-image">
                                    <img src="{{ asset('assets/images/services/services_1.jpg') }}" alt="" />
                                </div>
                                <div class="col-md-6 col-text">
                                    <div class="text">
                                        <div class="title"> Filming Services</div>
                                        <div class="content"> 
                                            Doloremque, ad. Vero veniam dicta aliquid blanditiis ullam quibusdam, accusamus, eius quia molestias nihil temporibus nam praesentium accusantium odit repellat. Verblanditiis ullam quibusdam eius
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="film-our-services type-image right mb-7">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-6 col-image">
                                    <img src="{{ asset('assets/images/services/services_2.jpg') }}" alt="" />
                                </div>
                                <div class="col-md-6 col-text">
                                    <div class="text">
                                        <div class="title"> Studio Hire</div>
                                        <div class="content"> 
                                            Doloremque, ad. Vero veniam dicta aliquid blanditiis ullam quibusdam, accusamus, eius quia molestias nihil temporibus nam praesentium accusantium odit repellat. Verblanditiis ullam quibusdam eius
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="film-our-services type-image mb-7">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-6 col-image">
                                    <img src="{{ asset('assets/images/services/services_3.jpg') }}" alt="" />
                                </div>
                                <div class="col-md-6 col-text">
                                    <div class="text">
                                        <div class="title"> Workshops &amp; Private Tuition</div>
                                        <div class="content"> 
                                            Doloremque, ad. Vero veniam dicta aliquid blanditiis ullam quibusdam, accusamus, eius quia molestias nihil temporibus nam praesentium accusantium odit repellat. Verblanditiis ullam quibusdam eius
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="film-our-services type-image right mb-7">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-6 col-image">
                                    <img src="{{ asset('assets/images/services/services_4.jpg') }}" alt="" />
                                </div>
                                <div class="col-md-6 col-text">
                                    <div class="text">
                                        <div class="title"> Equipment Hire</div>
                                        <div class="content"> 
                                            Doloremque, ad. Vero veniam dicta aliquid blanditiis ullam quibusdam, accusamus, eius quia molestias nihil temporibus nam praesentium accusantium odit repellat. Verblanditiis ullam quibusdam eius
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-2 pb-13">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="section-title fz-24 mb-2">We work with established agencies, labels and <br />organizations, as well as young talents and startups.</h2>
                        <div class="mt-4"></div>
                        <a href="#" target="_self" class="button">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection