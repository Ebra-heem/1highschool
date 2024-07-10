@extends('layouts.back')
@section('title', 'All School')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        </div>
    </div>
    <div class="container">
        <a href="{{ route('schools.create') }}" class="btn btn-primary mb-3">Add New School</a>
        <div class="row">
            @foreach($schools as $school)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset($school->logo) }}" alt="{{ $school->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $school->name }}</h5>
                        <p class="card-text">{{ $school->short_name }}</p>
                        <a href="{{ route('schools.show', $school->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('schools.destroy', $school->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection