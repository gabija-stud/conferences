@extends('layout')

@section('content')
    <h1>Edit Conference</h1>

    <form method="POST" action="{{ route('conferences.update', $conference->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $conference->name }}" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" required>{{ $conference->description }}</textarea>
        </div>

        <button type="submit">Save Changes</button>
    </form>
@endsection
