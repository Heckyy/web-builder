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

    {{-- Font Awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"
        integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Create Your Own Page - MicroKit </title>
</head>

<body>
    {{-- Navbar Section --}}
    <section id="navbar-section">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
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

    <section class="wrapper">
        <div class="row">
            <div class="col-lg-2  side-bar">
                <div class="row" style="margin-top:30px ">
                    <div class="col text-center ms-1">
                        <input type="text" placeholder="Search Component">
                    </div>
                </div>
            </div>
            <div class="col-lg-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                reiciendis
                blanditiis
                nam. Excepturi repudiandae illo ipsum aspernatur sequi nisi reprehenderit maiores in pariatur, tempora
                ipsa
                quasi quae quas sunt atque unde laudantium molestias, culpa commodi. Quasi, ad molestiae et magnam
                eveniet
                veniam, explicabo, iure aut eum quos laborum cum dolore.</div>
        </div>
    </section>

    {{-- Javascript --}}
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->

    <script src="{{ asset('js/main.js') }}"></script>



</body>

</html>
