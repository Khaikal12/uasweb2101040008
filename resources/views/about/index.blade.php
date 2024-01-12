<!-- resources/views/about/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
        .costom-gallery img {
            margin-right: 40px;
            margin-left: 40px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container px-5">
            <a class="navbar-brand" href="index.html">
                <img src="/pict/gn.jpg" alt="gn" style="height: 40px;">
                <!-- Sesuaikan path dan style sesuai kebutuhan Anda -->
            </a>
            <a class="navbar-brand" href="index.html">GAMING NEWS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('homepage') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About</a></li>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard') }}">Login</a>
                            </li>
                        </ul>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="content">
            <h1>About Us</h1>
            <p>Selamat datang di GAMING NEWS, portal berita gaming terdepan yang didedikasikan untuk para pecinta game di seluruh dunia!
                Kami hadir dengan semangat untuk menghadirkan konten berkualitas tinggi yang tidak hanya mengabarkan berita terbaru seputar dunia gaming,
                tetapi juga menggali lebih dalam ke dalam kisah, inovasi, dan kebudayaan yang membentuk industri game.</p>
        </div>
        <div class="sidebar">
            <img src="{{ asset('pict/gn.jpg') }}" alt="About Image">
            <p>Di sini, kami tidak hanya melaporkan berita terkini, tetapi juga mengulas game-game terbaru, memberikan pandangan mendalam tentang perkembangan industri,
                dan menyoroti tokoh-tokoh kreatif di balik layar yang membuat impian dan fantasi kita menjadi kenyataan. GAMING NEWS bukan hanya sumber berita, tetapi juga rumah bagi semua hal yang berkaitan dengan dunia gaming.</p>
        </div>
    </div>

    {{-- @include('includes.footer') <!-- Assuming you have a footer partial --> --}}
</body>
</html>
