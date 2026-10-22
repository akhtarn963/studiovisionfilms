@extends('layouts.admin')

@section('title', 'Create Banner - Admin Panel')

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
        <!-- Add Banner -->
        <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1">Add a new Banner</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <div class="d-flex gap-4"><button type="reset" class="btn btn-label-secondary">Discard</button>
                    </div>
                    <button type="submit" class="btn btn-primary">Publish banner</button>
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-8">
                    <!-- Project Information -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Banner information</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-6">
                                <label class="form-label" for="product-name">Page Name</label>
                                <input type="text" class="form-control @error('page_name') is-invalid @enderror"
                                    id="product-name" placeholder="Page name" name="page_name"
                                    aria-label="Page name" value="{{ old('page_name') }}" />
                                @error('page_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>                            
                        </div>
                    </div>
                    <!-- /Product Information -->
                    <!-- Media -->
                    <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 card-title">Banner Image <small class="text-muted">(1920 x 1000 px)</small></h5>
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
                            name="image"
                            id="image-file"
                            class="d-none"
                            accept="image/jpeg,image/png,image/webp"
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
const form = document.querySelector('form[action="{{ route('admin.banners.store') }}"]');
const fileInput = document.getElementById("image-file");
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
            console.log("Selected banner:", file.name);
        });

        this.on("removedfile", function (file) {
            // Clear actual form input
            fileInput.value = "";
            console.log("Banner removed");
        });
    }
});

// Normal Laravel form submission
form.addEventListener("submit", function (event) {
    console.log("Submitting form");
    console.log("Banner:", fileInput.files[0]);
});
</script>

@endpush