@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7 mb-2">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/inventories">
                    @csrf
            
                    <div class="d-flex">
                        <div class="form-group">
                            <input type="text" name="search" class="form-control form-control" placeholder="Zulrah mid" />
                        </div>
                        <div>
                            <button class="btn btn-success px-3 ml-1 text-small">Search</button>
                        </div>
                    </div>
                </form>

                @if(count($inventories))
                    @foreach ($inventories as $inventory)
                        <div class="setup">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <a class="h5" href="/inventories/{{ $inventory->id }}">{{ $inventory->name }}</a>
                                    <div class="small">by {{ $inventory->user->name }}</div>
                                </div>
                                <div class="align-items-end text-right">
                                    <div class="text-warning mt-1">200M <span>(gp)</span></div>
                                    <div class="small text-info">Posted 3 weeks ago</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-danger">No inventories found</div>
                @endif

                {{ $inventories->links('inventory.includes.pagination') }}
            </div>
        </div>
    </div>

    <div class="col-md-5 mb-2">
        <div class="card">
            <div class="card-body">
                e
            </div>
        </div>
    </div>
</div>
@endsection
