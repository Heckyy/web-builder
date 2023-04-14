<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- CSS LINK --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>Create Your Own Page - MicroKit </title>
</head>

<body>



    {{-- Navbar Section --}}
    <section id="navbar-section">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/MicroKit.svg') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"><button class="btn button-device"
                                    name-device="dekstop" onclick="getDevice(this)"><img
                                        src="{{ asset('icons/desktop-icon.svg') }}" alt=""></button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button class="btn button-device" name-device="tablet"
                                    onclick="getDevice(this)"><img src="{{ asset('icons/tablet-icon.svg') }}"
                                        alt=""></button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button class="btn button-device"
                                    onclick="getDevice(this)" name-device='mobile'><img
                                        src="{{ asset('icons/mobile-icon.svg') }}" alt=""></button></a>
                        </li>
                    </ul>

                    <div class="navbar-nav ">
                        <button class="btn btn-primary me-lg-3 button-secondary">Live Preview</button>
                        <button class="btn btn-primary button-primary">Site to Code</button>
                    </div>

                </div>
            </div>
        </nav>
        <div class="navbar-line"></div>
    </section>
    {{-- End Of  Navbar Section --}}
