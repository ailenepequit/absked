@extends('layouts.default')

@section('content')
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading"><center>Edit Room</center></div>
            <div class="panel-body">
                <form role="form">
                    <div class="form-group">
                    {!! Form::open(['url' => 'rooms.update.'.$room["roomID"].'']) !!}
                        
                            {!! Form::text('Description', $room->description, array('class' => "form-control", 'placeholder' => "Description")) !!}<br />
                            {!! Form::number('Capacity', $room->capacity, array('class' => "form-control", 'placeholder' => "Capacity")) !!}<br />
                            {!! Form::select('Type', array('--', 'Lecture', 'Laboratory'), $room->type, ['class' => "form-control"]) !!}<br />
                            {!! Form::select('Building', array('--', 'SCS'), $room->buildingID, ['class' => "form-control"]) !!}<br />
                        
                            <center>{!! Form::submit('Update', array('class' => 'btn btn-info')) !!}
                                {!! link_to_route('rooms.index', 'Cancel', $room->roomID, array('class' => 'btn btn-danger')) !!}</center>
                        
                   {!! Form::close() !!}
                    </div>
                </form>
            </div>
    </div>
</div>

	@if ($errors->any())
		<ul>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</ul>
	@endif
@endsection
