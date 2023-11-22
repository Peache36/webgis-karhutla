@if(Session::get('success'))
    <div class="alert alert-success alert-dismissible mb-1 mt-1">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h5><i class="icon fas fa-check"></i> Success!</h5>
        {{ Session::get('success') }}
    </div>
@endif
@if(Session::get('error'))
    <div class="alert alert-warning alert-dismissible mb-1 mt-1">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h5><i class="icon fas fa-exclamination"></i> Error!</h5>
        {{ Session::get('error') }}
    </div>
@endif