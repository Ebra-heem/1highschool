@extends('layouts.back')
@section('title', 'Edit School')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        </div>
    </div>
    <div class="container">
        <h2>Edit School</h2>
        <form action="{{ route('schools.update', $school->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $school->name }}" required>
            </div>
            <div class="form-group">
                <label for="short_name">Short Name</label>
                <input type="text" class="form-control" id="short_name" name="short_name"
                    value="{{ $school->short_name }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" required>{{ $school->address }}</textarea>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $school->email }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $school->phone }}" required>
            </div>
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ $school->code }}" required>
            </div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" class="form-control" id="logo" name="logo">
                <img src="{{ Storage::url($school->logo) }}" alt="{{ $school->name }}" width="100">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</section>
@endsection