@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card mb-3">
            <div class="card-body">
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
                {{ $inventory->name }}
                <span class="float-right">
                    <likes 
                        :likes="{{ $inventory->likes }}"
                        :liked="{{ $liked }}"
                        loggedIn="{{ Auth::check() }}"
                    />
                </span>
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
