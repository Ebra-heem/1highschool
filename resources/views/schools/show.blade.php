@extends('layouts.back')
@section('title', 'Show-School')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <img class="card-img-top" src="{{ Storage::url($school->logo) }}" alt="{{ $school->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $school->name }}</h5>
                <p class="card-text">{{ $school->short_name }}</p>
                <p class="card-text">{{ $school->address }}</p>
                <p class="card-text">{{ $school->email }}</p>
                <p class="card-text">{{ $school->phone }}</p>
                <p class="card-text">{{ $school->code }}</p>
            </div>
        </div>
        <a href="{{ route('schools.index') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
</section>
@endsection