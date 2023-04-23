@extends('layout')

@section('content')
    <h1>Create Conference</h1>

    <form method="POST" action="{{ route('conferences.store') }}">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ old('description') }}</textarea>
            @error('description')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" required>
            @error('start_date')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}" required>
            @error('end_date')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit">Create Conference</button>
        </div>
    </form>
@endsection
