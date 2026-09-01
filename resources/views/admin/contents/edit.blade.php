@extends('layouts.admin')

@section('title', 'Edit Content - Admin Panel')

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
          
  <div class="app-ecommerce">
    <!-- Add Product -->
     <form action="{{ route('admin.contents.update', $content->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="mb-1">Edit Content</h4>
        <p class="mb-0">Manage your content effectively</p>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-4">
        <div class="d-flex gap-4"><a href="{{ route('admin.contents.index')}}"><button type="button" class="btn btn-label-secondary">Cancel</button></a></div>
        <button type="submit" class="btn btn-primary">Update content</button>
      </div>
    </div>

    <div class="row">
      <!-- First column-->
      <div class="col-12 col-lg-8">
        <!-- Product Information -->
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-tile mb-0">Content information</h5>
          </div>
          <div class="card-body">
            <div class="mb-6">
              <label class="form-label" for="title">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Page title" name="title" aria-label="Page title" value="{{ $content->title }}"/>
              @error('title')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              </div>
              <div class="mb-6">
              <label class="form-label" for="key">Key</label>
              <input type="text" class="form-control @error('key') is-invalid @enderror" id="key" placeholder="Page key" name="key" aria-label="Page key" value="{{ $content->key }}" readonly/>
              @error('key')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              </div>
            <!-- Description -->
            <div>
              <label class="mb-1">Content</label>
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
              <input type="hidden" name="content" id="content" value="{{ $content->content }}" />
            </div>
          </div>
        <!-- /Product Information -->
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
    quill.root.innerHTML = @json($content->content);
  // Update hidden input on change
  quill.on("text-change", function () {
        document.querySelector("#content").value = quill.root.innerHTML;
    });

</script>

@endpush