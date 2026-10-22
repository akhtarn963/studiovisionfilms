@extends('layouts.admin')

@section('title', 'Create Project - Admin Panel')

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
        <!-- Add Project -->
        <form action="{{ route('admin.productions.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1">Add a new Project</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <div class="d-flex gap-4"><button type="reset" class="btn btn-label-secondary">Discard</button>
                    </div>
                    <button type="submit" class="btn btn-primary">Publish project</button>
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-8">
                    <!-- Project Information -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Project information</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-6">
                                <label class="form-label" for="product-name">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="product-name" placeholder="Project title" name="title"
                                    aria-label="Project title" value="{{ old('title') }}" />
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row mb-6">
                                <div class="col"><label class="form-label" for="cast">Cast</label> 
                                <textarea
                                         class="form-control @error('cast') is-invalid @enderror" id="cast" placeholder="Cast"
                                        name="cast" aria-label="Cast">{{ old('cast') }}</textarea>
                                </div>                                
                            </div>
                            
                            <div class="row mb-6">
                                <div class="col"><label class="form-label" for="short_description">Short Description</label> 
                                <textarea
                                         class="form-control @error('short_description') is-invalid @enderror" id="short_description" placeholder="Short description"
                                        name="short_description" aria-label="Short description">{{ old('short_description') }}</textarea>
                                </div>                                
                            </div>
                            <!-- Description -->
                            <div>
                                <label class="mb-1">Description</label>
                                <div class="form-control p-0">
                                    <div class="comment-toolbar border-0 border-bottom">
                                        <div class="d-flex justify-content-start">
                                            <span class="ql-formats me-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-list" value="ordered"></button>
                                                <button class="ql-list" value="bullet"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comment-editor border-0 pb-6" id="category-description"></div>
                                </div>
                                <input type="hidden" name="description" id="project-description">
                            </div>
                        </div>
                    </div>
                    <!-- /Product Information -->
                    <!-- Media -->
                    <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 card-title">Project Poster</h5>
                    </div>
                    <div class="card-body">
                        <div class="dropzone needsclick p-0" id="dropzone-basic">
                            <div class="dz-message needsclick">
                                <p class="h4 needsclick pt-4 mb-2">
                                    Drag and drop your image here
                                </p>
                                <p class="h6 text-body-secondary d-block fw-normal mb-3">
                                    or
                                </p>
                                <span class="needsclick btn btn-sm btn-label-primary">
                                    Browse image
                                </span>
                            </div>
                        </div>
                        <!-- Actual file input submitted with Laravel form -->
                        <input
                            type="file"
                            name="poster"
                            id="poster-file"
                            class="d-none"
                            accept="image/jpeg,image/png,image/webp"
                        >
                    </div>
                </div>
                    <!-- /Media -->
                </div>
                <!-- Second column -->
                <div class="col-12 col-lg-4">
                    <!-- Pricing Card -->
                    <div class="card mb-6">
                        <div class="card-body">
                            <!-- Base Price -->
                            <div class="mb-6">
                                <label class="form-label" for="product-price">YouTube Video URL</label>
                                <input type="text" class="form-control @error('youtube_url') is-invalid @enderror"
                                    id="product-price" placeholder="YouTube Video URL" name="youtube_url"
                                    aria-label="Product price" value="{{ old('youtube_url')}}" />
                                @error('youtube_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- ispublished switch -->
                            <div class="d-flex justify-content-between align-items-center border-top pt-2">
                                <span class="mb-0">Is Published?</span>
                                <div class="w-25 d-flex justify-content-end">
                                    <div class="form-check form-switch me-n3">
                                        <input type="checkbox" value="1" name="is_published" class="form-check-input" checked />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Pricing Card -->
                     <!-- Director Card -->
                    <div class="card mb-6">
                        <div class="card-body">
                            <!-- director -->
                            <div class="mb-6">                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col ecommerce-select2-dropdown">
                                        <label class="form-label mb-1" for="director">
                                            <span>Directed By</span>
                                        </label>
                                        <input type="text" class="form-control @error('director') is-invalid @enderror"
                                            id="director" placeholder="Director's Name" name="director"
                                            aria-label="Director's Name" value="{{ old('director') }}" />
                                        @error('director')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>                            
                            <!-- writer -->
                            <div class="mb-6">                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col ecommerce-select2-dropdown">
                                        <label class="form-label mb-1" for="writer">
                                            <span>Written By</span>
                                        </label>
                                        <input type="text" class="form-control @error('writer') is-invalid @enderror"
                                            id="writer" placeholder="Writer's Name" name="writer"
                                            aria-label="Writer's Name" value="{{ old('writer') }}" />
                                        @error('writer')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <!-- end director card -->
                    <!-- Genre and Medium Card -->
                    <div class="card mb-6">
                        <div class="card-body">
                            <!-- Genre -->
                            <div class="mb-6">                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col ecommerce-select2-dropdown">
                                        <label class="form-label mb-1" for="category-org">
                                            <span>Genre</span>
                                        </label>
                                        <select id="category-org"
                                            class="select2 form-select @error('genre') is-invalid @enderror"
                                            data-placeholder="Select Genre" name="genre">
                                            <option value="">Select Genre</option>
                                            @foreach($genres as $genre)
                                            <option value="{{ $genre }}"
                                                {{ old('genre') == $genre ? 'selected' : '' }}>
                                                {{ $genre }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('genre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>                            
                            <!-- Medium -->
                            <div class="mb-6">                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col ecommerce-select2-dropdown">
                                        <label class="form-label mb-1" for="medium">
                                            <span>Medium</span>
                                        </label>
                                        <select id="category-org"
                                            class="select2 form-select @error('medium') is-invalid @enderror"
                                            data-placeholder="Select medium" name="medium">
                                            <option value="">Select Medium</option>
                                            @foreach($mediums as $medium)
                                            <option value="{{ $medium }}"
                                                {{ old('medium') == $medium ? 'selected' : '' }}>
                                                {{ $medium }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('medium')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- end genre and medium card -->
                         <!-- status and date Card -->
                    <div class="card mb-6">
                        <div class="card-body">
                            <!-- status -->
                            <div class="mb-6">                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col ecommerce-select2-dropdown">
                                        <label class="form-label mb-1" for="category-org">
                                            <span>Status</span>
                                        </label>
                                        <select id="category-org"
                                            class="select2 form-select @error('status') is-invalid @enderror"
                                            data-placeholder="Select Status" name="status">
                                            <option value="">Select Status</option>
                                            @foreach($statuses as $status)
                                                <option value="{{ $status }}" {{ old('status') == $status ? 'selected' : '' }}>{{ $status }}</option>
                                            @endforeach
                                        </select>
                                        @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>                            
                            <!-- date -->
                            <div class="mb-6">                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col ecommerce-select2-dropdown">
                                        <label class="form-label mb-1" for="medium">
                                            <span>Release Date</span>
                                        </label>
                                        <input type="date" id="release_date" class="form-control @error('release_date') is-invalid @enderror" name="release_date" value="{{ old('release_date') }}">
                                        @error('release_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>                            
                            
                        </div>
                    </div>
                        <!-- end status and date card -->
                </div>
                <!-- /Second column -->
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
let commentEditor = document.querySelector(".comment-editor");
let quill;

if (commentEditor) {
    quill = new Quill(commentEditor, {
        modules: {
            toolbar: ".comment-toolbar"
        },
        placeholder: "Write Description...",
        theme: "snow"
    });
}
// Update hidden input on change
quill.on("text-change", function() {
    document.querySelector("#project-description").value = quill.root.innerHTML;
});

Dropzone.autoDiscover = false;
const form = document.querySelector('form[action="{{ route('admin.productions.store') }}"]');
const fileInput = document.getElementById("poster-file");
const myDropzone = new Dropzone("#dropzone-basic", {
    url: "#",
    autoProcessQueue: false,
    maxFiles: 1,
    acceptedFiles: "image/jpeg,image/png,image/webp",
    addRemoveLinks: true,
    previewsContainer: "#dropzone-basic",
    clickable: true,
    init: function () {
        this.on("addedfile", function (file) {
            // Remove previous file if another one is selected
            if (this.files.length > 1) {
                this.removeFile(this.files[0]);
            }
            // Put selected Dropzone file into actual form input
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);
            fileInput.files = dataTransfer.files;
            console.log("Selected poster:", file.name);
        });

        this.on("removedfile", function (file) {
            // Clear actual form input
            fileInput.value = "";
            console.log("Poster removed");
        });
    }
});

// Normal Laravel form submission
form.addEventListener("submit", function (event) {
    console.log("Submitting form");
    console.log("Poster:", fileInput.files[0]);
});
</script>

@endpush