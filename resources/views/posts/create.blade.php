@extends('layouts.app')

@section('content')
    
     <div class="container">
     <h1>Create Posts</h1>
        {!! Form::open(['route' => 'posts.store', 'enctype'=>'multipart/form-data']) !!}
        @method('POST')
        <div class="form-group">
                {{form::label('title', 'Title')}}
                {{ form::text('title', '',['class' =>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                {{form::label('body', 'Body')}}
                {{ form::textarea('body', '',['class' =>'form-control','placeholder'=>'Write Body'])}}
            </div>
            <div class="form-group">
                {{ Form::file('cover_image')}}
            </div>
            {{ form::submit('Submit',['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
       
     </div>
        
@endsection