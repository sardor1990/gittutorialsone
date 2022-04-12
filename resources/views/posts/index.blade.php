@extends('layouts.app')

@section('content')
    
     <div class="container">
        <h1>Posts</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="/posts/create" class="btn btn-primary">Create your Posts here</a>
        </div>
        @if(count($posts) > 0)
        <div class="card">
            @foreach($posts as $post)
                <div class="row">
                    <div class="col-md-4">
                        <img style="width: 100%" src="/storage/cover_image/{{ $post->cover_image }}" alt="">
                    </div>
                    <div class="col-md-8">
                            <h3> <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                            <small> Written on:{{ $post->created_at }}</small>
                    </div>
                </div>
                
            @endforeach
         </div>
         @else

         @endif
     </div>
        
@endsection