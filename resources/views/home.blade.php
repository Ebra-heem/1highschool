@extends('layouts.back')
@section('title', 'Dashboard')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
            </div>
        </div>
        @php
            $school = DB::table('schools')
                ->where('id', auth()->user()->school_id)
                ->first();
        @endphp
        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <img class="" src="{{ asset(str_replace('public/', 'storage/', "$school->logo")) }}"
                                alt="{{ $school->name }}" width="175px" height="110px">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Welcome To {{ $school->name }}
                                ({{ $school->short_name }})</h2>
                            <h4 class="card-text">Address: {{ $school->address }}</h4>
                            <h4 class="card-text">EIIN: {{ $school->code }}</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
