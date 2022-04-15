@extends('layouts.app')

@section('content')
<nav class="w3-sidebar w3-bar-block w3-card w3 w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About Us</a>
  <a href="{{ route('cars.create')}}" onclick="w3_close()" class="w3-bar-item w3-button">Add your Cars</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About Cars</a>
</nav>

<!-- Top menu -->
<div class="w3">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰Menu</div>
    <div class="w3-right w3-padding-16">Mail</div>
    <div class="w3-center w3-padding-16">Our Cars</div>
  </div>
</div>
  
<div class="w3-container w3-padding-32 w3-center">  
    <h3>About Us, The Leasing Company</h3><br>
    <img src="../img/388206706.jpg  " alt="Me" class="w3-image" style="display:block;margin:auto" width="1200" height="533">
    <div class="w3-padding-32">
      <h4><b>About Our Company</b></h4>
      <h6><i>With Passion For Real, Good Food</i></h6>
      <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <hr>
  <div class="about-content">
        <div class="container">
            <div class="row py-2 bg-dark text-white mt-4 mb-4" style="border-radius:20px;">
                <div class="col-md-6 ">
                    <h3>What We Do?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                        it. Facilis, exercitationem molestias. Omnis accu
                        samus non,
                        voluptate explicabo eos tempore neque ea?</p>
                    <p>Lorem ipsum dolor sit  facere placeat cupiditate? Similique dolore, sapiente, qui cumque expedita
                        cum quisquam numquam, explicabo consequuntur exercitationem dicta! Eaque.</p>

                </div>
                <div class="col-md-6 mt-4">
                    <p>Lorem ipsum dolor sit  facere placeat cupiditate? Similique dolore, sapiente, qui cumque expedita
                        cum quisquam numquam, explicabo consequuntur exercitationem dicta! Eaque. facere placeat cupiditate? Similique dolore, sapiente, qui cumque expedita
                        cum quisquam numquam, explicabo consequuntur exercitationem dicta! Eaque</p>

                </div>
            </div>
        </div>
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