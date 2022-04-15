@extends('layouts.app')

@section('content')

      <div id="home-icons" class="my-5 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="box">
                            <i class="bi bi-house-door-fill"></i>   
                            <h3>Our main office</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, laborum!lorem</p>
                        </div>
                            
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <i class="bi bi-house-door-fill"></i>
                            <h3>Contact us by phone</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, laborum!</p>
                        </div>
                    
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <i class="bi bi-house-door-fill"></i>
                            <h3>Join instagramm</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, laborum!</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>

        <div id="bg-box" class=" text-center text-white">
            <div class="dark-overlay py-5">
                <div class="container">
                    <h1>Are you ready to get Strarted?</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde voluptate libero maiores quidem
                        dolores obcaecati!</p>
                </div>
            </div>
        </div>

        <div id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="sardor">
                            <h3>About us</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipis
                                cing elit. Voluptate incidunt unde alias iure a
                                met doloremque porro fugit ullam dolore non dolor sit amet
                                consectetur adipis
                                cing elit. Voluptate incidunt unde alias iure a
                                met doloremque porro fugit ullam dolore non!</p>
                            <a id="button" class="btn btn-outline-dark" href="{{ route('cars.index') }}">{{ __('Learn more') }}</a>
                        </div>
                        </div>

                    <div class="col-md-6">
                        <img src="../img/handshake-opt.jpg" class="img-fluid mt-3" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="newsletter" class="my-3 bg-dark py-4 text-center text-white">
            <div class="container">
                <h1>Sign Up to Our newsletter</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ipsum libero voluptate eum soluta minima.</p>

                <form class="row g-3 justify-content-center">
                   
                    <div class="col-auto">
                    <a href="/posts/create" class="btn btn-primary"> Create Post</a>    
                    </div>
                </form>
            </div>
        </div>


@endsection
