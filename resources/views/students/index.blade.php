@extends('layouts.back')
@section('title', 'Dashboard')
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.2/css/buttons.dataTables.css">
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h2 class="text-center text-danger">Total: {{ count($students) }}</h2>
                        </center>
                    </div>
                    <div class="card-body p-0">

                        <div class="table-responsive">
                            <table class="table table-striped table-md" id="dataTable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Admission No</th>
                                        <th>Name</th>
                                        <th>Birth Certificate No</th>
                                        <th>Created At</th>
                                        <th>Admission Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $student->admission_id }}</td>
                                            <td>{{ $student->student_name_english }}</td>
                                            <td>{{ $student->birth_certificate }}</td>
                                            <td>{{ $student->created_at }}</td>
                                            <td>
                                                <div
                                                    class="badge @if ($student->admission_status == 'pending') badge-danger @endif badge-success">
                                                    {{ $student->admission_status }}</div>
                                            </td>
                                            <td>
                                                <a href="{{ route('students.approve', $student->id) }}"
                                                    class="btn btn-md btn-info"> Approve </a>
                                                <a href="{{ route('students.show', $student->id) }}"
                                                    class="btn btn-md btn-warning">View</a>
                                                <a href="{{ route('students.edit', $student->id) }}"
                                                    class="btn btn-md btn-success">Edit</a>
                                                <a href="#" class="btn btn-md btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
    <script>
        new DataTable('#dataTable', {
            layout: {
                topStart: {
                    buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
                }
            }
        });
    </script>
@endpush
