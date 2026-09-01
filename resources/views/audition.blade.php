@extends('layouts.frontend')
@section('title', 'Audition Form')
@section('content')

<div id="main">
    <div class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center-sm">
                        <h1 class="title">Audition Form</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>Audition</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-12 mb-10">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="icon-boxes">
                            <div class="icon-boxes-inner">
                                <h5 class="icon-boxes-title"> Address</h5>
                                <div class="icon-boxes-content">
                                    @setting('address')
                                </div>
                            </div>
                        </div>
                        <div class="icon-boxes">
                            <div class="icon-boxes-inner">
                                <h5 class="icon-boxes-title"> Phone</h5>
                                <div class="icon-boxes-content">
                                    Mobile: @setting('phone')
                                </div>
                            </div>
                        </div>
                        <div class="icon-boxes">
                            <div class="icon-boxes-inner">
                                <h5 class="icon-boxes-title"> Email</h5>
                                <div class="icon-boxes-content">
                                    @setting('email')
                                </div>
                            </div>
                        </div>
                        <ul class="film-social">
                            <li><a href="@setting('facebook_url')" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="@setting('twitter_url')" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="@setting('instagram_url')" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="@setting('youtube_url')" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <h3 class="section-title bottom-line mb-5">Submit Video Audition</h3>
                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger mb-4">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('audition.store') }}" class="contact-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="name" value="{{ old('name') }}" size="40" class="mb-3" placeholder="Name" />
                            </div>                            
                            <div class="col-md-4">
                                <input type="email" name="email" value="{{ old('email') }}" size="40" class="mb-3" placeholder="Email" />
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="phone" value="{{ old('phone') }}" size="40" class="mb-3" placeholder="Phone" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <select name="gender" class="mb-3">
                                    <option value="" {{ old('gender') == '' ? 'selected' : '' }}>Select Gender</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>                                                            
                            <div class="col-md-4">
                                <input type="text" name="city" value="{{ old('city') }}" size="40" class="mb-3" placeholder="City" />
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="experience" value="{{ old('experience') }}" size="40" class="mb-3" placeholder="Experience" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" cols="40" rows="7" class="mb-3" placeholder="Tell us about yourself">{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Video <small>(Max file size: 10MB)</small></label>
                                <input type="file" name="video_link" value="" size="40" class="mb-3" placeholder="Video Link" accept="video/*" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Profile Picture</label>
                                <input type="file" name="profile_picture" class="mb-3" accept="image/*" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="SEND US NOW" class="button" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="googleMap" class="mb-6" data-icon="{{ asset('assets/images/icon_location.png') }}" data-lat="37.789133" data-lon="-122.402158"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-bg-3 section-cover footer-newsletter style-1 pt-11 pb-8">
        <div class="container">
            <div class="row">
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-4">
                    <div class="footer-newsletter-left">Subscribe to our Newsletter</div>
                </div>
                <div class="col-md-6">
                    <div class="footer-newsletter-right">
                        <form method="post">
                            <div class="form-fields">
                                <div class="form">
                                    <input type="email" name="email" placeholder="Enter your e-mail" /> 
                                    <input type="submit" value="Submit" />
                                </div>
                                <p class="note">Note* : Spectators are our passion. Creation is our core.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection