

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container">
        <h1>Create Trip</h1>

        <!-- @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif -->

        <form action="{{ route('trips.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="location_id">Location:</label>
                <select name="location_id" id="location_id" class="form-control">
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="trip_date">Trip Date:</label>
                <input type="date" name="trip_date" id="trip_date" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Trip</button>
        </form>
    </div>
@endsection

