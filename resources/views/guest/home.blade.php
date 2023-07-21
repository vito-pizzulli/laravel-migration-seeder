@extends('layouts.app')

@section('title', 'Laravel Migration Seeder - Trains')

@section('main-section')
    <div class="card-container d-flex justify-content-center flex-wrap">
        @foreach($trains as $train)
            <div class="card m-3" style="width: calc(100% / 3 - 2rem)">
                <div class="card-body text-center">
                    <p><span>Id: </span>{{ $train->id }}</p>
                    <hr>
                    <p><span>Agency: </span>{{ $train->agency }}</p>
                    <hr>
                    <p><span>Departure Station: </span>{{ $train->departure_station }}</p>
                    <hr>
                    <p><span>Arrival Station: </span>{{ $train->arrival_station }}</p>
                    <hr>
                    <p><span>Departure Time: </span>{{ $train->departure_time }}</p>
                    <hr>
                    <p><span>Arrival Time: </span>{{ $train->arrival_time }}</p>
                    <hr>
                    <p><span>Train Code: </span>{{ $train->train_code }}</p>
                    <hr>
                    <p><span>Carriages Number: </span>{{ $train->carriages_number }}</p>
                    <hr>
                    <p><span>On Time: </span>{{ $train->isOnTime ? 'Yes' : 'No' }}</p>
                    <hr>
                    <p><span>Cancelled: </span>{{ $train->isCancelled ? 'Yes' : 'No' }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection