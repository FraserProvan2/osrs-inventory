@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex w-100 p-1">
                    <div class="d-flex flex-grow-1">
                        <h4>{{ $inventory->name }}</h4>
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
                    :setup="{{ $inventory->data }}" 
                    :edit="{{ json_encode($is_edit) }}" 
                />
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card mb-3">
            <div class="card-header">
                profile widget here
            </div>
            <div class="card-body">
                <small>by ssj krun date etc</small>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Comments</div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
</div>
@endsection
