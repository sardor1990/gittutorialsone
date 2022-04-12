@extends('layouts.app')
@section('content')
<div class="container">
<h2 class="text-center">Bu Moshinalar haqida ma'lumot</h2>
    <div class="row">
        <div class="col-md-6">
        <table class="table table-bordered">
                <tr>
                    <td>Moshina nomi</td>
                    <td>{{ $car->name}}</td>
                </tr>
                <tr>
                    <td>Dectciption</td>
                    <td>{{ $car->description }}</td>
                </tr>
                <tr>
                    <td>Moshina haqida batafsil</td>
                    <td>{{ $car->text }}</td>
                </tr>
                <tr>
                    <td>Bazaga qo'shilgan vaqti</td>
                    <td>{{$car->created_at }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
    
   
@endsection