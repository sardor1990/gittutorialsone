@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="about-banner">
            <div class="container text-center text-white   py-5">
                <h1>Edit Your Cars</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Obcaecati, est.</p>
            </div>
        </div>
    <h2 class="text-center">Fill in the following to change your vehicle data</h2>
    <div class="row">
        <div class="col-md-12 mt-5">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form class="formsave" method='post' action="{{ route('cars.update',['car'=>$car->id]) }}">
            @method('PUT')
            @csrf
            @include('cars.form')  
            <div class="row justify-content-center">
                <div class="col-md-4">
                <button type="submit" class="saveButton">Saqlash</button>
                </div>
            </div>
            
      </form>
        </div>
    </div>
    </div>
    
   
@endsection