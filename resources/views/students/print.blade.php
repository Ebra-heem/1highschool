<!DOCTYPE html>
<html lang="en">
@php
    $school = App\Models\School::find($student->school_id);
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Admission Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .header-image {
            background-color: rgb(228, 228, 228);
            background-size: cover;
            background-position: center;
            height: 110px;
            padding: 10px;
        }

        .table td,
        .table th {
            padding: 0.2rem !important;
            font-size: 15px;

        }


        th {
            width: 500px;
            font-size: 15px;
        }

        td {
            width: 500px;
            font-size: 15px;
        }

        @media print {
            #break {
                page-break-before: always;
            }
        }
    </style>
</head>
@php
    $school = DB::table('schools')
        ->where('id', auth()->user()->school_id)
        ->first();
@endphp

<body>
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
                        src="{{ asset(str_replace('public/', 'storage/', "$student->student_image")) }}" width="100px;"
                        height="100px;" />
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
                        src="{{ asset(str_replace('public/', 'storage/', "$student->student_image")) }}" width="100px;"
                        height="100px;" />


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
</body>
