
@extends('layouts.admin')

@section('title', 'Product Detail - Admin Panel')

@push('styles')
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/dropzone/dropzone.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/tagify/tagify.css')}}" />
@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
<div class="container-fluid">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Project Details</h4>        
        <div class="mt-4">
            <a href="{{ route('admin.productions.index') }}" class="btn btn-secondary">
            <i class="bx bx-arrow-back me-1"></i> Back to Productions
        </a>
                <a href="{{ route('admin.productions.edit', $production->id) }}" class="btn btn-primary">
                    <i class="bx bx-edit me-1"></i> Edit
                </a>
                <form action="{{ route('admin.productions.destroy', $production->id) }}" method="POST" class="d-inline"
                      onsubmit="return confirm('Are you sure you want to delete this production?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bx bx-trash me-1"></i> Delete
                    </button>
                </form>
            </div>
    </div>

    <!-- Project Card -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Left: Images -->
                <div class="col-md-5">
                    @if($production->poster)
                        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/' . $production->poster) }}" 
                                             class="d-block rounded margin-auto" 
                                             style="max-height: 300px; object-fit: contain; margin: auto;"    
                                             alt="Product Image">
                                    </div>
                               
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    @else
                        <div class="alert alert-warning">No images uploaded for this product.</div>
                    @endif
                    
                    <div class="mt-3">
                        <h5>Cast:</h5>
                        @if($production->cast->count() > 0)
                            <ul class="list-unstyled">
                                @foreach($production->cast as $cast)
                                    <li><strong>{{ $cast->name }}</strong> as {{ $cast->character_name }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted">No cast members added.</p>
                        @endif
                    </div>
                    
                </div>

                <!-- Right: Info -->
                <div class="col-md-7">
                    <h3>{{ $production->title }}</h3>
                    <p class="text-muted mb-2"><strong>Slug:</strong> {{ $production->slug }}</p>

                    <p class="mb-2"><strong>Medium:</strong> {{ $production->medium ?? 'N/A' }}</p>
                    <p class="mb-2"><strong>Genre:</strong> {{ $production->genre ?? 'N/A' }}</p>
                    
                    <h5>Short Description</h5>
                    <div class="border p-3 rounded bg-light">
                        {!! $production->short_description !!}
                    </div>
                    <h5>Description</h5>
                    <div class="border p-3 rounded bg-light">
                        {!! $production->description !!}
                    </div>
                </div>
            <!-- gallery -->
                <div class="col-md-12">
                    <h3>BTS Images</h3>

                    @if($production->gallery->count() >0)
                        @foreach($production->gallery as $gallery)
                        <img src="{{ asset('storage/'.$gallery->image) }}" alt="Gallery-{{ $gallery->id }}" class="rounded" style="width: 200px; height: auto;">
                        @endforeach
                    @endif
                </div>

            <!-- end -->
            </div>            

            
            
        </div>
    </div>
</div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('admin-template/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{ asset('admin-template/assets/vendor/libs/select2/select2.js')}}"></script>
@endpush