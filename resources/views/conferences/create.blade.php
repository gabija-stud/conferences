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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('form').submit(function () {
                var name = $('#name').val();
                var description = $('#description').val();
                var startDate = $('#start_date').val();
                var endDate = $('#end_date').val();

                if (name.length < 3 || name.length > 50) {
                    alert('Name must be between 3 and 50 characters');
                    return false;
                }

                if (description.length < 10 || description.length > 500) {
                    alert('Description must be between 10 and 500 characters');
                    return false;
                }

                if (new Date(startDate) >= new Date(endDate)) {
                    alert('End date must be after start date');
                    return false;
                }

                return true;
            });
        });
    </script>
@endsection
