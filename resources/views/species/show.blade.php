@extends('layout')
@section('content')
<div class="container-fluid mb-sm-2" style="padding-top:10px">
        <h1>Species</h1>
    </div>
    @if(count($species) > 0) 
        @foreach ($species as $specie)
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="card mb-sm-2 card-zoom">
                    <div class="card-body pl-5">
                        <div class="col-xs-4">
                            <h4 class="card-title">{{ $specie->name }}</h4>
                            <p class="card-text">Designation : {{ $specie->designation }}</p>
                            <p class="card-text">Average height : {{ $specie->average_height }}</p>
                            <a href="/species/{{ $specie->id }}" class="btn btn-primary">See details</a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>     
        @endforeach

    @else
        <p>No species found</p>
    @endif
@endsection