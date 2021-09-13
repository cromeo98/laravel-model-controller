@extends('layout.app')
@section('title', 'detail-comics')

@section('content')

    <div class="detail-comic-container">

        <div class="container clear-fix">

            <div class="float-left details-container">
                <h2>{{$comicsSeries['title']}}</h2>

                <div class="availability-container">

                    <p>U.S. Price: ${{$comicsSeries->price}}</p>

                </div>

                <p class="description">{{$comicsSeries->description}}</p> 

            </div>

            <div class="float-right adv-container">
                <div class="advertisment">
                    <h6>Advertisment</h6>
                    <img src="{{asset('img/adv.jpg')}}" alt="advertisment">
                </div>                
            </div>
           
        </div>

    </div>

@endsection