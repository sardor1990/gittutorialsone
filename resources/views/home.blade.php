@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary"> Create Post</a>
                    <h3>Your Blog Posts</h3>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<div id="home-icons" class="my-5 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <i class="bi bi-building"></i>
                        <h3>Our main office</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, laborum!</p>

                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-telephone-fill"></i>
                        <h3>Contact us by phone</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, laborum!</p>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-instagram"></i>
                        <h3>Join instagramm</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, laborum!</p>
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
                        
                        <label for="staticEmail2" class="visually-hidden">Email</label>
                        <input type="text" readonly class="form-control" id="staticEmail2" value="email@example.com">
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword2" class="visually-hidden">Password</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary ">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>


@endsection
