@extends('layouts.app')
@section('title','Edit Flight')
@section('content')

<h2>Edit Flight</h2>

<form action="{{ route('flights.update',$flight->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Flight Code</label>
        <input type="text" name="flight_code" class="form-control" value="{{ $flight->flight_code }}" required>
    </div>
    <div class="mb-3">
        <label>Origin</label>
        <input type="text" name="origin" class="form-control" value="{{ $flight->origin }}" required>
    </div>
    <div class="mb-3">
        <label>Destination</label>
        <input type="text" name="destination" class="form-control" value="{{ $flight->destination }}" required>
    </div>
    <div class="mb-3">
        <label>Departure Time</label>
        <input type="datetime-local" name="departure_time" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($flight->departure_time)) }}" required>
    </div>
    <div class="mb-3">
        <label>Arrival Time</label>
        <input type="datetime-local" name="arrival_time" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($flight->arrival_time)) }}" required>
    </div>
    <div class="mb-3">
        <label>Flight Duration</label>
        <input type="text" name="flight_duration" class="form-control" value="{{ $flight->flight_duration }}" required>
    </div>
    <div class="mb-3">
        <label>Harga Economy</label>
        <input type="number" name="economy_price" class="form-control" value="{{ $flight->economy_price }}" required>
    </div>
    <div class="mb-3">
        <label>Harga Business</label>
        <input type="number" name="business_price" class="form-control" value="{{ $flight->business_price }}">
    </div>
    <div class="mb-3">
        <label>Harga First</label>
        <input type="number" name="first_price" class="form-control" value="{{ $flight->first_price }}">
    </div>
    <button class="btn btn-success">Update Flight</button>
</form>

@endsection
