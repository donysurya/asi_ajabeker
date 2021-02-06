@extends('layout.main')

@section('title', 'Aplikasi Sistem Informasi Analisis Jabatan dan Beban Kerja')

@section('container')

    <!-- Content -->
    <div class="bg-primary col-md-4 position-absolute end-0 shadow-lg" style="height:350px; z-index:0;"></div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 bg-white position-relative" style="margin-top:9rem; height:min-content; ">
                <!-- <div class="bg-white col-md-2 position-absolute top-0 start-0 translate-middle rounded-circle border border-5 border-primary" style="height:100px; z-index:-1;"></div>
                <div class="bg-white col-md-2 position-absolute top-100 start-50 translate-middle rounded-circle border border-5 border-primary" style="height:100px; z-index:0;"></div> -->
                <h3 class="mt-4 fw-light">Selamat Datang di Website Resmi</h3>
                <h2 class="fw-bolder mt-4">Aplikasi Sistem Informasi</h2>
                <h2 class="fw-bolder">Analisis Jabatan & Beban Kerja</h2>
                <h3 class="fw-normal mt-4">Institut Agama Kristen Negeri (IAKN)</h3>
                <h3 class="fw-normal">Palangka Raya</h3>
                <a href="{{ url('/login') }}" class="btn btn-primary mt-4 px-4"> Selanjutnya <i class="fa fa-chevron-right"></i></a>
            </div>
            <div id="myCarousel" class="carousel slide col-md-6 ms-auto" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner rounded-3 shadow-lg">
                    <div class="carousel-item active">
                        <img src="/img/1.jpg" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/2.jpg" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/3.jpg" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                    </div>
                </div>
                
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
        <img src="/img/grid.png" alt="" class="position-absolute start-50" style="z-index:-10; transform: translate(-18%,-70%)!important;">
    </div>

@endsection

@section('main_section')

    <main class="bg-light" style="margin-top:5rem !important; padding-bottom:5rem !important;">

        <div class="container position-relative">
            <div class="bg-white position-absolute top-0 start-50 translate-middle rounded-circle d-flex justify-content-center" style="height:50px; width:50px;">
                <i class="fab fa-gg-circle fa-2x align-items-center d-flex text-primary"></i>
            </div>

            <div class="row pt-5">
                
                <div class="col-md-6 mt-5 pt-5">
                    <center>
                    <div class="p-0 position-relative" style="width:max-content; z-index:0">
                        <img src="/img/grid2.png" alt="" class="position-absolute top-0 start-100 translate-middle" style="z-index:-1;">
                        <a href="" class="me-2"><img src="/img/anjab.png" alt="" class="border border-1 border-primary" width="170px" height="170px"></a> 
                        <a href=""><img src="/img/abk.png" alt="" class="border border-1 border-primary bg-light" width="170px" height="170px" style="z-index:1;"></a> 
                    </div>
                    </center>
                </div>
                <div class="row col-md-6 ms-auto">
                    <dt class="col-md-4"><p class="border border-1 border-secondary px-4 p-2 rounded"><i class="fa fa-newspaper"></i> Berita</p></dt>
                    <dd class="col-md-8"><p class="border border-0 border-secondary px-4 p-2 ps-0 rounded">03 Februari 2021</p></dd>
                    <div class="card me-4" style="width: 18rem;">
                        <img src="/img/iakn.png" class="card-img-top img-thumbnail mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">IAKN Palangka Raya</h5>
                            <p class="card-text">ANJAB</p>
                            <a href="#" class="btn btn-primary px-4">Selengkapnya <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="/img/iakn.png" class="card-img-top img-thumbnail mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">IAKN Palangka Raya</h5>
                            <p class="card-text">ABK</p>
                            <a href="#" class="btn btn-primary px-4">Selengkapnya <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection