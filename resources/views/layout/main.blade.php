<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/19b42cd13d.js" crossorigin="anonymous"></script>    

    <script src="{{ asset('js/jquery.js') }}"></script> 
	<script src="{{ asset('js/bootstrap.js') }}"></script>
    
    <style type="text/css">
        [aria-expanded="false"] > .expanded, [aria-expanded="true"] > .collapsed {
            display: none;
        }
    </style>
    
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .bg-primary {
            background-color: #990099!important;
        }
        
        .btn-primary {
            background-color: #990099!important;
        }

        .text-primary {
            color: #990099!important;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('carousel/carousel.css') }}" rel="stylesheet">


    <title>@yield('title')</title>
</head>
<body>
    
    <!-- Navigation Bar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo2.png') }}" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-4">
                            <a class="nav-link text-primary" href="{{ url('/faq') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ url('/contact_us') }}">Hubungi Kami</a>
                        </li>
                    </ul>
                    <a href="{{ url('/login') }}" class="btn btn-primary ms-5 px-4">Login</a>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item me-4">
                            <a class="nav-link text-white" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu mt-2" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-primary" href="{{ url('/visi_misi') }}">Visi & Misi</a></li>
                                <li><a class="dropdown-item text-primary" href="{{ url('/struktur_organisasi') }}">Struktur Organisasi</a></li>
                                <li><a class="dropdown-item text-primary" href="{{ url('/tentang') }}">Tentang IAKN</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-white" href="{{ url('/berita') }}">Berita</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-white" href="{{ url('/anjab_abk') }}">Tentang Anjab & ABK</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-white" href="{{ url('/bacaan') }}">Bahan Bacaan</a>
                        </li>
                    </ul>

                    <form class="d-flex ms-auto">
                        <div class="input-group">
                            <input class="form-control bg-light border-0 small" type="search" placeholder="Pencarian" aria-label="Search">
                            <button class="btn btn-light text-primary" type="submit"> <i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Content -->
    
    @yield('container')
    
    @yield('main_section')

    <footer class="bg-primary">
        <div class="container">
            <div class="row d-flex justify-content-between pt-5">
                <div class="col-md-4 mb-4">
                    <h5 class="text-white">HUBUNGI KAMI</h4>
                    <h6 class="text-white">Institut Agama Kristen Negeri Palangkaraya</h5>
                    <p class="text-white mb-0 mt-4"><i class="fa fa-map-marker-alt"></i> Jl. Tampung Penyang RTA Milono Km. 6, </p>
                    <p class="text-white mb-0"><i class="fa fa-map-marker-alt text-primary"></i> Palangkaraya, Kalimantan Tengah, 73112</p>
                    <p class="text-white mb-0"><i class="fa fa-tty"></i> (0536) 3241811 - 3241812</p>
                    <p class="text-white mb-0"><i class="fa fa-fax"></i> (0536) 3241813</p>
                    <p class="text-white mb-0"><i class="fa fa-envelope"></i> staknpalangkaraya@kemenag.go.id</p>
                    <p class="text-white mb-0"><i class="fa fa-envelope"></i> itstakn@gmail.com</p>
                    <p class="text-white mb-0"><i class="fa fa-envelope"></i> humas@stakn-palangkaraya.ac.id</p>
                </div>
                <div class="col-md-4">
                    <h4 class="text-white" style="justify-content: center; align-items: center; display: flex;">TENTANG IAKN</h4>
                    <center><img src="{{ asset('img/iakn.png') }}" alt="" width="180" height="180" class="mt-3"></center>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/logo3.png') }}" alt="" class="d-flex ms-auto">
                    <p class="text-white mb-0 text-end mt-3"> Adalah sebuah Aplikasi Sistem Informasi </p>
                    <p class="text-white mb-0 text-end"> yang bertujuan untuk melakukan Analisis Jabatan </p>
                    <p class="text-white mb-0 text-end"> dan Analisis Beban Kerja di </p>
                    <p class="text-white mb-0 text-end"> Institut Agama Kristen Negeri Palangka Raya </p>
                    <h5 class="text-white mt-3 mb-3 text-end"> Follow Kami </h5>
                    <a href="" class="text-white ms-3 float-end"><i class="fa fa-instagram fa-2x"></i></a> 
                    <a href="" class="text-white ms-3 float-end"><i class="fa fa-twitter fa-2x"></i></a> 
                    <a href="" class="text-white ms-3 float-end"><i class="fa fa-facebook-square fa-2x"></i></a> 
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="d-flex justify-content-center pt-4 border-top">
                <p class="text-white">Copyright &copy; 2020 &bull; All Right Reserved</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   
</body>
</html>