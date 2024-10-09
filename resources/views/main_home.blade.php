<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/backend/assets/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/backend/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/backend/assets/favicon/favicon-16x16.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Idrak Academy & IT</title>
    <style>
        .header-image {
            background-color: rgb(221, 221, 221);
            background-size: cover;
            background-position: center;
            height: 125px;
        }

        .blog .carousel-indicators {
            left: 0;
            top: auto;
            bottom: -40px;

        }

        /* The colour of the indicators */
        .blog .carousel-indicators li {
            background: #a3a3a3;
            border-radius: 50%;
            width: 8px;
            height: 8px;
        }

        .blog .carousel-indicators .active {
            background: #707070;
        }
    </style>
</head>

<body>
    <div class="header-image">
        <nav class="navbar navbar-light bg-light">
            <div class="col-md-4 col-sm-4">
                <img width="150px" height="150px" class="rounded-circle mx-auto d-block"
                    src="{{ asset('/backend/assets/img/iait_logo.png') }}" alt="">
            </div>
            <div class="col-md-8 col-sm-12 my-3 d-sm-none d-md-block ">
                <h1>ইদরাক একাডেমি এন্ড আইটি </h1>
                <h3>মোল্লারহাট, সখিপুর, শরিয়তপুর </h3>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7 mt-10">
                <div style="text-align:center" class="my-2">
                    <h3>অনলাইনে ভর্তির আবেদনের জন্য এখানে ক্লিক করুন</h3>
                    <a href="{{ url('/admission') }}" class="btn btn-lg btn-success "> <i class="fa fa-university"
                            aria-hidden="true"></i> Online
                        Admission</a>
                </div>
            </div>
            <div class="col-md-5">

                <div class="card">
                    <h5 class="card-header bg-warning">জন্ম নিবন্ধন নম্বর দিয়ে আবেদন খুঁজে বের করুন </h5>
                    <div class="card-body">
                        <form class="form-inline" action="{{ route('application') }}" method="POST">
                            @csrf
                            <input class="form-control mr-sm-2 w-75" type="text" name="birth_certificate"
                                placeholder="জন্ম নিবন্ধন নম্বর" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-danger">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row ">
                    @foreach ($schools as $school)
                        <div class="col-md-4 my-2">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" width="335" height="276"
                                    src="{{ asset(str_replace('public/', 'storage/', "$school->logo")) }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $school->name }}</h5>
                                    <p class="card-text">{{ $school->address }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <div class="header-image"></div>
</body>

</html>
