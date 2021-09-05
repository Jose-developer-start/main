<div class="container">
    @if (session('error') || session('success'))
    <div class="alert {{ session('error') ? 'alert-warning':'alert-success' }} alert-dismissible fade show" role="alert">
        <strong>{{ session('error') ?? session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>