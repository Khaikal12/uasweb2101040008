<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
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
    <main class="flex-shrink-0">

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
                        <li class="nav-item"><a class="nav-link" href="{{ url('halamanNews') }}">Search News</a></li>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('login') }}">Login</a>
                                </li>
                            </ul>
                    </ul>
                </div>
            </div>
        </nav>


        <style>
            .bg-dark.py-5 {
                background-image: url('/pict/honkaibg.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                color: rgb(250, 250, 250);
                /* Warna teks untuk kontras dengan background */
            }
        </style>
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6 d-flex flex-column align-items-center">
                        <div class="my-5 text-center text-xl-start">

                            <h1>PORTAL MENUJU DUNIA DIGITAL</h1>
                            <p>Selamat datang para pecinta game, penggemar dunia digital yang penuh petualangan dan keajaiban!</p>
                            <br>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <br>
        <br>
        <br>

        <section id="about" class="about">
            <div class="container course pb-5 pt-5">
                <h2 class="text-center">News</h2>
                <br>
            <div class="row row-cols-1 row-cols-md-3 g-4 text-center custom-gallery">
                @forelse ($news as $row)
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="text-center mt-5 mb-2">
                            <img src="/images/{{ $row->image }}" alt="{{ $row->image }}" width="350" height="200">
                        </div>

                        <div class="card-body">
                            <p><strong>Judul:</strong> {{ $row->judul }}</p>
                            <p><strong>Kategori:</strong>{{ $row->category?->Nama }}</p>
                            <div class="content" id="content_{{ $row->id }}">
                                <div class="content-preview">
                                    <p><strong></strong> <span class="preview-content">{{ Str::limit($row->isi, 100) }}</span></p>
                                    <button class="read-more-btn" onclick="toggleContent({{ $row->id }})">Read More</button>
                                </div>
                                <div class="content-full" style="display: none;">
                                    <p><strong></strong> {{ $row->isi }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @empty
                    <div class="alert alert-danger">
                        Data news belum tersedia
                    </div>
                @endforelse

                <script>
                    function toggleContent(newsId) {
                        var previewContent = document.querySelector(`#content_${newsId} .preview-content`);
                        var contentPreview = document.querySelector(`#content_${newsId} .content-preview`);
                        var contentFull = document.querySelector(`#content_${newsId} .content-full`);
                        var readMoreBtn = document.querySelector(`#content_${newsId} .read-more-btn`);

                        if (previewContent.style.display === 'none') {
                            previewContent.style.display = 'inline';
                            contentFull.style.display = 'none';
                            readMoreBtn.innerText = 'Read More';
                        } else {
                            previewContent.style.display = 'none';
                            contentFull.style.display = 'block';
                            readMoreBtn.innerText = 'Read Less';
                        }
                    }
                </script>

            </div>
            </div>
        </section>
        <br>
        <br>
        <br>

        <footer class="text-center text-lg-start bg-dark py-3 text-white">

            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <img src="/pict/haikal.jpg" alt="haikal" class="img-fluid" width="50%">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Khaikal ID
                            </h6>
                            <p>
                                INI DI BUAT UNTUK MENYELESAIKAN TUGAS AKHIR WEB LANJUT
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Sosial Media
                            </h6>
                            <p>
                                <i class="fa-brands fa-instagram"></i>
                                <a href="https://www.instagram.com/haikalrabbani18?igsh=NXhnY2h2YTUybzds" class="text-reset">Instagram

                                </a>
                            </p>
                            <p>
                                <i class="fa-brands fa-facebook"></i>
                                <a href="https://www.facebook.com/khaikal.id?mibextid=LQQJ4d" class="text-reset">Facebook</a>
                            </p>
                            <p>
                                <i class="fa-brands fa-twitter"></i>
                                <a href="https://twitter.com/shiroitsme" class="text-reset">Twitter</a>
                            </p>
                            <p>
                                <i class="fa-brands fa-youtube"></i>
                                <a href="https://youtube.com/@officialshiro18?si=2TU-hYgxiPvQEzNB" class="text-reset">YouTube</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Hubungi Saya
                            </h6>
                            <p>
                                <i class="fa-solid fa-location-dot"></i>
                                Alamat: Jalan Pariwisata Suwela, Suntalangu, Kec. Suwela, Kab. Lombok Timur, NTB.
                            </p>
                            <p>
                                <i class="bi bi-envelope"></i>
                                mhmdkhaikal@gmail.com
                            </p>
                            <p><i class="bi bi-phone"></i> (+62) 82339263185</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
                Copyright &copy; 2024 Your Handsome Dev Khaikal ID | Design by Khaikal ID
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </main>
</body>

</html>
