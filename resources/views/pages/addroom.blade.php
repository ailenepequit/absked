@extends('layouts.default')
@section('content')
<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				Add Room
			</div>
			
			<div class="panel-body">
                {!! Form::text('Room Name', null, ['placeholder' => "Room Name"]) !!}<br/><br/>

                {!! Form::text('Description', null, ['placeholder' => "Description"]) !!}<br/><br/>
                
                {!! Form::number('Capacity', null, ['placeholder' => "Capacity"]) !!}<br/><br/>

                {!! Form::select('Building', array('SCS'), null, ['placeholder' => "Building"]) !!}<br/></br>

                 {!! Form::submit('Save') !!}<br/>
                <br />
            </div>
		</div>
	</div>
</div>
@endsection