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
        <h6>Student Admission Form Edit</h6>
        <div class="section-body">
            <div class="container">
                <div class="row justify-content-center">
                    <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card mb-3">
                            <div class="card-header bg-info white">Admission and Student Information</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="school_id">School Name</label>

                                    @php
                                        $school = DB::table('schools')
                                            ->where('id', auth()->user()->school_id)
                                            ->first();
                                    @endphp
                                    <input type="text" class="form-control" id="school_id" value="{{ $school->name }}"
                                        readonly>
                                    <input type="hidden" class="form-control" id="school_id" name="school_id"
                                        value="{{ $school->id }}">

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="class">Select a Class <small>(তুমি যে শ্রেণিতে ভর্তি হতে চাও)
                                            </small></label>
                                        <select class="form-control" id="class" name="class" required>
                                            <option selected value="{{ $student->class }}">{{ $student->class }}</option>
                                            <option value="Play">Play</option>
                                            <option value="Nursery">Nursery</option>
                                            <option value="Class-1">Class-1</option>
                                            <option value="Class-2">Class-2</option>
                                            <option value="Class-3">Class-3</option>
                                            <option value="Class-4">Class-4</option>
                                            <option value="Class-5">Class-5</option>
                                            <option value="Class-6">Class-6</option>
                                            <option value="Class-7">Class-7</option>
                                            <option value="Class-8">Class-8</option>
                                            <option value="Class-9">Class-9</option>
                                            <option value="Class-10">Class-10</option>
                                            <option value="Class-11">Class-11</option>
                                            <option value="Class-12">Class-12</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="group_department">Select Group/Department</label>
                                        <select class="form-control" id="group_department" name="group_department">
                                            <option selected value="{{ $student->group_department }}">
                                                {{ $student->group_department }}</option>
                                            <option value="Science">Science</option>
                                            <option value="Commerce">Commerce</option>
                                            <option value="Arts">Arts</option>
                                            <option selected value="General">General</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="class_section">Academic Year</label>
                                        <select class="form-control" id="academic_year" name="academic_year">
                                            <option selected value="{{ $student->academic_year }}">
                                                {{ $student->academic_year }}</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-4">
                                        <label for="student_image">Student Image (.jpg/.png support)</label>
                                        <img class="float-right mr-5"
                                            src="{{ asset(str_replace('public/', 'storage/', "$student->student_image")) }}"
                                            width="100px;" height="100px;" />
                                        <input type="file" class="form-control-file" id="student_image"
                                            name="student_image">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="class_section">Section</label>
                                        <select class="form-control" id="class_section" name="class_section">
                                            <option @if ($student->class_section == 'A') selected @endif value="A">A
                                            </option>
                                            <option @if ($student->class_section == 'A') selected @endif value="B">B
                                            </option>
                                            <option @if ($student->class_section == 'A') selected @endif value="C">C
                                            </option>
                                            <option @if ($student->class_section == 'A') selected @endif value="D">D
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="student_name_english">Student Name (in English)</label>
                                        <input type="text" placeholder="তোমার নাম ইংরেজিতে লিখ " class="form-control"
                                            id="student_name_english" value="{{ $student->student_name_english }}"
                                            name="student_name_english" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="student_name_bangla">Student Name (in Bangla)</label>
                                        <input type="text" placeholder="তোমার নাম বাংলায় লিখ " class="form-control"
                                            id="student_name_bangla" value="{{ $student->student_name_bangla }}"
                                            name="student_name_bangla">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="mobile_number">Guardian Mobile Number</label>
                                        <input type="text" placeholder="তোমার অভিভাবকের মোবাইল নাম্বার লিখ "
                                            class="form-control" id="mobile_number"
                                            value="{{ $student->mobile_number }}" name="mobile_number" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email (Optional)</label>
                                        <input type="email" class="form-control" value="{{ $student->email }}"
                                            id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="date_of_birth">Date Of Birth</label>
                                        <input type="date" class="form-control" value="{{ $student->date_of_birth }}"
                                            id="date_of_birth" name="date_of_birth" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="birth_certificate">Birth Certificate No</label>
                                        <input type="text" placeholder="তোমার জন্ম নিবন্ধন নম্বর লিখ"
                                            class="form-control" id="birth_certificate"
                                            value="{{ $student->birth_certificate }}" name="birth_certificate">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option @if ($student->gender == 'male') selected @endif value="male">Male
                                            </option>
                                            <option @if ($student->gender == 'female') selected @endif value="female">Female
                                            </option>
                                            <option @if ($student->gender == 'other') selected @endif value="other">Other
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="religion">Religion</label>
                                        <select class="form-control" id="religion" name="religion" required>
                                            <option @if ($student->religion == 'Islam') selected @endif value="Islam">Islam
                                            </option>
                                            <option @if ($student->religion == 'Hindu') selected @endif value="Hindu">Hindu
                                            </option>
                                            <option @if ($student->religion == 'Cristian') selected @endif value="Cristian">
                                                Cristian</option>
                                            <option @if ($student->religion == 'Buddhist') selected @endif value="Buddhist">
                                                Buddhist</option>
                                            <option @if ($student->religion == 'Other') selected @endif value="Other">
                                                Other</option>
                                        </select>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="blood_group">Blood Group</label>
                                        <select class="form-control" id="blood_group" name="blood_group">
                                            <option @if ($student->blood_group == 'A+') selected @endif value="A+">A+
                                            </option>
                                            <option @if ($student->blood_group == 'A-') selected @endif value="A-">A-
                                            </option>
                                            <option @if ($student->blood_group == 'B+') selected @endif value="B+">B+
                                            </option>
                                            <option @if ($student->blood_group == 'B-') selected @endif value="B-">B-
                                            </option>
                                            <option @if ($student->blood_group == 'AB+') selected @endif value="AB+">AB+
                                            </option>
                                            <option @if ($student->blood_group == 'AB-') selected @endif value="AB-">AB-
                                            </option>
                                            <option @if ($student->blood_group == 'O+') selected @endif value="O+">O+
                                            </option>
                                            <option @if ($student->blood_group == 'O-') selected @endif value="O-">O-
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="present_school_name">Previous School Name(পূর্বে অধ্যয়নকৃত স্কুলের নাম লিখ
                                        )</label>
                                    <input type="text" placeholder="N/A" class="form-control"
                                        id="present_school_name" value="{{ $student->present_school_name }}"
                                        name="present_school_name">
                                </div>
                            </div>
                        </div>

                        <!-- Parents Information -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary white">Parents Information</div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="father_name_english">Father's Name (in English)</label>
                                        <input type="text" placeholder="তোমার বাবার নাম ইংরেজিতে লিখ "
                                            class="form-control" id="father_name_english"
                                            value="{{ $student->father_name_english }}" name="father_name_english"
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="father_name_bangla">Father's Name (in Bangla)</label>
                                        <input type="text" placeholder="তোমার বাবার  নাম বাংলায় লিখ "
                                            class="form-control" id="father_name_bangla"
                                            value="{{ $student->father_name_bangla }}" name="father_name_bangla">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="father_nid_number">Father's NID Number</label>
                                        <input type="text" placeholder="তোমার বাবার এন আই ডি নম্বর  লিখ "
                                            class="form-control" id="father_nid_number"
                                            value="{{ $student->father_nid_number }}" name="father_nid_number">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="father_profession">Father Profession</label>
                                        <select class="form-control" id="father_profession" name="father_profession">
                                            <option value="Government Service">Government Service</option>
                                            <option value="Government Service (Retd)">Government Service (Retd)</option>
                                            <option value="Private Service">Private Service</option>
                                            <option value="Private Service (Retd)">Private Service (Retd)</option>
                                            <option value="Army">Army</option>
                                            <option value="Army (Retd)">Army (Retd)</option>
                                            <option value="Navy">Navy</option>
                                            <option value="Navy (Retd)">Navy (Retd)</option>
                                            <option value="Police">Police</option>
                                            <option value="Police (Retd)">Police (Retd)</option>
                                            <option value="Air Force">Air Force</option>
                                            <option value="Air Force (Retd)">Air Force (Retd)</option>
                                            <option value="Lawyer">Lawyer</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Engineer">Engineer</option>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Business">Business</option>
                                            <option value="Expatriate/Immigrant">Expatriate/Immigrant</option>
                                            <option value="Farmer">Farmer</option>
                                            <option value="N/A">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="father_contact_number">Father's Mobile Number</label>
                                        <input type="text" placeholder="তোমার বাবার মোবাইল নম্বর  লিখ "
                                            class="form-control" id="father_contact_number"
                                            value="{{ $student->father_contact_number }}" name="father_contact_number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="mother_name_english">Mother's Name (in English)</label>
                                        <input type="text" placeholder="তোমার মায়ের নাম ইংরেজিতে লিখ "
                                            class="form-control" id="mother_name_english"
                                            value="{{ $student->mother_name_english }}" name="mother_name_english"
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mother_name_bangla">Mother's Name (in Bangla)</label>
                                        <input type="text" placeholder="তোমার মায়ের  নাম বাংলায় লিখ "
                                            class="form-control" id="mother_name_bangla"
                                            value="{{ $student->mother_name_bangla }}" name="mother_name_bangla">
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="mother_nid_number">Mother's NID Number</label>
                                        <input type="text" placeholder="তোমার মায়ের এন আই ডি নম্বর লিখ "
                                            class="form-control" id="mother_nid_number"
                                            value="{{ $student->mother_nid_number }}" name="mother_nid_number">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="mother_profession">Mother Profession</label>
                                        <input type="text" placeholder="Housewife"
                                            value="{{ $student->mother_profession }}" class="form-control"
                                            id="mother_profession" name="mother_profession">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="parents_yearly_income">Parents Yearly Income</label>
                                        <input type="text" placeholder="তোমার বাবা মায়ের বছরের আয় "
                                            class="form-control" id="parents_yearly_income"
                                            value="{{ $student->parents_yearly_income }}" name="parents_yearly_income">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Present Address -->
                        <div class="card mb-3">
                            <div class="card-header bg-warning">Present Address</div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="present_address_village">Village/House, Road</label>
                                        <input type="text" placeholder="তোমার গ্রামের নাম লিখ " class="form-control"
                                            id="present_address_village" value="{{ $student->present_address_village }}"
                                            name="present_address_village" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="present_address_post_block">Post/Block, Section</label>
                                        <input type="text" placeholder="তোমার পোস্ট অফিসের নাম লিখ"
                                            class="form-control" value="{{ $student->present_address_post_block }}"
                                            id="present_address_post_block" name="present_address_post_block" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="present_address_thana">Thana</label>
                                        <input type="text" value="{{ $student->present_address_thana }}"
                                            placeholder="তোমার থানার নাম লিখ" class="form-control"
                                            id="present_address_thana" name="present_address_thana" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="present_address_district">District</label>
                                        <input type="text" placeholder="তোমার জেলার নাম লিখ"
                                            value="{{ $student->present_address_district }}" class="form-control"
                                            id="present_address_district" name="present_address_district" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Permanent Address -->
                        <div class="card mb-3">
                            <div class="card-header">
                                Permanent Address
                                <input type="checkbox" id="same_as_present_address" name="same_as_present_address"
                                    value="1" onclick="copyAddress()"> <small>Same as present address</small>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="permanent_address_village">Village/House, Road</label>
                                        <input type="text" placeholder="তোমার গ্রামের নাম লিখ " class="form-control"
                                            id="permanent_address_village"
                                            value="{{ $student->permanent_address_village }}"
                                            name="permanent_address_village">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="permanent_address_post_block">Post/Block, Section</label>
                                        <input type="text" placeholder="তোমার পোস্ট অফিসের নাম লিখ"
                                            class="form-control" value="{{ $student->permanent_address_post_block }}"
                                            id="permanent_address_post_block" name="permanent_address_post_block">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="permanent_address_thana">Thana</label>
                                        <input type="text" placeholder="তোমার থানার নাম লিখ" class="form-control"
                                            id="permanent_address_thana" value="{{ $student->permanent_address_thana }}"
                                            name="permanent_address_thana">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="permanent_address_district">District</label>
                                        <input type="text" placeholder="তোমার জেলার নাম লিখ" class="form-control"
                                            id="permanent_address_district"
                                            value="{{ $student->permanent_address_district }}"
                                            name="permanent_address_district">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="offset-8">

                                <button type="submit" class="btn btn-lg btn-primary">Submit Application</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function copyAddress() {
            if (document.getElementById('same_as_present_address').checked) {
                document.getElementById('permanent_address_village').value = document.getElementById(
                    'present_address_village').value;
                document.getElementById('permanent_address_post_block').value = document.getElementById(
                    'present_address_post_block').value;
                document.getElementById('permanent_address_thana').value = document.getElementById('present_address_thana')
                    .value;
                document.getElementById('permanent_address_district').value = document.getElementById(
                    'present_address_district').value;
            } else {
                document.getElementById('permanent_address_village').value = '';
                document.getElementById('permanent_address_post_block').value = '';
                document.getElementById('permanent_address_thana').value = '';
                document.getElementById('permanent_address_district').value = '';
            }
        }
    </script>
@endpush
