@extends('layouts.default')

@section('content')
<h1>Subjects</h1>

<p><i class="fa fa-plus-square"></i>{{ link_to_route('subjects.create', ' Add new Subject') }}</p>

@if ($subjects->count())

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Subject ID</th>
                <th>Description</th>
                <th>Lec Unit</th>
                <th>Lab Unit</th>
                <center><th colspan="2">Action</th></center>
            </tr>
        </thead>

        <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $subject->subjID }}</td>
                    <td>{{ $subject->description }}</td>
                    <td>{{ $subject->lecture_unit }}</td>
                    <td>{{ $subject->lab_unit }}</td>
                    <td>{{ link_to_route('subjects.edit', 'Edit', array($subject->offerno), array('class' => 'btn btn-info btn-xs')) }}</td>
                    <td>{!! Form::open(array('method' => 'DELETE', 'route' => array('subjects.destroy', $subject->offerno))) !!}                       
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>

      {{ $subjects->render() }}

    </table>
@else
    There are no schedules
@endif

@endsection