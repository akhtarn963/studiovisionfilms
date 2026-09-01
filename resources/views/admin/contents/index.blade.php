@extends('layouts.admin')

@section('title', 'Contact Us - Admin Panel')

@push('styles')
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{ asset('admin-template/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
@endpush

@section('content')

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
          
          <!-- Order List Table -->
          <div class="card">
          <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <h5 class="card-header">Tickets Managament</h5>
              </div>
            <div class="card-datatable table-responsive">
              <table class="datatables-order table border-top">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Key</th>
                    <th>actions</th>
                  </tr>
                </thead>
                <tbody>
                  @if($contents->isEmpty())
                    <tr>
                      <td colspan="6" class="text-center">No Content found.</td>
                    </tr>
                    @endif

                  @foreach($contents as $content)
                    <tr>
                        <td>{{ $content->id }}</td>
                        <td>{{ $content->title }}</td>
                        <td>{{ $content->key }}</td>                                       
                        <td>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('admin.contents.edit', $content->id) }}" class="btn btn-icon"><i class="icon-base bx bx-edit icon-md"></i></a>
                        </div>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{-- ✅ Pagination Links --}}
              <div class="d-flex justify-content-end mt-3">
                  {{ $contents->links('pagination::bootstrap-5') }}
              </div>
            </div>
          </div>
        
                </div>
                <!-- / Content -->


@endsection
@push('scripts')
<script src="{{ asset('admin-template/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<!-- Page JS -->
<script src="{{ asset('admin-template/assets/js/ui-popover.js')}}"></script>
@endpush