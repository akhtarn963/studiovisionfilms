@extends('layouts.frontend')
@section('title', 'Gallery')
@push('styles')
   <style>
    .gallery-filter ul {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    align-items: center;
}

.gallery-filter ul li {
    display: block;
}
   </style>
@endpush
@section('content')

<div id="main">
    <div class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center-sm">
                        <h1 class="title">BTS Gallery</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>BTS Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-12">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="gallery-filter">
                        <ul class="masonry-filter">
                            <li><a href="#" data-filter="" class="active">All</a></li>
                            @foreach($genres as $genre)
                                <li><a href="#" data-filter=".{{ strtolower(str_replace(' ', '-', $genre)) }}">{{ $genre }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pb-12">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="gallery-masonry masonry-grid-post">
                        @foreach($galleryImages as $galleryImage)
                        <div class="col-md-3 col-sm-6 gallery-masonry-item masonry-item {{ strtolower(str_replace(' ', '-', $galleryImage->production->genre ?? '')) }}">
                            <div class="gallery-image">
                                <a href="{{ asset('storage/' . $galleryImage->image) }}" class="mfp-image gallery-item">
                                    <img src="{{ asset('storage/' . $galleryImage->image) }}" alt="" />
                                    <div class="desc-wrap">
                                        <div class="desc">
                                            <div class="title"> {{ $galleryImage->production->title ?? '' }}</div>
                                            <div class="gallery-separator"></div>
                                            <div class="cates nd-font"> {{ $galleryImage->production->genre ?? '' }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach                        
                    </div>
                    <!-- pagination -->
                    {{ $galleryImages->links('vendor.pagination.custom') }}
                    <!-- end pagination -->
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection