@extends('layouts.admin')

@section('title', 'Add Gallery - Admin Panel')

@push('styles')
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/dropzone/dropzone.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/tagify/tagify.css')}}" />
<style>
    #dropzone-basic .dz-remove {
    display: block !important;
    margin-top: 10px;
    cursor: pointer;
}
#dropzone-basic .dz-remove {
    display: inline-block !important;
    margin-top: 35px;
    color: #ff3e1d;
    font-weight: 500;
    cursor: pointer;
}
</style>
@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="app-ecommerce">
        <!-- Add Cast -->
        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1">Add Gallery</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <div class="d-flex gap-4"><button type="reset" class="btn btn-label-secondary">Discard</button>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-8">
                    <!-- Project Information -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Gallery information</h5>
                        </div>
                        
                        <div class="card-body">                            
                            
                            <div class="mb-6">                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col ecommerce-select2-dropdown">
                                        <label class="form-label mb-1" for="category-org">
                                            <span>Projects</span>
                                        </label>
                                        <select id="category-org"
                                            class="select2 form-select @error('production_id') is-invalid @enderror"
                                            data-placeholder="Select Projects" name="production_id">
                                            <option value="">Select Projects</option>
                                            @foreach($productions as $production)
                                            <option value="{{ $production->id }}"
                                                {{ old('production_id') == $production->id ? 'selected' : '' }}>
                                                {{ $production->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('production_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <!-- /Product Information --> 
                     <!-- Media -->
                    <div class="card mb-6">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">BTS Images</h5>
                        </div>

                        <div class="card-body">
                            <div class="dropzone needsclick p-0" id="dropzone-basic">
                                <div class="dz-message needsclick">
                                    <p class="h4 needsclick pt-4 mb-2">
                                        Drag and drop your images here
                                    </p>

                                    <p class="h6 text-body-secondary d-block fw-normal mb-3">
                                        or
                                    </p>

                                    <span class="needsclick btn btn-sm btn-label-primary">
                                        Browse images
                                    </span>
                                </div>
                            </div>

                            {{-- Actual files submitted with Laravel form --}}
                            <input
                                type="file"
                                name="gallery[]"
                                id="gallery-file"
                                class="d-none"
                                accept="image/jpeg,image/png,image/webp"
                                multiple
                            >
                        </div>
                    </div>
                    <!-- /Media -->                   
                </div>                
            </div>
        </form>
        <!-- /Add Product -->
    </div>
</div>
<!-- / Content -->

@endsection
@push('scripts')
<script src="{{ asset('admin-template/assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{ asset('admin-template/assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{ asset('admin-template/assets/vendor/libs/select2/select2.js')}}"></script>
<!-- <script src="{{ asset('admin-template/assets/vendor/libs/dropzone/dropzone.js')}}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<script src="{{ asset('admin-template/assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
<script src="{{ asset('admin-template/assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{ asset('admin-template/assets/vendor/libs/tagify/tagify.js')}}"></script>
<script>

Dropzone.autoDiscover = false;

const galleryInput = document.getElementById('gallery-file');

const galleryDropzone = new Dropzone('#dropzone-basic', {
    url: '#',
    autoProcessQueue: false,

    clickable: true,
    previewsContainer: null,

    acceptedFiles: 'image/jpeg,image/png,image/webp',
    maxFilesize: 5,
    maxFiles: 20,

    addRemoveLinks: true,

    dictDefaultMessage: '',
    dictInvalidFileType: 'Only JPG, PNG and WebP images are allowed.',
    dictFileTooBig: 'Image is too large. Maximum size is 5 MB.',
    dictMaxFilesExceeded: 'You can upload a maximum of 20 images.',

    init: function () {

        this.on('addedfile', function (file) {
            syncGalleryFiles(this);
        });

        this.on('removedfile', function (file) {
            syncGalleryFiles(this);
        });
    }
});

function syncGalleryFiles(dropzone) {
    const dataTransfer = new DataTransfer();

    dropzone.files.forEach(function (file) {
        if (file instanceof File) {
            dataTransfer.items.add(file);
        }
    });

    galleryInput.files = dataTransfer.files;
}
</script>

@endpush