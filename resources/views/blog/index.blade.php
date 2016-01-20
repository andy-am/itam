@extends('layout.master')

@section('content')

    <div class="col-md-9">
        <div class="blogHeader"><center><h1>Blog</h1></center></div>
        @foreach($blogs as $blog)
            <div class="col-md-12">
                {{ $blog->title }}
            </div>
        @endforeach
    </div>
    <div class="col-md-3"><center><h1>Blog Menu</h1></center></div>
@endsection