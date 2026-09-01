@extends('layouts.admin')

@section('title', 'Create Product - Admin Panel')


@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
          
  <div class="app-ecommerce">
        <div class="row">
      <!-- First column-->
      <div class="col-12 col-lg-10">
      <div class="card mb-6">
        <div class="card-header border-bottom">
          <h5 class="card-header">Settings</h5>
        </div>
        <div class="card-body">
        <div class="mt-6 mb-6">
        <form action="{{ route('admin.settings.store') }}" method="POST">
    @csrf

    <div id="settings-repeater">
    @foreach($settings as $setting)
    <div class="row mb-2 setting-item">
        <input type="hidden" name="settings[{{ $loop->index }}][id]" value="{{ $setting->id }}">
        
        <div class="col-md-3">
            <input type="text" name="settings[{{ $loop->index }}][label]" 
                class="form-control setting-label @error("settings.$loop->index.label") is-invalid @enderror"
                placeholder="Enter Label" value="{{ old("settings.$loop->index.label", $setting->label) }}">

            @error("settings.$loop->index.label")
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-3">
            <input type="text" name="settings[{{ $loop->index }}][key]" 
                class="form-control setting-key @error("settings.$loop->index.key") is-invalid @enderror"
                placeholder="Enter Key" value="{{ old("settings.$loop->index.key", $setting->key) }}">

            @error("settings.$loop->index.key")
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <input type="text" name="settings[{{ $loop->index }}][value]" 
                class="form-control @error("settings.$loop->index.value") is-invalid @enderror"
                placeholder="Enter Value" value="{{ old("settings.$loop->index.value", $setting->value) }}">

            @error("settings.$loop->index.value")
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-danger remove-setting">Remove</button>
        </div>
    </div>
@endforeach
</div>

    <div class="d-flex align-content-center flex-wrap gap-8 mt-6">
        <div class="d-flex gap-6">
            <button type="button" class="btn btn-primary" id="add-setting">
                <i class="icon-base bx bx-plus icon-sm me-2"></i> Add New Setting
            </button>
        </div>

        <button type="submit" class="btn btn-success">Save Settings</button>
    </div>
</form>

    </div>
        </div>
    <!-- /Add Product -->
  </div>
        </div>
        <!-- / Content -->

@endsection
@push('scripts')
<script>
    let settingIndex = {{ $settings->count() }};

    // Add new setting row
    document.getElementById('add-setting').addEventListener('click', function () {
        let container = document.getElementById('settings-repeater');

        let row = `
            <div class="row mb-2 setting-item">
                <div class="col-md-3">
                    <input type="text" name="settings[${settingIndex}][label]" 
                           class="form-control setting-label" placeholder="Enter Label">
                </div>
                <div class="col-md-3">
                    <input type="text" name="settings[${settingIndex}][key]" 
                           class="form-control setting-key" placeholder="Enter Key">
                </div>
                <div class="col-md-4">
                    <input type="text" name="settings[${settingIndex}][value]" 
                           class="form-control" placeholder="Enter Value">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger remove-setting">Remove</button>
                </div>
            </div>
        `;

        container.insertAdjacentHTML('beforeend', row);
        settingIndex++;
    });

    // Remove setting row
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-setting')) {
            e.target.closest('.setting-item').remove();
        }
    });

    // Auto-generate key from label
    document.addEventListener("input", function (e) {
        if (e.target.classList.contains("setting-label")) {
            let labelInput = e.target;
            let keyInput   = labelInput.closest(".setting-item").querySelector(".setting-key");

            if (keyInput) {
                let value = labelInput.value.toLowerCase()
                    .replace(/[^a-z0-9]+/g, "_")   // replace non-alphanumeric with _
                    .replace(/^_+|_+$/g, "")       // trim underscores at start/end
                    .replace(/_+/g, "_");          // collapse multiple _

                keyInput.value = value;
            }
        }
    });
</script>
@endpush
