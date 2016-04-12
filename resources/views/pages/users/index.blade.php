@extends('layouts.default')

@section('content')
<h1>Users</h1>

@if ($users->count())

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>User Id</th>
                <th>Username</th>
                <th>Email</th>
                <center><th colspan="2">Action</th></center>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info btn-xs')) }}</td>
                    <td>{!! Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) !!}                       
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>

      {{ $users->render() }}

    </table>
@else
    There are no schedules
@endif

@endsection