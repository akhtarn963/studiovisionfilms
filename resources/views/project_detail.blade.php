@extends('layouts.frontend')
@section('title', 'Project Detail')
@section('content')

<div id="main">
    <div class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center-sm">
                        <h1 class="title">Our <span>Projects</span></h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('our-projects') }}">Project</a></li>
                                <li>{{$project->title}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="film-detail-video">
                        <a href="{{ $project->youtube_url }}" class="md-trigger1" target="_blank">
                            <img src="{{ asset('storage/'.$project->poster) }}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pb-7">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="film-detail-title">
                        <h3 class="section-title"> {{$project->title}}</h3>
                        <div class="category">
                            <a href="#">{{$project->medium}}</a>
                            <a href="#">{{$project->genre}}</a>
                        </div>
                        
                    </div>
                    <div class="film-detail-content">
                        <blockquote>
                            {!! $project->short_description !!}
                        </blockquote>
                        {!! $project->description !!}
                        
                    </div>
                    <!-- <div class="film-button">
                        <i class="ion-arrow-right-c"></i> <a href="#" target="_self">Hire Us Now</a>
                    </div> -->
                </div>
                <div class="col-sm-3">
                    <div class="film-detail-info">
                        <div class="info-item">
                            <div class="info-item-inner">
                                <div class="title">Directed By</div>
                                <div class="content">
                                    {{ $project->director ?? 'N/A' }}
                                </div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-item-inner">
                                <div class="title">Written By</div>
                                <div class="content">
                                    {{ $project->writer ?? 'N/A' }}
                                </div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-item-inner">
                                <div class="title">Cast</div>
                                <div class="content">
                                    <ul class="list-unstyled">
                                        @foreach($project->cast as $cast)
                                            <li><strong>{{ $cast->name }}</strong> as {{ $cast->character_name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                         
                        <!--<div class="info-item">
                            <div class="info-item-inner">
                                <div class="title">Client</div>
                                <div class="content">Ana Alcazar</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-item-inner">
                                <div class="title">Director</div>
                                <div class="content">Calvin Harris Florian Sommer</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-item-inner">
                                <div class="title">Assistant Camera</div>
                                <div class="content">Ingo Kendzia Daniel Holzheid</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-item-inner">
                                <div class="title">Location</div>
                                <div class="content">AEG Nürnberg</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-item-inner">
                                <div class="title">Model</div>
                                <div class="content">Spitzbart Filmtechnik Beimann Cineastic Cinegate</div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg-light pt-7 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title fz-24 fw-bolder bottom-line">Behind the Scenes</h3>
                    <div class="relate-film-carousel row mt-5" data-auto-play="true" data-desktop="4" data-laptop="3" data-tablet="3" data-mobile="2">
                    @if($project->gallery->isEmpty())
                        <p>No images found in the gallery.</p>
                    @else
                        @foreach($project->gallery as $img)    
                            <div class="item">
                                <div class="item-inner">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('storage/' . $img->image) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <a href="#"> Thissss Last Laugh </a>
                                        </div>
                                        <div class="category">
                                            <a href="#">Serial Film</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                      @endif 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title fz-24 fw-bolder bottom-line"> Related Projects</h3>
                    <div class="relate-film-carousel row mt-5" data-auto-play="true" data-desktop="4" data-laptop="3" data-tablet="3" data-mobile="2">
                    @if($relatedProjects->isEmpty())
                        <p>No related projects found.</p>
                    @else
                        @foreach($relatedProjects as $relatedProject)   
                            <div class="item">
                                <div class="item-inner">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('storage/' . $relatedProject->poster) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <a href="#"> {{ $relatedProject->title }} </a>
                                        </div>
                                        <div class="category">
                                            <a href="#">{{ $relatedProject->genre }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                     @endif   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection