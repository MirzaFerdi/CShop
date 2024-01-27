<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Product Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg fw-bold p-4 px-5" style="background-color: #f0f0f0;">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="#">CShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#produk">Produk</a>
                    </li>
                    <div class="d-flex align-self-center">
                        <div class="vr" style="width: 2px; height: 25px"></div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="carousel">
        <img src="https://images.unsplash.com/photo-1629934266257-69467879efa7?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="img-fluid mb-5"
            style="
          height: 100vh;
          width: 100vw;
          object-fit: cover;
          filter: brightness(0.4);
        "
            alt="..." />
        <div class="position-absolute top-50 start-50 translate-middle carousel-caption">
            <h1 class="display-1 fw-bold">Computer Shop</h1>
            <p class="fs-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptatum.
            </p>
        </div>
    </div>



    <div class="container-lg p-5" id="produk" style="padding: 4rem 0">
        <div class="position-relative py-5">
            <h2 class="fw-bold text-center">Produk</h2>
            <div class="position-absolute rounded start-50 translate-middle-x"
                style="bottom: 2.9rem; height: 0.3rem; width: 5rem; background: #000"></div>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($product as $data)
                <div class="col">
                    <div class="card h-100 shadow border border-0">
                        <div class="card-header border border-0 d-flex justify-content-between ">
                            <small
                                class="text-body-secondary fw-medium align-self-center">{{ $data->category->category_name }}</small>
                        </div>
                        <img src="{{ asset('storage/image/' . $data->image) }}" class="card-img-top" alt="..."
                            style="height: 13rem; object-fit: contain;" />
                        <div class="card-body">

                            <h6 class="card-title">{{ $data->product_name }}</h6>
                            <p class="card-text">
                                {{ $data->description }}
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between ">
                            <small class="text-body-secondary align-self-center">Rp. {{ $data->price }}</small>
                            <button type="button" class="btn btn-dark btn-sm">Add To Chart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <footer>
        <div>
            <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(39, 48, 54, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(39, 48, 54, 1)" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                    d="M0,196L20,228.7C40,261,80,327,120,334.8C160,343,200,294,240,261.3C280,229,320,212,360,245C400,278,440,359,480,351.2C520,343,560,245,600,245C640,245,680,343,720,351.2C760,359,800,278,840,245C880,212,920,229,960,212.3C1000,196,1040,147,1080,179.7C1120,212,1160,327,1200,383.8C1240,441,1280,441,1320,400.2C1360,359,1400,278,1440,228.7C1480,180,1520,163,1560,155.2C1600,147,1640,147,1680,196C1720,245,1760,343,1800,359.3C1840,376,1880,310,1920,269.5C1960,229,2000,212,2040,171.5C2080,131,2120,65,2160,57.2C2200,49,2240,98,2280,122.5C2320,147,2360,147,2400,138.8C2440,131,2480,114,2520,122.5C2560,131,2600,163,2640,147C2680,131,2720,65,2760,98C2800,131,2840,261,2860,326.7L2880,392L2880,490L2860,490C2840,490,2800,490,2760,490C2720,490,2680,490,2640,490C2600,490,2560,490,2520,490C2480,490,2440,490,2400,490C2360,490,2320,490,2280,490C2240,490,2200,490,2160,490C2120,490,2080,490,2040,490C2000,490,1960,490,1920,490C1880,490,1840,490,1800,490C1760,490,1720,490,1680,490C1640,490,1600,490,1560,490C1520,490,1480,490,1440,490C1400,490,1360,490,1320,490C1280,490,1240,490,1200,490C1160,490,1120,490,1080,490C1040,490,1000,490,960,490C920,490,880,490,840,490C800,490,760,490,720,490C680,490,640,490,600,490C560,490,520,490,480,490C440,490,400,490,360,490C320,490,280,490,240,490C200,490,160,490,120,490C80,490,40,490,20,490L0,490Z">
                </path>
            </svg>

        </div>
        <!-- Grid container -->
        <div class="container-flex p-4 pb-0 border border-0" style="background-color: #273036; color: white;">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            CShop
                        </h6>
                        <p class="paragraf">
                            CShop adalah sebuah website yang menyediakan berbagai macam produk komputer.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
                        <p>
                            <a href="#" class="text-white text-decoration-none">Home</a>
                        </p>
                        <p>
                            <a href="#" class="text-white text-decoration-none">Produk</a>
                        </p>
                        {{-- <p>
                            <a href="#" class="text-white text-decoration-none">Profil</a>
                        </p>
                        <p>
                            <a href="#" class="text-white text-decoration-none">Produk</a>
                        </p> --}}
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Lainnya</h6>
                        <p>
                            <a href="#" class="text-white text-decoration-none">Login</a>
                        </p>
                        <p>
                            <a href="#" class="text-white text-decoration-none">Bergabung Sekarang</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Alamat & Kontak
                        </h6>
                        <p>
                            <i class="fas fa-home mr-3"></i> Jl. Sepanjang Jalan, No.12,
                            Lumajang, Jawa Timur
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> cshop@gmail.com
                        </p>
                        <p><i class="fas fa-phone mr-3"></i> +62 08123456789</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3" />

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            <p>Copyright © 2023 Mirza Ferdi - All Right Reserved</p>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
