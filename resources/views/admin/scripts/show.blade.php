
@extends('layouts.admin')

@section('title', 'Script Detail - Admin Panel')

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
        <h4 class="mb-0">Script Details</h4>        
        <div class="mt-4">
            <a href="{{ route('admin.script-submissions.index') }}" class="btn btn-secondary">
            <i class="bx bx-arrow-back me-1"></i> Back to Scripts
        </a>
                
            </div>
    </div>

    <!-- Project Card -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Left: Images -->
                
                <div class="col-md-12">
                    <h3>{{ $submission->name }}</h3>
                    <p class="text-muted mb-2"><strong>Email:</strong> {{ $submission->email }}</p>

                    <p class="mb-2"><strong>Phone:</strong> {{ $submission->phone ?? 'N/A' }}</p>
                    <p class="mb-2"><strong>Script Title:</strong> {{ $submission->script_title ?? 'N/A' }}</p>

                    <p class="mb-2"><strong>Genre:</strong> {{ $submission->genre ?? 'N/A' }}</p>
                    <p class="mb-2"><strong>Logline:</strong> {{ $submission->logline ?? 'N/A' }}</p>
                    <h5>Synopsis</h5>
                    <div class="border p-3 rounded bg-light">
                        {!! $submission->synopsis ?? 'N/A' !!}
                    </div>
                </div>

                <div class="mt-3">
                        @if($submission->script_file_path)
                            <div class="mb-4">
                                <a
                                href="{{ route('admin.script-submissions.downloadScript', $submission->id) }}"
                                class="btn btn-primary"
                            >
                                <i class="bx bx-download"></i>
                                Download Script
                            </a>
                            </div>

                            
                        @endif
                </div>

                <!-- Right: Info -->
            
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