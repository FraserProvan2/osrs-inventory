@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7 mb-2">
        <div class="card">
            <div class="card-body">
                <h5>Inventories</h5>
                <form method="POST" action="{{ url('/inventories') }}">
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
                                    <a class="h5" href="{{ url('/inventories/' . $inventory->id) }}">{{ $inventory->name }}</a>
                                    <div>
                                        <a class="small text-white" href="{{ url('/user/' . $inventory->user->id) }}">by {{ $inventory->user->name }}</a>
                                    </div>
                                </div>
                                <div class="align-items-end text-right">
                                    <div class=" mt-1">
                                        <span class="d-flex justify-content-end">
                                            {{ $inventory->gpCostString()['value'] }}
                                            @if($inventory->gpCostString()['symbol'] == 'M')
                                                <span class="text-success">M</span>
                                            @else
                                                <span>{{ $inventory->gpCostString()['symbol'] }}</span>
                                            @endif

                                            <span class="text-muted small">&nbsp;gp</span>
                                        </span>
                                    </div>
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
                <h5>Trending</h5>
            </div>
        </div>
    </div>
</div>
@endsection
