@extends('layouts.default')

@section('content')
<h1>All Rooms</h1>

<p><i class="fa fa-plus-square"></i>{{ link_to_route('rooms.create', ' Add new room', array('class' => 'btn btn-info')) }}</p>

@if ($rooms->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Room ID</th>
                <th>Description</th>
                <th>Type</th>
                <th>Capacity</th>
                <center><th colspan="2">Action</th></center>
            </tr>
        </thead>

        <tbody>
            @foreach ($rooms as $room)
                <tr>
                    <td>{{ $room->roomID }}</td>
                    <td>{{ $room->description }}</td>
          			<td>{{ $room->type }}</td>
          			<td>{{ $room->capacity }}</td>
                    <td>{{ link_to_route('rooms.edit', 'Edit', array($room->roomID), array('class' => 'btn btn-info btn-xs')) }}</td>
                    <td>{!! Form::open(array('method' => 'DELETE', 'route' => array('rooms.destroy', $room->roomID))) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   {{ $rooms->render() }}
@else
    There are no rooms 
@endif

@endsection