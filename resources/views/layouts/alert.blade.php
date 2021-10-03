@if ($errors->any())
<ul class="alert alert-danger alert-dismissible mb-3 py-3 list-unstyled fade show">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    <button type="button" class="close mt-1" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</ul>
@endif