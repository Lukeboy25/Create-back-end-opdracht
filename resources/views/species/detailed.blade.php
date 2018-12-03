@extends('layout')
@section('content')
<div class="container-fluid mb-sm-2" style="padding-top:10px">
        <h1 class="card-title">Specie : {{ $specie->name }}</h1>
    </div>
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-sm-2 card-zoom">
                <div class="card-body pl-5">
                    <div class="col-xs-4">
                        <p class="card-text">Designation : {{ $specie->designation }}</p>
                        <p class="card-text">Average height : {{ $specie->average_height }}</p>
                        <p class="card-text">Skin colors : {{ $specie->skin_colors }}</p>
                        <p class="card-text">Hair colors : {{ $specie->hair_colors }}</p>
                        <p class="card-text">Eye colors : {{ $specie->eye_colors }}</p>
                        <p class="card-text">Average lifespan : {{ $specie->average_lifespan }}</p>
                        <p class="card-text">Language : {{ $specie->language }}</p>
                    </div>
                </div>
                <div class="card-footer">
                        <a href="/species" class="btn btn-success">Go back</a>
                </div>
            </div>
        </div> 
    </div> 
@endsection