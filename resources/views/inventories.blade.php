@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Inventory Viewer</div>
            <div class="card-body">
                <inventory-builder />
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Search Inventories</div>
            <div class="card-body">
                List of Inventories
            </div>
        </div>
    </div>
</div>
@endsection
