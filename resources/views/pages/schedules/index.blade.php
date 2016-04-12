@extends('layouts.default')

@section('content')
<h1>Offerings</h1>

<p><i class="fa fa-plus-square"></i>{{ link_to_route('schedules.create', ' Add new Schedule') }}</p>

@if ($schedules->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Offer No.</th>
                <th>Timeslot</th>
                <th>Slots</th>
                <th>Subject</th>
                <th>Faculty</th>
                <th>Room</th>
                <center><th colspan="2">Action</th></center>
            </tr>
        </thead>

        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->offerno }}</td>
                    <td>{{ $schedule->timeslots }}</td>
                    <td>{{ $schedule->slots }}</td>
                    <td>{{ $schedule->subject }}</td>
                    <td>{{ $schedule->faculty }}</td>
                    <td>{{ $schedule->room }}</td>
                    <td>{{ link_to_route('schedules.edit', 'Edit', array($schedule->offerno), array('class' => 'btn btn-info')) }}</td>
                    <td>{!! Form::open(array('method' => 'DELETE', 'route' => array('schedules.destroy', $schedule->offerno))) !!}                       
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
@else
    There are no schedules
@endif

@endsection