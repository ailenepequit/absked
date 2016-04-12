@extends('layouts.default')

@section('content')

<div class="col-md-6 col-sm-6 col-xs-12">
    @if ($rooms->count())
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Room</th>
					<th>Status</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($rooms as $room)
					<tr>
    					<td>{{ $room->description }}</td>
    					<td>{{ $room->capacity }}</td>
    				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $rooms->render() }}
	@endif
</div>

@endsection
