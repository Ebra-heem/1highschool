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
    <div class="section-body">
        <div class="row justify-content-center">
            <h2>Student Registration Form</h2>
            <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Student Information -->
                <div class="card mb-3">
                    <div class="card-header">Student Information</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="student_image">Student Image (.jpg/.png support)</label>
                            <input type="file" class="form-control-file" id="student_image" name="student_image">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="student_name_english">Student Name (English)</label>
                                <input type="text" class="form-control" id="student_name_english"
                                    name="student_name_english" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="student_name_bangla">Student Name (Bangla)</label>
                                <input type="text" class="form-control" id="student_name_bangla"
                                    name="student_name_bangla">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mobile_number">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile_number" name="mobile_number"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email (Optional)</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="date_of_birth">Date Of Birth</label>
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                                    required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="birth_certificate_nid_passport_no">Birth Certificate/NID/Passport No</label>
                                <input type="text" class="form-control" id="birth_certificate_nid_passport_no"
                                    name="birth_certificate_nid_passport_no">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="religion">Religion</label>
                                <input type="text" class="form-control" id="religion" name="religion" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="blood_group">Blood Group</label>
                                <select class="form-control" id="blood_group" name="blood_group">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="present_school_name">Present School Name</label>
                            <input type="text" class="form-control" id="present_school_name" name="present_school_name">
                        </div>
                    </div>
                </div>

                <!-- Parents Information -->
                <div class="card mb-3">
                    <div class="card-header">Parents Information</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="father_name_english">Father Name (English)</label>
                                <input type="text" class="form-control" id="father_name_english"
                                    name="father_name_english" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="father_name_bangla">Father Name (Bangla)</label>
                                <input type="text" class="form-control" id="father_name_bangla"
                                    name="father_name_bangla">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="father_date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control" id="father_date_of_birth"
                                    name="father_date_of_birth">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="father_nid_number">National ID Number</label>
                                <input type="text" class="form-control" id="father_nid_number" name="father_nid_number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="father_profession">Father Profession</label>
                                <input type="text" class="form-control" id="father_profession" name="father_profession">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="father_contact_number">Contact Number (Optional)</label>
                                <input type="text" class="form-control" id="father_contact_number"
                                    name="father_contact_number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mother_name_english">Mother Name (English)</label>
                                <input type="text" class="form-control" id="mother_name_english"
                                    name="mother_name_english" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mother_name_bangla">Mother Name (Bangla)</label>
                                <input type="text" class="form-control" id="mother_name_bangla"
                                    name="mother_name_bangla">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mother_date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control" id="mother_date_of_birth"
                                    name="mother_date_of_birth">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mother_nid_number">National ID Number</label>
                                <input type="text" class="form-control" id="mother_nid_number" name="mother_nid_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mother_profession">Mother Profession</label>
                            <input type="text" class="form-control" id="mother_profession" name="mother_profession">
                        </div>
                        <div class="form-group">
                            <label for="parents_yearly_income">Parents Yearly Income</label>
                            <input type="text" class="form-control" id="parents_yearly_income"
                                name="parents_yearly_income">
                        </div>
                    </div>
                </div>

                <!-- Present Address -->
                <div class="card mb-3">
                    <div class="card-header">Present Address</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="present_address_village">Village/House, Road</label>
                                <input type="text" class="form-control" id="present_address_village"
                                    name="present_address_village" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="present_address_post_block">Post/Block, Section</label>
                                <input type="text" class="form-control" id="present_address_post_block"
                                    name="present_address_post_block" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="present_address_thana">Thana</label>
                                <input type="text" class="form-control" id="present_address_thana"
                                    name="present_address_thana" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="present_address_district">District</label>
                                <input type="text" class="form-control" id="present_address_district"
                                    name="present_address_district" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Permanent Address -->
                <div class="card mb-3">
                    <div class="card-header">
                        Permanent Address
                        <input type="checkbox" id="same_as_present_address" name="same_as_present_address" value="1"
                            onclick="copyAddress()"> Same as present address
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="permanent_address_village">Village/House, Road</label>
                                <input type="text" class="form-control" id="permanent_address_village"
                                    name="permanent_address_village">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="permanent_address_post_block">Post/Block, Section</label>
                                <input type="text" class="form-control" id="permanent_address_post_block"
                                    name="permanent_address_post_block">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="permanent_address_thana">Thana</label>
                                <input type="text" class="form-control" id="permanent_address_thana"
                                    name="permanent_address_thana">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="permanent_address_district">District</label>
                                <input type="text" class="form-control" id="permanent_address_district"
                                    name="permanent_address_district">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Admission Information -->
                <div class="card mb-3">
                    <div class="card-header">Student Admission Information</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="class">Select Class</label>
                                <select class="form-control" id="class" name="class" required>
                                    <option value="Class 1">Class 1</option>
                                    <option value="Class 2">Class 2</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="group_department">Select Group/Department</label>
                                <select class="form-control" id="group_department" name="group_department">
                                    <option value="Science">Science</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Arts">Arts</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="class_section">Class Section</label>
                                <input type="text" class="form-control" id="class_section" name="class_section">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="class_shift">Class Shift</label>
                                <input type="text" class="form-control" id="class_shift" name="class_shift">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="academic_year">Academic Year</label>
                                <input type="text" class="form-control" id="academic_year" name="academic_year"
                                    required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="student_quotes">Student Quotes</label>
                                <input type="text" class="form-control" id="student_quotes" name="student_quotes">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="get_admission_in_any_institution">Get Admission In Any Institution</label>
                            <select class="form-control" id="get_admission_in_any_institution"
                                name="get_admission_in_any_institution">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    function copyAddress() {
        if (document.getElementById('same_as_present_address').checked) {
            document.getElementById('permanent_address_village').value = document.getElementById('present_address_village').value;
            document.getElementById('permanent_address_post_block').value = document.getElementById('present_address_post_block').value;
            document.getElementById('permanent_address_thana').value = document.getElementById('present_address_thana').value;
            document.getElementById('permanent_address_district').value = document.getElementById('present_address_district').value;
        } else {
            document.getElementById('permanent_address_village').value = '';
            document.getElementById('permanent_address_post_block').value = '';
            document.getElementById('permanent_address_thana').value = '';
            document.getElementById('permanent_address_district').value = '';
        }
    }
</script>
@endpush