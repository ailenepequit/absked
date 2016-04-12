@extends('layouts.default')

@section('content')
<h1>Room Details</h1>

    <p>{{ $room->description}}</p>
    <p>{{ $room->type}}</p>
    <p>{{ $room->capacity}}</p>
    
@endsection