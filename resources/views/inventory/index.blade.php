@extends('layouts.app')

@section('content')
        
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <h5>Inventories</h5>
                    <form method="POST" action="{{ url('/inventories') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="search" placeholder="Zulrah">
                                    <div class="input-group-append">
                                      <input class="btn btn-success px-3" type="submit" value="Search" />
                                    </div>
                                </div>
                            </div>
                            @if(Auth::user())
                                <div class="col-md-6">               
                                    <div class="form-group d-flex justify-content-end w-100">
                                        <button type="button" class="btn btn-success px-3" data-toggle="modal"
                                            data-target="#createModal">
                                            Create New
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </form>

                    @if (count($inventories))
                    <div class="row">
                        @foreach ($inventories as $inventory)
                            <div class="col-md-6">
                                <div class="setup d-flex">
                                    <div class="flex-grow-1">
                                        <a class="h5"
                                            href="{{ url('/inventories/' . $inventory->id) }}">{{ $inventory->name }}</a>
                                        <div>
                                            <a class="small text-white"
                                                href="{{ url('/user/' . $inventory->user->id) }}">by
                                                {{ $inventory->user->name }}</a>
                                        </div>
                                    </div>
                                    <div class="align-items-end text-right">
                                        <div class=" mt-1">
                                            <span class="d-flex justify-content-end">
                                                @if ($inventory->gpCostString()['symbol'] == 'M')
                                                    <span class="text-success">
                                                        {{ $inventory->gpCostString()['value'] . $inventory->gpCostString()['symbol'] }}
                                                    </span>
                                                @else
                                                    <span>
                                                        {{ $inventory->gpCostString()['value'] . $inventory->gpCostString()['symbol'] }}
                                                    </span>
                                                @endif
                                                <span class="text-muted small">&nbsp;gp</span>
                                            </span>
                                        </div>
                                        <div class="small"><i class="fa fa-thumbs-up"></i> {{ $inventory->likes }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            
                    @else
                        <div class="text-danger">No inventories found</div>
                    @endif

                    {{ $inventories->links('inventory.includes.pagination') }}
                </div>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    @if(Auth::user())
        <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Create (Import)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{ url('inventories/store') }}">
                        <div class="modal-body">

                            <!-- CROSS Site Request Forgery Protection -->
                            @csrf

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <label>Import (JSON)<small class="text-muted"> Optional</small></label>
                                <textarea class="form-control" name="json" id="message" rows="4"
                                    placeholder="JSON paste"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" value="Create" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

@endsection
