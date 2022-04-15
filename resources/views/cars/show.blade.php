@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{ route('cars.index') }}" class="btn btn-dark "><-Go Back</a>
    <div class="row">
        <div class="col-md-10">
                    <div class="w3-center">
                        
                        <h2> {{ $car->name}} </h2>
                        <h3> <span class="w3-opacity"></span>{{ $car->description }}</h3>
                    </div>

                <div class="w3-justify">
                    <img src="../img/download.jpg" alt="Girl Hat" style="width:100%" class="w3-padding-16">
                </div>
                <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
                <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo2')"><b>Replies  </b> <span class="w3-tag w3-white">2</span></button></p>
                <h3 class="text-center"> {{ $car->name}} </h3>
                <h5 class="text-center"> <span class="w3-opacity"></span>{{ $car->description }}</h5>
                <p class="w3-clear">{{$car->text}}</p>
                <div class="buttonedit">
                    <a  class="btn  " href="{{route('cars.edit',['car' => $car->id])}}" role="button">EDIT</a>
                    <form action="{{route('cars.destroy',['car' => $car->id])}}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn ">Delete</button>
                    </form>
                </div>
        </div>
    </div>
</div>
<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}
</script>

@endsection