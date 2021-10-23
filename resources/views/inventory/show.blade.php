@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex w-100 p-1">
                    <div class="d-flex flex-grow-1">
                        <name 
                            :id="{{ $inventory->id }}" 
                            name="{{ $inventory->name }}"
                            :edit="{{ json_encode($is_edit) }}"
                        />
                    </div>
                    <div>
                        <likes 
                            :id="{{ $inventory->id }}"
                            :likes="{{ $inventory->likes }}"
                            :liked="{{ $liked }}"
                            loggedIn="{{ Auth::check() }}"
                        />
                    </div>
                </div>
                <inventory-builder 
                    :id="{{ $inventory->id }}"
                    :setup="{{ $inventory->data }}" 
                    :edit="{{ json_encode($is_edit) }}" 
                />
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card mb-3">
            <div class="card-header">Posted By</div>
            <div class="pb-3 pt-4">
                <a href="{{ url('users/' . $inventory->user->url) }}">
                    <h5 class="text-center mb-1">{{ $inventory->user->name }}</h5>
                </a>
                <div class="d-flex justify-content-center">
                    <small class="px-1">
                        <span class="text-muted">Inventories: </span>
                        <span>{{ $inventory->user->totalInventories }}</span>
                    </small>
                    <small class="px-1">
                        <span class="text-muted">Total Likes: </span>
                        <span>{{ $inventory->user->totalLikes }}</span>
                    </small>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">Comments</div>
            <div>
                @comments([
                    'model' => $inventory,
                    'perPage' => 5
                ])
            </div>
        </div>
    </div>
</div>
@endsection
