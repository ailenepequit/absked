@extends('layouts.default')

@section('content')

<div id="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading"><center>Add Room</center></div>
            <div class="panel-body">
                <form role="form">
                    <div class="form-group">
                    {!! Form::open(['url' => 'rooms.create']) !!}
    
                            {!! Form::text('Description', null, array('class' => "form-control", 'placeholder' => "Description")) !!}<br />
                            {!! Form::number('Capacity', null, array('class' => "form-control", 'placeholder' => "Capacity")) !!}<br />
                            {!! Form::select('Type', array('Lecture', 'Laboratory'), null, array('class' => "form-control", 'placeholder' => "Type")) !!}<br />
                            {!! Form::select('Building', array('SCS'), null, array('class' => "form-control", 'placeholder' => "Building")) !!}<br />
            
                            <center>{!! Form::submit('Save', array('class' => 'btn btn-info')) !!}</center>
          
                    {!! Form::close() !!}
       
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@endsection
                           