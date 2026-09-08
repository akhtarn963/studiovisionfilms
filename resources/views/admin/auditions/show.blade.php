
@extends('layouts.admin')

@section('title', 'Audition Detail - Admin Panel')

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
        <h4 class="mb-0">Audition Details</h4>        
        <div class="mt-4">
            <a href="{{ route('admin.auditions.index') }}" class="btn btn-secondary">
            <i class="bx bx-arrow-back me-1"></i> Back to Auditions
        </a>
                
            </div>
    </div>

    <!-- Project Card -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Left: Images -->
                <div class="col-md-5">
                    @if($audition->profile_picture)
                        <div id="auditionCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/' . $audition->profile_picture) }}" 
                                             class="d-block rounded margin-auto" 
                                             style="max-height: 300px; object-fit: contain; margin: auto;"    
                                             alt="Audition Image">
                                    </div>
                               
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#auditionCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#auditionCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    @else
                        <div class="alert alert-warning">No images uploaded for this audition.</div>
                    @endif
                    
                    <div class="mt-3">
                        @if($audition->video_link)
                            <div class="mb-4">
                                <h5>Audition Video</h5>

                                <video
                                    controls
                                    width="100%"
                                    style="max-width: 800px;"
                                >
                                    <source
                                        src="{{ route('admin.auditions.video', $audition->id) }}"
                                        type="video/mp4"
                                    >

                                    Your browser does not support the video tag.
                                </video>
                            </div>

                            <a
                                href="{{ route('admin.auditions.downloadVideo', $audition->id) }}"
                                class="btn btn-primary"
                            >
                                <i class="bx bx-download"></i>
                                Download Video
                            </a>
                        @endif
                    </div>
                    
                </div>

                <!-- Right: Info -->
                <div class="col-md-7">
                    <h3>{{ $audition->name }}</h3>
                    <p class="text-muted mb-2"><strong>Email:</strong> {{ $audition->email }}</p>

                    <p class="mb-2"><strong>Phone:</strong> {{ $audition->phone ?? 'N/A' }}</p>
                    <p class="mb-2"><strong>Gender:</strong> {{ $audition->gender ?? 'N/A' }}</p>

                    <p class="mb-2"><strong>City:</strong> {{ $audition->city ?? 'N/A' }}</p>
                    <p class="mb-2"><strong>Experience:</strong> {{ $audition->experience ?? 'N/A' }}</p>
                    <h5>Message</h5>
                    <div class="border p-3 rounded bg-light">
                        {!! $audition->message !!}
                    </div>
                </div>
            
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