@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card mb-3">
                <div class="p-3">
                    <a>
                        <h5 class="text-center">{{ $user->name }}</h5>
                    </a>
                    <div class="d-flex justify-content-center">
                        <small class="px-1">
                            <span class="text-muted">Inventories: </span>
                            <span>{{ $user->totalInventories }}</span>
                        </small>
                        <small class="px-1">
                            <span class="text-muted">Total Likes: </span>
                            <span>{{ $user->totalLikes }}</span>
                        </small>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Posted Inventories</div>
                <div class="card-body">
                    <span>inventory paginated, proper ui like index</span>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card mb-3">
                <div class="card-header">Liked</div>
                <div class="card-body">
                    <span>unstyled list of likes</span>
                </div>
            </div>
        </div>
    </div>
@endsection
