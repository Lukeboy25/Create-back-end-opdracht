@extends('layout')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-sm-2 card-zoom">
            @if(count($species) || (count($people)) > 0) 
                @if(count($species) > 0)
                    <div class="card-body pl-5">
                        <div class="col-xs-4">
                            <p>Loaded {{ $species->count() }} species</p>
                            <a href="/species" class="btn btn-primary">Check all Species</a>
                        </div>
                    </div>
                @endif
                @if(count($people) > 0)
                    <div class="card-body pl-5">
                        <div class="col-xs-4">
                            <p>Loaded {{ $people->count() }} people</p>
                            <a href="/people" class="btn btn-primary">Check all people</a>
                        </div>
                    </div>
                @endif
                @else
                    <p>No data found</p>
                @endif  
            </div>
        </div>
    </div>
</div>
@endsection