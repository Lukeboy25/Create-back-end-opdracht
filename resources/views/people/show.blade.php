@extends('layout')
@section('content')
    <div class="container-fluid mb-sm-2" style="padding-top:10px">
        <h1>People</h1>
    </div>
    @if(count($peoples) > 0) 
        @foreach ($peoples as $people)
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="card mb-sm-2 card-zoom">
                    <div class="card-body pl-5">
                        <div class="col-xs-4">
                            <h4 class="card-title">{{ $people->name }}</h4>
                            <p class="card-text">Height : {{ $people->height }}</p>
                            <p class="card-text">Mass : {{ $people->mass }}</p>
                            <p class="card-text">Hair color : {{ $people->hair_color }}</p>
                            <p class="card-text">Skin color : {{ $people->skin_color }}</p>
                            <p class="card-text">Birth year : {{ $people->birth_year }}</p>
                            <p class="card-text">Gender: {{ $people->gender }}</p>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <p class="card-text" ><a href="/species/{{ substr($people->specie, -2) }}" class="btn btn-success">Check Specie</a> </p>
                    </div>
                </div>
            </div> 
        </div>     

        @endforeach

    @else
        <p>No people found</p>
    @endif
@endsection