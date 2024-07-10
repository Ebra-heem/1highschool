<!DOCTYPE html>
<html lang="en">
@php
$school=App\Models\School::find($student->school_id);
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
            height: 120px;
        }

        .table td,
        .table th {
            padding: 0.2rem !important;

        }


        th {
            width: 500px;
        }

        td {
            width: 500px;
        }

        @media print {
            #break {
                page-break-before: always;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-2">
        <div class="header-image ">
            <div class="row">
                <div class="col-md-2">
                    <img class="float-right" src="{{ $school->logo }}" width="100px;" height="100px;" />
                </div>
                <div class="col-md-10">
                    <h2 class="text-center">{{ $school->name }}</h2>
                    <h6 class="text-center">EIIN No: {{ $school->code }}, ESTD: {{ $school->estd }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Student Information -->
        <div class="card">
            <div class="card-header text-center">Student Information(Student Copy)</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Student Image</th>
                        <td><img src="{{ asset($student->student_image) }}" alt=""></td>
                        <th>Admission Number:</th>
                        <td>{{ $student->admission_id }}</td>
                    </tr>
                    <tr>
                        <th>Student Name (English)</th>
                        <td>{{ $student->student_name_english }}</td>
                        <th>Student Name (Bangla)</th>
                        <td>{{ $student->student_name_bangla }}</td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td>{{ $student->mobile_number }}</td>
                        <th>Email (Optional)</th>
                        <td>{{ $student->email }}</td>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td>{{ $student->date_of_birth }}</td>
                        <th>Birth Certificate No</th>
                        <td>{{ $student->birth_certificate }}</td>
                    </tr>

                    <tr>
                        <th>Gender</th>
                        <td>{{ $student->gender }}</td>
                        <th>Religion</th>
                        <td>{{ $student->religion }}</td>
                    </tr>

                    <tr>
                        <th>Blood Group</th>
                        <td>{{ $student->blood_group }}</td>
                        <th>Present School Name</th>
                        <td>{{ $student->present_school_name }}</td>
                    </tr>

                </table>
            </div>
        </div>

        <!-- Parents Information -->
        <div class="card">
            <div class="card-header text-center">Parents Information</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Father Name (English)</th>
                        <td>{{ $student->father_name_english }}</td>
                        <th>Father Name (Bangla)</th>
                        <td>{{ $student->father_name_bangla }}</td>
                    </tr>

                    <tr>
                        <th>Father Date of Birth</th>
                        <td>{{ $student->father_date_of_birth }}</td>
                        <th>Father NID Number</th>
                        <td>{{ $student->father_nid_number }}</td>
                    </tr>
                    <tr>
                        <th>Father Profession</th>
                        <td>{{ $student->father_profession }}</td>
                        <th>Father Contact Number (Optional)</th>
                        <td>{{ $student->father_contact_number }}</td>
                    </tr>
                    <tr>
                        <th>Mother Name (English)</th>
                        <td>{{ $student->mother_name_english }}</td>
                        <th>Mother Name (Bangla)</th>
                        <td>{{ $student->mother_name_bangla }}</td>
                    </tr>
                    <tr>
                        <th>Mother Date of Birth</th>
                        <td>{{ $student->mother_date_of_birth }}</td>
                        <th>Mother NID Number</th>
                        <td>{{ $student->mother_nid_number }}</td>
                    </tr>
                    <tr>
                        <th>Mother Profession</th>
                        <td>{{ $student->mother_profession }}</td>
                        <th>Parents Yearly Income</th>
                        <td>{{ $student->parents_yearly_income }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Present and Permanent Address -->
        <div class="card ">
            <div class="card-body">
                <table class="table table-bordered">
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

        <!-- Admission Address -->
        <div class="card">
            <div class="card-header text-center">Student Admission Information</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Admission Class:</th>
                        <td>{{ $student->class }}</td>
                        <th>Group/Department</th>
                        <td>{{ $student->group_department }}</td>
                    </tr>
                    <tr>
                        <th>Section</th>
                        <td>{{ $student->class_section }}</td>
                        <th>Shift</th>
                        <td>{{ $student->class_shift }}</td>
                        <th>Academic Year</th>
                        <td>{{ $student->class_shift }}</td>
                    </tr>
                    <tr>
                        <td>{{ $student->get_admission_in_any_institution }}</td>
                        <th colspan="5">Get Admission In Any Institution</th>
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
    <!-- Office Copy -->

    <div class="container mt-2" id="break">
        <div class="header-image">
            <div class="row">
                <div class="col-md-2">
                    <img class="float-right" src="{{ $school->logo }}" width="100px;" height="100px;" />
                </div>
                <div class="col-md-10">
                    <h2 class="text-center">{{ $school->name }}</h2>
                    <h6 class="text-center">EIIN No: {{ $school->code }}, ESTD: {{ $school->estd }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Student Information -->
        <div class="card">
            <div class="card-header text-center">Student Information(Office Copy)</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Student Image</th>
                        <td><img src="{{ asset($student->student_image) }}" alt=""></td>
                        <th>Admission Number:</th>
                        <td>{{ $student->admission_id }}</td>
                    </tr>
                    <tr>
                        <th>Student Name (English)</th>
                        <td>{{ $student->student_name_english }}</td>
                        <th>Student Name (Bangla)</th>
                        <td>{{ $student->student_name_bangla }}</td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td>{{ $student->mobile_number }}</td>
                        <th>Email (Optional)</th>
                        <td>{{ $student->email }}</td>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td>{{ $student->date_of_birth }}</td>
                        <th>Birth Certificate No</th>
                        <td>{{ $student->birth_certificate }}</td>
                    </tr>

                    <tr>
                        <th>Gender</th>
                        <td>{{ $student->gender }}</td>
                        <th>Religion</th>
                        <td>{{ $student->religion }}</td>
                    </tr>

                    <tr>
                        <th>Blood Group</th>
                        <td>{{ $student->blood_group }}</td>
                        <th>Present School Name</th>
                        <td>{{ $student->present_school_name }}</td>
                    </tr>

                </table>
            </div>
        </div>

        <!-- Parents Information -->
        <div class="card">
            <div class="card-header text-center">Parents Information</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Father Name (English)</th>
                        <td>{{ $student->father_name_english }}</td>
                        <th>Father Name (Bangla)</th>
                        <td>{{ $student->father_name_bangla }}</td>
                    </tr>

                    <tr>
                        <th>Father Date of Birth</th>
                        <td>{{ $student->father_date_of_birth }}</td>
                        <th>Father NID Number</th>
                        <td>{{ $student->father_nid_number }}</td>
                    </tr>
                    <tr>
                        <th>Father Profession</th>
                        <td>{{ $student->father_profession }}</td>
                        <th>Father Contact Number (Optional)</th>
                        <td>{{ $student->father_contact_number }}</td>
                    </tr>
                    <tr>
                        <th>Mother Name (English)</th>
                        <td>{{ $student->mother_name_english }}</td>
                        <th>Mother Name (Bangla)</th>
                        <td>{{ $student->mother_name_bangla }}</td>
                    </tr>
                    <tr>
                        <th>Mother Date of Birth</th>
                        <td>{{ $student->mother_date_of_birth }}</td>
                        <th>Mother NID Number</th>
                        <td>{{ $student->mother_nid_number }}</td>
                    </tr>
                    <tr>
                        <th>Mother Profession</th>
                        <td>{{ $student->mother_profession }}</td>
                        <th>Parents Yearly Income</th>
                        <td>{{ $student->parents_yearly_income }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Present and Permanent Address -->
        <div class="card ">
            <div class="card-body">
                <table class="table table-bordered">
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

        <!-- Admission Address -->
        <div class="card">
            <div class="card-header text-center">Student Admission Information</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Admission Class:</th>
                        <td>{{ $student->class }}</td>
                        <th>Group/Department</th>
                        <td>{{ $student->group_department }}</td>
                    </tr>
                    <tr>
                        <th>Section</th>
                        <td>{{ $student->class_section }}</td>
                        <th>Shift</th>
                        <td>{{ $student->class_shift }}</td>
                        <th>Academic Year</th>
                        <td>{{ $student->class_shift }}</td>
                    </tr>
                    <tr>
                        <td>{{ $student->get_admission_in_any_institution }}</td>
                        <th colspan="5">Get Admission In Any Institution</th>
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