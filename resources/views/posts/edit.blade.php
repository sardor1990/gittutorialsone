@extends('layouts.app')

@section('content')
    
     <div class="container">
     <h1>Edit Posts</h1>
        {!! Form::open(['route' => ['posts.update','post'=>$post->id],'enctype'=>'multipart/form-data']) !!}
        @method('PUT')
        <div class="form-group">
                {{form::label('title', 'Title')}}
                {{ form::text('title', $post->title,['class' =>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                {{form::label('body', 'Body')}}
                {{ form::textarea('body', $post->body,['class' =>'form-control','placeholder'=>'Write Body'])}}
            </div>
            <div class="form-group">
                {{ Form::file('cover_image')}}
            </div>
            {{ Form::hidden('method','PUT') }}
            {{ form::submit('Submit',['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
       
     </div>
        
@endsection