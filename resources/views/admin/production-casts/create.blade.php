@extends('layouts.admin')

@section('title', 'Add Cast - Admin Panel')

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
        <form action="{{ route('admin.production-casts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1">Add a new Cast Member</h4>
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
                            <h5 class="card-tile mb-0">Cast information</h5>
                        </div>
                        
                        <div class="card-body">                            
                            <div class="mb-6">
                                <label class="form-label" for="product-name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="product-name" placeholder="Cast member name" name="name"
                                    aria-label="Cast member name" value="{{ old('name') }}" />
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

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

                            <div class="mb-6">
                                <label class="form-label" for="product-name">Character Name</label>
                                <input type="text" class="form-control @error('character_name') is-invalid @enderror"
                                    id="product-name" placeholder="Character name" name="character_name"
                                    aria-label="Character name" value="{{ old('character_name') }}" />
                                @error('character_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="row mb-6">
                                <div class="col"><label class="form-label" for="short_description">Bio</label> 
                                <textarea
                                         class="form-control @error('bio') is-invalid @enderror" id="short_description" placeholder="Bio"
                                        name="bio" aria-label="Bio">{{ old('bio') }}</textarea>
                                </div>                                
                            </div>
                            
                            <!-- sort Order -->
                            <div class="mb-6">
                                <label class="form-label" for="product-price">Sort Order</label>
                                <input type="number" class="form-control @error('sort_order') is-invalid @enderror"
                                    id="product-price" placeholder="Sort Order" name="sort_order"
                                    aria-label="Product price" value="{{ old('sort_order')}}" />
                                @error('sort_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- /Product Information -->                    
                </div>
                <!-- Second column -->
                <div class="col-12 col-lg-4">
                    <!-- Right Card -->                    
                    <!-- Media -->
                    <div class="card mb-6">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">Character Image</h5>
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
                                id="cast-file"
                                class="d-none"
                                accept="image/jpeg,image/png,image/webp"
                            >
                        </div>
                    </div>
                    <!-- /Media -->
                    <!-- /Right Card -->
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

Dropzone.autoDiscover = false;
const form = document.querySelector('form[action="{{ route('admin.productions.store') }}"]');
const fileInput = document.getElementById("cast-file");
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
            console.log("Selected cast image:", file.name);
        });

        this.on("removedfile", function (file) {
            // Clear actual form input
            fileInput.value = "";
            console.log("Cast image removed");
        });
    }
});

// Normal Laravel form submission
form.addEventListener("submit", function (event) {
    console.log("Submitting form");
    console.log("Cast image:", fileInput.files[0]);
});
</script>

@endpush