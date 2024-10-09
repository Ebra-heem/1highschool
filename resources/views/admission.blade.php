<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/backend/assets/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/backend/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/backend/assets/favicon/favicon-16x16.png') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .header-image {
            background-color: rgb(5, 31, 31);
            background-size: cover;
            background-position: center;
            height: 200px;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #0a0c0e !important;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }

        .navbar-light {
            background-color: #fff !important;
        }

        .navbar-light .navbar-nav .nav-link {
            color: black;
            font-weight: bold;
            text-transform: uppercase;
        }

        .navbar-brand {
            color: black;
            font-weight: bold;
            text-transform: uppercase;
        }

        .white {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Online Admission System</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">আবেদন খুঁজুন </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="py-2 text-success">ছাত্র / ছাত্রীদের ভর্তি ফরম </h2>
            <form action="{{ route('students.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card mb-3">
                    <div class="card-header bg-info white">Admission and Student Information</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="school_id">School Name(যে স্কুলে ভর্তি হতে চাও সেটি সিলেক্ট করো)</label>
                            <select class="form-control" name="school_id">
                                @foreach ($schools as $school)
                                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="class">Select a Class <small>(তুমি যে শ্রেণিতে ভর্তি হতে চাও)
                                    </small></label>
                                <select class="form-control" id="class" name="class" required>
                                    <option value="Play">Play</option>
                                    <option value="Nursery">Nursery</option>
                                    <option value="Class-1">Class-1</option>
                                    <option value="Class-2">Class-2</option>
                                    <option value="Class-3">Class-3</option>
                                    <option value="Class-4">Class-4</option>
                                    <option value="Class-5">Class-5</option>
                                    <option selected value="Class-6">Class-6</option>
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
                                    <option value="Science">Science</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Arts">Arts</option>
                                    <option selected value="General">General</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="class_section">Academic Year</label>
                                <select class="form-control" id="academic_year" name="academic_year">
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="student_image">Student Image (.jpg/.png support)</label>
                            <input type="file" class="form-control-file" id="student_image" name="student_image">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="student_name_english">Student Name (in English)</label>
                                <input type="text" placeholder="তোমার নাম ইংরেজিতে লিখ " class="form-control"
                                    id="student_name_english" name="student_name_english" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="student_name_bangla">Student Name (in Bangla)</label>
                                <input type="text" placeholder="তোমার নাম বাংলায় লিখ " class="form-control"
                                    id="student_name_bangla" name="student_name_bangla">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mobile_number">Guardian Mobile Number</label>
                                <input type="text" placeholder="তোমার অভিভাবকের মোবাইল নাম্বার লিখ "
                                    class="form-control" id="mobile_number" name="mobile_number" required>
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
                                <label for="birth_certificate">Birth Certificate No</label>
                                <input type="text" placeholder="তোমার জন্ম নিবন্ধন নম্বর লিখ" class="form-control"
                                    id="birth_certificate" name="birth_certificate">
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
                                <select class="form-control" id="religion" name="religion" required>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Cristian">Cristian</option>
                                    <option value="Buddhist">Buddhist</option>
                                    <option value="Other">Other</option>
                                </select>
                                </select>
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
                            <label for="present_school_name">Previous School Name(পূর্বে অধ্যয়নকৃত স্কুলের নাম লিখ
                                )</label>
                            <input type="text" placeholder="N/A" class="form-control" id="present_school_name"
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
                                    class="form-control" id="father_name_english" name="father_name_english"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="father_name_bangla">Father's Name (in Bangla)</label>
                                <input type="text" placeholder="তোমার বাবার  নাম বাংলায় লিখ " class="form-control"
                                    id="father_name_bangla" name="father_name_bangla">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="father_nid_number">Father's NID Number</label>
                                <input type="text" placeholder="তোমার বাবার এন আই ডি নম্বর  লিখ "
                                    class="form-control" id="father_nid_number" name="father_nid_number">
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
                                    class="form-control" id="father_contact_number" name="father_contact_number">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mother_name_english">Mother's Name (in English)</label>
                                <input type="text" placeholder="তোমার মায়ের নাম ইংরেজিতে লিখ "
                                    class="form-control" id="mother_name_english" name="mother_name_english"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mother_name_bangla">Mother's Name (in Bangla)</label>
                                <input type="text" placeholder="তোমার মায়ের  নাম বাংলায় লিখ " class="form-control"
                                    id="mother_name_bangla" name="mother_name_bangla">
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="mother_nid_number">Mother's NID Number</label>
                                <input type="text" placeholder="তোমার মায়ের এন আই ডি নম্বর লিখ "
                                    class="form-control" id="mother_nid_number" name="mother_nid_number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mother_profession">Mother Profession</label>
                                <input type="text" placeholder="Housewife" class="form-control"
                                    id="mother_profession" name="mother_profession">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="parents_yearly_income">Parents Yearly Income</label>
                                <input type="text" placeholder="তোমার বাবা মায়ের বছরের আয় " class="form-control"
                                    id="parents_yearly_income" name="parents_yearly_income">
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
                                    id="present_address_village" name="present_address_village" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="present_address_post_block">Post/Block, Section</label>
                                <input type="text" placeholder="তোমার পোস্ট অফিসের নাম লিখ" class="form-control"
                                    id="present_address_post_block" name="present_address_post_block" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="present_address_thana">Thana</label>
                                <input type="text" placeholder="তোমার থানার নাম লিখ" class="form-control"
                                    id="present_address_thana" name="present_address_thana" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="present_address_district">District</label>
                                <input type="text" placeholder="তোমার জেলার নাম লিখ" class="form-control"
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
                                    id="permanent_address_village" name="permanent_address_village">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="permanent_address_post_block">Post/Block, Section</label>
                                <input type="text" placeholder="তোমার পোস্ট অফিসের নাম লিখ" class="form-control"
                                    id="permanent_address_post_block" name="permanent_address_post_block">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="permanent_address_thana">Thana</label>
                                <input type="text" placeholder="তোমার থানার নাম লিখ" class="form-control"
                                    id="permanent_address_thana" name="permanent_address_thana">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="permanent_address_district">District</label>
                                <input type="text" placeholder="তোমার জেলার নাম লিখ" class="form-control"
                                    id="permanent_address_district" name="permanent_address_district">
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
    <div class="header-image mt-5">

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
</body>

</html>
