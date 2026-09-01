@extends('layouts.admin')

@section('title', 'Gallery Management')

@push('styles')
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/select2/select2.css')}}" />
@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

  <!-- Product List Table -->
  <div class="card">
  <div class="card-header border-bottom d-flex justify-content-between align-items-center">
        <h5 class="card-header">Gallery Management</h5>
        <button class="add-new btn btn-primary ms-auto" type="button" onclick="window.location.href='{{ route('admin.galleries.create') }}'">
          <i class="icon-base bx bx-plus icon-sm me-0 me-sm-2"></i>
          <span class="d-none d-sm-inline-block">Add Gallery</span>
        </button>
      </div>
    <div class="card-datatable">
      <table class="datatables-products1 table">
        <thead class="border-top">
          <tr>
            <th width="10%">ID</th>
            <th width="10%">Project</th>
            <th width="20%" class="text-center">Image</th>
            <th width="10%">actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($galleries as $gallery)
          <tr>
            <td>{{ $gallery->id }}</td>
            <td>
              <div class="d-flex justify-content-start align-items-center product-name">
                <div class="d-flex flex-column">
                  <h6 class="text-nowrap mb-0">{{ $gallery->production->title ?? 'N/A' }}</h6>
                </div>
              </div>
            </td>
            <td class="text-center">
              <img src="{{ asset('storage/'.$gallery->image) }}" alt="Gallery-{{ $gallery->id }}" class="rounded" style="width: 200px; height: auto;">
            </td>
            <td>
              <div class="d-inline-block text-nowrap">
                <!-- <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="btn btn-icon"><i class="icon-base bx bx-edit icon-md"></i></a> -->
                <button class="btn btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="icon-base bx bx-dots-vertical-rounded icon-md"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end m-0">
                  <!-- <a href="{{ route('admin.galleries.show', $gallery->id) }}" class="dropdown-item">View</a> -->
                  <form method="POST" action="{{ route('admin.galleries.destroy', $gallery->id) }}" onsubmit="return confirm('Are you sure you want to delete this gallery?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item">Delete</button>
                  </form> 
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{-- ✅ Pagination Links --}}
              <div class="d-flex justify-content-end mt-3">
                  {{ $galleries->links('pagination::bootstrap-5') }}
              </div>
    </div>
  </div>

        </div>
        <!-- / Content -->
@endsection
@push('scripts')
<script src="{{ asset('admin-template/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{ asset('admin-template/assets/vendor/libs/select2/select2.js')}}"></script>
@endpush