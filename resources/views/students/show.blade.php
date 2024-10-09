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
                <div class="breadcrumb-item active"><a href="{{ route('students.print', $student->id) }}">Print</a></div>
            </div>
        </div>
        @php
            $school = DB::table('schools')
                ->where('id', auth()->user()->school_id)
                ->first();
        @endphp
        <div class="row">
            <div class="container-fluid">
                <div class="header-image ">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="float-right" src="{{ asset(str_replace('public/', 'storage/', "$school->logo")) }}"
                                width="100px;" height="100px;" />
                        </div>
                        <div class="col-md-8 ">
                            <h2 class="text-center mt-2">{{ $school->name }}</h2>
                            <h6 class="text-center">EIIN No: {{ $school->code }}, ESTD: {{ $school->estd }}</h2>
                        </div>
                        <div class="col-md-2">
                            <img class="float-right mr-5"
                                src="{{ asset(str_replace('public/', 'storage/', "$student->student_image")) }}"
                                width="100px;" height="100px;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Student Information -->
                <div class="">
                    <h6 style="text-align: center">Student Information(Student Copy)</h6>
                    <div class="">
                        <table class="">
                            <tr>
                                <th>Admission Number:</th>
                                <td>{{ $student->admission_id }}</td>
                                <th>Admission Class:</th>
                                <td>{{ $student->class }}</td>
                                <th>Academic Year</th>
                                <td>{{ $student->academic_year }}</td>
                            </tr>
                            <tr>
                                <th>Student Name (English)</th>
                                <td>{{ $student->student_name_english }}</td>
                                <th>Student Name (Bangla)</th>
                                <td>{{ $student->student_name_bangla }}</td>
                                <th>Mobile No.</th>
                                <td>{{ $student->mobile_number }}</td>
                            </tr>
                            <tr>
                                <th>Date Of Birth</th>
                                <td>{{ $student->date_of_birth }}</td>
                                <th>Birth Certificate No</th>
                                <td>{{ $student->birth_certificate }}</td>
                                <th>Gender</th>
                                <td>{{ $student->gender }}</td>
                            </tr>

                            <tr>
                                <th>Blood Group</th>
                                <td>{{ $student->blood_group }}</td>
                                <th>Previous School Name</th>
                                <td>{{ $student->present_school_name }}</td>
                                <th>Religion</th>
                                <td>{{ $student->religion }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Parents Information -->
                <div class="">
                    <h6 style="text-align: center">Parents Information</h6>
                    <div class="">
                        <table class="table">
                            <tr>
                                <th>Father Name (English)</th>
                                <td>{{ $student->father_name_english }}</td>
                                <th>Father Name (Bangla)</th>
                                <td>{{ $student->father_name_bangla }}</td>
                                <th>Father NID Number</th>
                                <td>{{ $student->father_nid_number }}</td>
                            </tr>
                            <tr>

                            </tr>
                            <tr>
                                <th>Mother Name (English)</th>
                                <td>{{ $student->mother_name_english }}</td>
                                <th>Mother Name (Bangla)</th>
                                <td>{{ $student->mother_name_bangla }}</td>
                                <th>Mother NID Number</th>
                                <td>{{ $student->mother_nid_number }}</td>
                            </tr>

                            <tr>
                                <th>Father Profession</th>
                                <td>{{ $student->father_profession }}</td>
                                <th>Father Contact Number (Optional)</th>
                                <td>{{ $student->father_contact_number }}</td>
                                <th>Mother Profession</th>
                                <td>{{ $student->mother_profession }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Present and Permanent Address -->
                <div class="">
                    <div class="">
                        <table class="table">
                            <tr>
                                <th class="text-center" colspan="8">Present Address</th>
                            </tr>
                            <tr>
                                <th>Village/House, Road</th>
                                <td>{{ $student->present_address_village }}</td>
                                <th>Post/Block, Section</th>
                                <td>{{ $student->present_address_post_block }}</td>
                                <th>Thana</th>
                                <td>{{ $student->present_address_thana }}</td>
                                <th>District</th>
                                <td>{{ $student->present_address_district }}</td>
                            </tr>
                            <tr>
                                <th class="text-center" colspan="8">Permanent Address</th>
                            </tr>
                            <tr>
                                <th>Village/House, Road</th>
                                <td>{{ $student->permanent_address_village }}</td>
                                <th>Post/Block, Section</th>
                                <td>{{ $student->permanent_address_post_block }}</td>
                                <th>Thana</th>
                                <td>{{ $student->permanent_address_thana }}</td>
                                <th>District</th>
                                <td>{{ $student->permanent_address_district }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <br>

                        <p>-------------------------<br>Student Signature</p>
                    </div>
                    <div class="col-md-6 ">
                        <br>
                        <br>
                        <p class="float-right">----------------------------<br>Teacher Signature</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Office Copy  id="break" -->
            <div class="container mt-2">
                <div class="header-image ">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="float-right" src="{{ asset(str_replace('public/', 'storage/', "$school->logo")) }}"
                                width="100px;" height="100px;" />
                        </div>
                        <div class="col-md-8 ">
                            <h2 class="text-center mt-2">{{ $school->name }}</h2>
                            <h6 class="text-center">EIIN No: {{ $school->code }}, ESTD: {{ $school->estd }}</h2>
                        </div>
                        <div class="col-md-2">

                            <img class="float-right mr-5"
                                src="{{ asset(str_replace('public/', 'storage/', "$student->student_image")) }}"
                                width="100px;" height="100px;" />


                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Student Information -->
                <div class="">
                    <h6 style="text-align: center">Student Information(Office Copy)</h6>
                    <div class="">
                        <table class="">
                            <tr>
                                <th>Admission Number:</th>
                                <td>{{ $student->admission_id }}</td>
                                <th>Admission Class:</th>
                                <td>{{ $student->class }}</td>
                                <th>Academic Year</th>
                                <td>{{ $student->academic_year }}</td>
                            </tr>
                            <tr>
                                <th>Student Name (English)</th>
                                <td>{{ $student->student_name_english }}</td>
                                <th>Student Name (Bangla)</th>
                                <td>{{ $student->student_name_bangla }}</td>
                                <th>Mobile No.</th>
                                <td>{{ $student->mobile_number }}</td>
                            </tr>
                            <tr>
                                <th>Date Of Birth</th>
                                <td>{{ $student->date_of_birth }}</td>
                                <th>Birth Certificate No</th>
                                <td>{{ $student->birth_certificate }}</td>
                                <th>Gender</th>
                                <td>{{ $student->gender }}</td>
                            </tr>

                            <tr>
                                <th>Blood Group</th>
                                <td>{{ $student->blood_group }}</td>
                                <th>Previous School Name</th>
                                <td>{{ $student->present_school_name }}</td>
                                <th>Religion</th>
                                <td>{{ $student->religion }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Parents Information -->
                <div class="">
                    <h6 style="text-align: center">Parents Information</h6>
                    <div class="">
                        <table class="table">
                            <tr>
                                <th>Father Name (English)</th>
                                <td>{{ $student->father_name_english }}</td>
                                <th>Father Name (Bangla)</th>
                                <td>{{ $student->father_name_bangla }}</td>
                                <th>Father NID Number</th>
                                <td>{{ $student->father_nid_number }}</td>
                            </tr>
                            <tr>

                            </tr>
                            <tr>
                                <th>Mother Name (English)</th>
                                <td>{{ $student->mother_name_english }}</td>
                                <th>Mother Name (Bangla)</th>
                                <td>{{ $student->mother_name_bangla }}</td>
                                <th>Mother NID Number</th>
                                <td>{{ $student->mother_nid_number }}</td>
                            </tr>

                            <tr>
                                <th>Father Profession</th>
                                <td>{{ $student->father_profession }}</td>
                                <th>Father Contact Number (Optional)</th>
                                <td>{{ $student->father_contact_number }}</td>
                                <th>Mother Profession</th>
                                <td>{{ $student->mother_profession }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Present and Permanent Address -->
                <div class="">
                    <div class="">
                        <table class="table">
                            <tr>
                                <th class="text-center" colspan="8">Present Address</th>
                            </tr>
                            <tr>
                                <th>Village/House, Road</th>
                                <td>{{ $student->present_address_village }}</td>
                                <th>Post/Block, Section</th>
                                <td>{{ $student->present_address_post_block }}</td>
                                <th>Thana</th>
                                <td>{{ $student->present_address_thana }}</td>
                                <th>District</th>
                                <td>{{ $student->present_address_district }}</td>
                            </tr>
                            <tr>
                                <th class="text-center" colspan="8">Permanent Address</th>
                            </tr>
                            <tr>
                                <th>Village/House, Road</th>
                                <td>{{ $student->permanent_address_village }}</td>
                                <th>Post/Block, Section</th>
                                <td>{{ $student->permanent_address_post_block }}</td>
                                <th>Thana</th>
                                <td>{{ $student->permanent_address_thana }}</td>
                                <th>District</th>
                                <td>{{ $student->permanent_address_district }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <br>

                        <p>-------------------------<br>Student Signature</p>
                    </div>
                    <div class="col-md-6 ">
                        <br>
                        <br>
                        <p class="float-right">----------------------------<br>Teacher Signature</p>
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
