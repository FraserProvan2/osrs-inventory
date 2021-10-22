@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card mb-3">
                <div class="pb-3 pt-4">
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
                <div class="card-body p-3 mt-1">
                    @if (count($inventories))
                    <div class="row">
                        @foreach ($inventories as $inventory)
                            <div class="col-md-12 mb-1">
                                <div class="setup d-flex h-100">
                                    <div class="flex-grow-1">
                                        <a class="h6"
                                            href="{{ url('/inventories/' . $inventory->id) }}">{{ $inventory->name }}</a>
                                        <div>
                                            <span class="small text-white">by
                                                {{ $inventory->user->name }}</span>
                                        </div>
                                    </div>
                                    <div class="align-items-end m-auto text-right w-25">
                                        <div class="text-muted"><i class="fa fa fa-thumbs-up"></i> {{ $inventory->likes }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            
                    @else
                        <div class="text-danger text-center p-2">No inventories posted</div>
                    @endif

                    {{ $inventories->links('inventory.includes.pagination') }}
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card mb-3">
                <div class="card-header">Liked</div>
                <div class="card-body">
                    @if (count($likes))
                        <ul class="list-unstyled">
                            @foreach ($likes as $like)
                                <li>
                                    <a href="{{ url('inventories/' . $like->id) }}">
                                        {{ $like->name }}
                                    </a>
                                    <small class="text-muted">
                                        by {{ $like->user->name }}
                                    </small>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div class="text-danger text-center p-2">Nothing liked yet...</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
