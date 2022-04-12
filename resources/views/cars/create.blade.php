@extends('layouts.app')
@section('content')
<div class="container">
        <div class="about-banner">
            <div class="container text-center text-white   py-5">
                <h1>Add Your Cars</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Obcaecati, est.</p>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12 mt-5">
            <h3 class="text-center mb-4">Fill in the following to add a car</h3>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form class="formsave" method='post' action="{{ route('cars.store')  }}" enctype='multipart/form-data'>
                @csrf
                @include('cars.form')
                
                <div class="row justify-content-center ">
                    <div class="col-md-4">
                    <button type="submit" class="saveButton ">Save</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>


@endsection
