<!-- resources/views/home.blade.php -->

@extends('layout')

@section('content')
    <h1>Welcome to the Conference List</h1>

    <ul>
        @foreach ($conferences as $conference)
            <li>{{ $conference->name }} - {{ $conference->description }}</li>
        @endforeach
    </ul>
@endsection
