@extends('layouts.admin')

@section('title', 'Auditions')

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
        <h5 class="card-header">Auditions Management</h5>
        
      </div>
    <div class="card-datatable">
      <table class="datatables-products1 table">
        <thead class="border-top">
          <tr>
            <th width="10%">ID</th>
            <th width="10%">Name</th>
            <th width="10%">Email</th>
            <th width="10%">Phone</th>
            <th width="10%">Picture</th>
            <th width="10%">Video</th>
            <th width="10%">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($auditions as $audition)
          <tr>
            <td>{{ $audition->id }}</td>
            <td>
              <div class="d-flex justify-content-start align-items-center product-name">
                <div class="d-flex flex-column">
                  <h6 class="text-nowrap mb-0">{{ $audition->name }}</h6>
                </div>
              </div>
            </td>
            <td>{{ $audition->email ?? 'N/A' }}</td>
            <td>{{ $audition->phone ?? 'N/A' }}</td>
            <td class="text-center">
              <img src="{{ asset('storage/' . $audition->profile_picture) }}" alt="Audition-{{ $audition->id }}" class="rounded" style="width: 200px; height: auto;">
            </td>
            <td>
              <a href="{{ route('admin.auditions.video', $audition->id) }}" class="btn btn-sm btn-primary" target="_blank">Click to View</a>
              <!-- <a href="{{ route('admin.auditions.downloadVideo', $audition->id) }}" class="btn btn-sm btn-success" target="_blank">Download Video</a> -->
            </td> 
            <td>
              <div class="d-inline-block text-nowrap">
                <button class="btn btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="icon-base bx bx-dots-vertical-rounded icon-md"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="{{ route('admin.auditions.show', $audition->id) }}" class="dropdown-item">View Details</a>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{-- ✅ Pagination Links --}}
              <div class="d-flex justify-content-end mt-3">
                  {{ $auditions->links('pagination::bootstrap-5') }}
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