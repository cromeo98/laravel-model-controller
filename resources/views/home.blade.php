@extends('layout.app')
@section('title', 'homepage')

@section('content')

    <div class="jumbo">
    </div>



    <div class="container">

        <div class="card-container">

            @foreach($comicsSeries as $key => $comicsSerie)
                <div class="card">
                    <img src="{{$comicsSerie['thumb']}}" alt="{{$comicsSerie['title']}}">
                    <h6>
                        <a href="{{route('detail-comic', ['id' => $key])}}">
                            {{$comicsSerie['series']}}
                        </a>
                    </h6>

                </div>
            @endforeach

        </div>

    </div>




@endsection