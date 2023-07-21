@extends('layouts.app')

@section('title', 'Homepage')

@section('main-section')
    @foreach($trains as $train)
        <p><span>Id: </span>{{ $train->id }}</p>
        <p><span>Agency: </span>{{ $train->agency }}</p>
        <p><span>Departure Station: </span>{{ $train->departure_station }}</p>
        <p><span>Arrival Station: </span>{{ $train->arrival_station }}</p>
        <p><span>Departure Time: </span>{{ $train->departure_time }}</p>
        <p><span>Arrival Time: </span>{{ $train->arrival_time }}</p>
        <p><span>Train Code: </span>{{ $train->train_code }}</p>
        <p><span>Carriages Number: </span>{{ $train->carriages_number }}</p>
        <p><span>On Time: </span>{{ $train->isOnTime ? 'Yes' : 'No' }}</p>
        <p><span>Cancelled: </span>{{ $train->isCancelled ? 'Yes' : 'No' }}</p>
    @endforeach
@endsection