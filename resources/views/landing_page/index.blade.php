@extends('layout.main')

@section('title', 'Aplikasi Sistem Informasi Analisis Jabatan dan Beban Kerja')

@section('container')

    <!-- Content -->
    <div class="bg-primary col-md-4 position-absolute end-0 shadow-lg" style="height:350px; z-index:0;"></div>
    <div class="container">
        <div class="row gx-5 mb-3">
            <div class="col-md-5 bg-white pt-3 mt-4">
                <h4 class="mt-4 fw-light">Selamat Datang di Website Resmi</h3>
                <h3 class="fw-bolder mt-4">Aplikasi Sistem Informasi</h2>
                <h3 class="fw-bolder">Analisis Jabatan & Beban Kerja</h2>
                <h4 class="fw-normal mt-4">Institut Agama Kristen Negeri (IAKN)</h3>
                <h4 class="fw-normal">Palangka Raya</h3>
                <a href="{{ url('/login') }}" class="btn btn-primary mt-4 px-4"> Selanjutnya <i class="fa fa-chevron-right"></i></a>
            </div>
            <div id="myCarousel" class="carousel slide col-md-7 ms-auto mb-5" data-bs-ride="carousel">
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
        {{-- <img src="/img/grid.png" alt="" class="position-absolute start-50" style="z-index:-10; transform: translate(-18%,-70%)!important;"> --}}
    </div>

@endsection

@section('main_section')

    <main class="bg-light">

        <div class="container position-relative">
            <div class="bg-white position-absolute top-0 start-50 translate-middle rounded-circle d-flex justify-content-center" style="height:50px; width:50px;">
                <i class="fab fa-gg-circle fa-2x align-items-center d-flex text-primary"></i>
            </div>

            <div class="row gx-5 py-5">
                
                <div class="col-md-6 p-5 d-flex justify-content-center align-items-center">
                    <div class="p-0 position-relative d-flex align-items-center" style="z-index:0">
                        <img src="/img/gridbig.png" alt="" class="position-absolute top-0 start-50" style="z-index:-1; transform: translate(-50%,-25%)!important;">
                        <a href="" class="me-2"><img src="/img/anjab.png" alt="" class="border bg-light" width="170px" height="170px" style="z-index:1; border-radius:1rem !important;"></a> 
                        <a href=""><img src="/img/abk.png" alt="" class="border bg-light" width="170px" height="170px" style="z-index:1; border-radius:1rem !important;"></a> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 mt-2">
                        <div class="row">
                            <dt class="col-md-4"><p class="border border px-4 p-2 rounded text-primary"><i class="fa fa-newspaper"></i> Berita</p></dt>
                            <dd class="col-md-8"><p class="border border-0 border-secondary px-4 p-2 ps-0 rounded">03 Februari 2021</p></dd>
                        </div>
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col-md-7 p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">Syukuran</strong>
                                <h3 class="mb-0">Hari Amal Bakti Kemenag</h3>
                                <div class="mb-1 text-muted">Jan 06</div>
                                <p class="card-text mb-auto">IAKN Palangka Raya - Direktorat Jenderal Bimbingan Masyarakat (Bimas) Kristen menyelenggarakan acara Syukuran Hari Amal Bakti Kementerian Agama ke-75a</p>
                                <a href="" class="fw-normal mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                            <div class="col-md-5 d-none d-lg-block">
                                <img src="{{ asset('img/berita/penyerahan_ortaker_iaknpkyUP.jpg') }}" alt="" class="h-100 w-100">                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection