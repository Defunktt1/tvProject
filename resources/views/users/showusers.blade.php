@extends('app')
@section('content')
    @foreach($users as $user)
        <a href="{{ url('/user/' . $user->id . 'edit') }}"> {{ $user->name }}</a>
        <p>{{ $user->email }}</p>
        <p>{{ $user->is_admin }}</p>
        {!! Form::Open(['method' => 'DELETE', 'url' => '/user/' . $user->id]) !!}
        {!! Form::submit('DELETE USER') !!}
        {!! Form::close() !!}
        <a href="{{ URL::to('/user/' . $user->id . '/edit') }}">Edit video</a>
        <hr>
    @endforeach
@endsection