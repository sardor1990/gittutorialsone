    @extends('layouts.app')
    @section('content')

        <!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3 w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="/about" onclick="w3_close()" class="w3-bar-item w3-button">About Us</a>
  <a href="{{ route('cars.create')}}" onclick="w3_close()" class="w3-bar-item w3-button">Add your Cars</a>
  <a href="{{ route('cars.index') }}" onclick="w3_close()" class="w3-bar-item w3-button">About Cars</a>
</nav>

<!-- Top menu -->
<div class="w3">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰Menu</div>
    <div class="w3-right w3-padding-16">Mail</div>
    <div class="w3-center w3-padding-16">Our Cars</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main " style="max-width:1200px;margin-top:100px">
<div class="about-banner">
        <div class="container text-center text-white   py-5">
            <h1>About Our Cars</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Obcaecati, est.</p>
        </div>
    </div>

  <!-- First Photo Grid-->

  <div class="about-icons">
        <div class="container  text-center">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                 <a href="{{ route('cars.create')}}"><button class="btn btn-success mb-2" type="button">+Moshina qo'shish</button></a>
            </div>
          <div class="row">
                @foreach($cars as $car)
                <div class="col-md-4 mb-4">
                    <div class="card p-4">
                    <img style="width: 100%" src="../img/download.jpg" alt="">
                            <h5 class="card-title">{{ $car->name}}</h5>
                            <p class="card-text">{{$car->description}}</p>

                        <div class="row">
                            <div class="col">
                                <div class="buttoncard">
                                    <a  class="btn text-white" href="{{route('cars.show',['car' => $car->id])}}" role="button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

  <!-- Pagination -->
  <div class="container">
        <div class="row">
            <div class="col">   
              {{ $cars->links() }}
            </div>
        </div>
    </div>
<!-- End page content -->
</div>
<script>
        // Script to open and close sidebar
        function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        }
        function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        }
</script>
   @endsection
