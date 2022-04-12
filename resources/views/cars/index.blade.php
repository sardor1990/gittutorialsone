    @extends('layouts.app')
    @section('content')


    <div class="about-banner">
        <div class="container text-center text-white   py-5">
            <h1>About Our Cars</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Obcaecati, est.</p>
        </div>
    </div>

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

    <div class="about-icons">
        <div class="container  text-center">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                 <a href="{{ route('cars.create')}}"><button class="btn btn-success mb-2" type="button">+Moshina qo'shish</button></a>
            </div>
        <div class="row">
                @foreach($cars as $car)
                <div class="col-md-4">
                    <div class="card p-4">
                    <img style="width: 100%" src="/storage/cover_image/{{ $car->cover_image }}" alt="">
                            <h5 class="card-title">{{ $car->name}}</h5>
                            <p class="card-text">{{$car->description}}</p>
                            <p class="card-text"><small class="text-muted">{{$car->text}}</small></p>
                        <div class="icons">
                            <div class="row">
                                <div class="col-6">
                                    <p><i class="bi bi-people-fill"></i>Gazoline</p>
                                </div>
                                <div class="col-6">
                                    <p><i class="bi bi-people-fill"></i>5</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p><i class="bi bi-people-fill"></i> A/C</p>
                                </div>
                                <div class="col-6">
                                    <p><i class="bi bi-people-fill"></i>AT</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="buttoncard">
                                    <a  class="btn text-white" href="{{route('cars.show',['car' => $car->id])}}" role="button">READ MORE</a>
                                </div>
                                <div class="buttonedit">

                                    <a  class="btn  " href="{{route('cars.edit',['car' => $car->id])}}" role="button">EDIT</a>

                                    <form action="{{route('cars.destroy',['car' => $car->id])}}" method='post'>
                                        @csrf
                                        @method('DELETE')
                                        <button type='submit' class="btn d-inline">Delete</button>
                                    </form>
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
    <div class="container">
        <div class="row">
            <div class="col">
              {{ $cars->links() }}
            </div>
        </div>

    </div>

   @endsection
