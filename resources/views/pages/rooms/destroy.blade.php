@extends('layouts.default')

@section('content')

<h1>Delete Room</h1>

	@if (Session::has('message'))
    	<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

		{!! Form::open(array(, 'method' => 'delete'), 'route' => array('rooms.destroy', $room->roomID)) !!}
    		{!! Form::submit('Delete', array('class' => 'btn btn-danger', 'onclick="if(!confirm('Are you sure to delete this record?')){return false;};"')) !!}
		{!! Form::close() !!}

@endsection