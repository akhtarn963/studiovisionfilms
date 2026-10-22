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
                        <h3 class="sub-title primary-color">Our Best Projects</h3>
                        <h2 class="section-title mb-2">Urdu Dramas</h2>
                        <p>Have a look at our best dramas which are high in quality and receive positive responses <br />from audience. You are gonna have these great dramas as well.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="film-masonry masonry-grid-post">
                    @if($projects->count() > 0)
                    @php 
                        $key = 1;
                    @endphp
                    @foreach($projects as $proj)
                    <div class="col-md-4 col-sm-6 film-masonry-item masonry-item">
									<div class="film-masonry-item-inner">
										<div class="thumb">
											<a href="{{ route('project-detail', ['slug' => $proj->slug]) }}">
												<img src="{{ asset('storage/'.$proj->poster) }}" alt="" />
											</a>
										</div>
										<div class="info">
											<div class="title text-center">
												<a href="{{ route('project-detail', ['slug' => $proj->slug]) }}"> {{ $proj->title }} </a>
											</div>
											<div class="category text-2xl text-center">
												<a href="#">{{ $proj->genre}}</a>
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
                </div>
                <!-- pagination -->
                    {{ $projects->links('vendor.pagination.custom') }}
                    <!-- end pagination -->
            </div>
        </div>
    </div>
    
</div>

@endsection