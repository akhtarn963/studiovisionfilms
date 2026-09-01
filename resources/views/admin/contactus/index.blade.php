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
                    <th>name</th>
                    <th>email</th>                    
                    <th>subject</th>
                    <th>message</th>                
                    <th>actions</th>
                  </tr>
                </thead>
                <tbody>
                  @if($contactus->isEmpty())
                    <tr>
                      <td colspan="6" class="text-center">No Contac found.</td>
                    </tr>
                    @endif
    
                  @foreach($contactus as $con)
                    <tr>
                        <td>{{ $con->id }}</td>
                        <td>{{ $con->name }}</td>
                        <td>{{ $con->email }}</td>                    
                        <td>{{ $con->subject }}</td>                    
                        <td><button
                        type="button"
                        class="btn btn-primary text-nowrap"
                        data-bs-toggle="popover"
                        data-bs-offset="0,14"
                        data-bs-placement="top"
                        data-bs-html="true"
                        data-bs-content="<p>{{$con->message}}</p>"
                        title="{{ $con->subject }}"
                      >
                        Click to Read Message
                      </button></td>                    
                        <td>
                        <div class="d-flex align-items-center">
                            <form action="{{ route('admin.contact-us.destroy', $con->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bx bx-trash icon-sm"></i> Delete
                            </button>
                            </form>
                        </div>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{-- ✅ Pagination Links --}}
              <div class="d-flex justify-content-end mt-3">
                  {{ $contactus->links('pagination::bootstrap-5') }}
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