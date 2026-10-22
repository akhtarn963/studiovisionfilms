@extends('layouts.frontend')
@section('title', 'Script Submission')
@section('content')

<div id="main">
    <div class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center-sm">
                        <h1 class="title">Script Submission</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>Script Submission</li>
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
                            <li><a href="@setting('facebook_url')" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="@setting('tiktok_url')" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href="@setting('instagram_url')" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="@setting('youtube_url')" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <h3 class="section-title bottom-line mb-5">Submit Your Script</h3>
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
                    <form method="POST" action="{{ route('script.store') }}" class="contact-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Writer Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" size="40" class="mb-3" placeholder="Enter Writer Name" />
                            </div>                            
                            <div class="col-md-4">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" size="40" class="mb-3" placeholder="Enter your Email" />
                            </div>
                            <div class="col-md-4">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" size="40" class="mb-3" placeholder="Enter Phone Number" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Script Title</label>
                                <input type="text" name="script_title" value="{{ old('script_title') }}" size="40" class="mb-3" placeholder="Enter Script Title" />
                            </div>
                            <div class="col-md-4">
                                <label>Genre</label>
                                <select name="genre" class="mb-3">
                                    <option value="">Select Genre</option>
                                    @foreach($genres as $genre)
                                        <option value="{{ $genre }}" {{ old('genre') == $genre ? 'selected' : '' }}>{{ $genre }}</option>
                                    @endforeach
                                </select>
                            </div>  
                        </div>
                        <div class="row">                                                          
                            <div class="col-md-12">
                                <label>Logline</label>
                                <textarea name="logline" cols="40" rows="3" class="mb-3" placeholder="Enter one-sentence summary of your script">{{ old('logline') }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Synopsis</label>
                                <textarea name="synopsis" cols="40" rows="7" class="mb-3" placeholder="Enter detailed overview of your script">{{ old('synopsis') }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Script  <small>(Max file size: 10MB)</small></label>
                                <input type="file" name="script_file" value="" size="40" class="mb-3" placeholder="Script File" accept=".pdf,.doc,.docx,.txt" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" id="submitBtn" class="button">
                                    <i id="submitIcon" class="fa fa-paper-plane"></i>
                                    <span id="submitText">SEND US NOW</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection

@push('scripts')
<script>
    document.querySelector('.contact-form').addEventListener('submit', function () {
        const button = document.getElementById('submitBtn');
        const text = document.getElementById('submitText');
        const icon = document.getElementById('submitIcon');

        button.disabled = true;
        text.textContent = 'SUBMITTING...';
        icon.className = 'fa fa-spinner fa-spin';
    });
</script>
@endpush