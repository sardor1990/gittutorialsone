@extends('layouts.app')

@section('content')
    
     <div class="container">
         <a href="/posts" class="btn btn-dark "><-Go Back</a>
           
         <h1>{{ $post->title}}</h1>
         <div class="row">
           <div class="col-md-12">
           <img style="width: 100%" src="/storage/cover_image/{{ $post->cover_image }}" alt="">
           </div>
         </div>
            <p>{{ $post->body }}</p>
            <hr>
           <small> Written on:{{ $post->created_at }}</small>
           <hr>
           @if(!Auth::guest())
             @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{ $post->id}}/edit" class="btn btn-success">Edit</a>
                
                {!! Form::open(['route' => ['posts.destroy','post'=>$post->id],  'class' => 'pull-right', 'method' => 'POST']) !!}
                @csrf
                    @method('DELETE')
                    
                    {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
                {!! Form::close() !!}
             @endif
           @endif
     </div>
        
@endsection