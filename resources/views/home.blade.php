@extends('layout')

@section('content')
    <div class="container">
        <h1 class="display-4">Welcome to the Conference List</h1>

        <ul class="list-group">
            @foreach ($conferences as $conference)
                <li class="list-group-item">{{ $conference->name }} - {{ $conference->description }}</li>
            @endforeach
        </ul>
    </div>
@endsection
