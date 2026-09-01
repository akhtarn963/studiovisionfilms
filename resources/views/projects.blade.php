@extends('layouts.frontend')
@section('title', 'Our Projects')

@section('content')

<div id="main">
    <div class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center-sm">
                        <h1 class="title">Our Projects</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>Our Projects List</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-bg-5 section-cover pt-11 pb-11">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center mb-7">
                        <h3 class="sub-title primary-color">Our Best Films</h3>
                        <h2 class="section-title mb-2">Featured Films</h2>
                        <p>Have a look at our best films which are high in quality and receive positive responses <br />from audience. You are gonna have these great films as well.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($projects->count() > 0)
                @php 
                    $key = 1;
                @endphp
                @foreach($projects as $proj)
                <div class="film-list-item">
                    <div class="col-md-6 {{ ($key % 2 ==0) ? 'col-md-push-6':''}} col-thumb">
                        <div class="thumb">
                            <a href="{{ route('project-detail', ['slug' => $proj->slug]) }}">
                                <img src="{{ asset('storage/'.$proj->poster) }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 {{ ($key % 2 ==0) ? 'col-md-pull-6':''}} col-info">
                        <div class="info">
                            <div class="title">
                                <a href="{{ route('project-detail', ['slug' => $proj->slug]) }}"> {{ $proj->title}} </a>
                            </div>
                            <div class="category">
                                <a href="#">{{ $proj->medium}}</a>
                                <a href="#">{{ $proj->genre}}</a>
                            </div>
                            <div class="excerpt"> 
                                {!! $proj->short_description !!}
                            </div>
                            <div class="meta">
                                Cast:
                                @if($proj->cast->count() > 0)
                            <ul class="list-unstyled">
                                @foreach($proj->cast as $cast)
                                    <li><strong>{{ $cast->name }}</strong> as {{ $cast->character_name }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted">No cast members added.</p>
                        @endif
                                <!-- <span class="view">215 Views</span>
                                <span class="like">
                                    <a href="#" class="like-btn">4 Likes</a>
                                </span>
                                <span class="comment">0 Comment</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                @php 
                    $key ++;
                @endphp
                @endforeach
                @else
                <p>No projects found</p>
                @endif
                <!-- <div class="film-list-item">
                    <div class="col-md-6 col-md-push-6 col-thumb">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('assets/images/projects/project_2.jpg') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-pull-6 col-info">
                        <div class="info">
                            <div class="title">
                                <a href="#"> Kicks </a>
                            </div>
                            <div class="category">
                                <a href="#">Short Film</a>
                            </div>
                            <div class="excerpt"> 
                                The Tribeca Film Festival kicked off on April 14 with the opening night premiere of Justin Tipping’s Kicks, an ambitious coming-of-age film set in an inner city enclave in Northern California. Though it’s Tipping’s feature debut, he’s far
                            </div>
                            <div class="meta">
                                <span class="view">155 Views</span>
                                <span class="like">
                                    <a href="#" class="like-btn">0 Like</a>
                                </span>
                                <span class="comment">0 Comment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="film-list-item">
                    <div class="col-md-6 col-thumb">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('assets/images/projects/project_11.jpg') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-info">
                        <div class="info">
                            <div class="title">
                                <a href="#"> Raising Bertie Up </a>
                            </div>
                            <div class="category">
                                <a href="#">Short Film</a>
                            </div>
                            <div class="excerpt"> 
                                Raising Bertie follows three young men over the course of five years as they grow into adulthood in Bertie County, a rural African-American-led community in North Carolina. Director Margaret Byrne had originally set out to make
                            </div>
                            <div class="meta">
                                <span class="view">177 Views</span>
                                <span class="like">
                                    <a href="#" class="like-btn">0 Like</a>
                                </span>
                                <span class="comment">0 Comment</span>
                            </div>
                        </div>
                    </div>

                </div> -->
                <!-- pagination -->
                    {{ $projects->links('vendor.pagination.custom') }}
                    <!-- end pagination -->
            </div>
        </div>
    </div>
    
</div>

@endsection