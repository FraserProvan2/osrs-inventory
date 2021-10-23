@extends('layouts.app')

@section('content')
<div>
    {{-- Jumbotron --}}
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark mb-3">
        <div class="col-md-6 px-0">
            <h1 class="display-5 font-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                efficiently about what's most interesting in this post's contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 mb-3">
            <div class="card h-100">
                <div class="card-header">About</div>
                <div class="card-body">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
        </div>
    
        <div class="col-md-6 mb-3">
            <div class="card h-100">
                <div class="card-header">Importing/Exporting</div>
                <div class="card-body">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection