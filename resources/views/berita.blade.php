@extends('layout.main')

@section('title', 'Berita - ASI AJABEKER')

@section('container')

    <!-- Content -->
    <div class="container mt-5 pt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 position-relative bg-primary" style="border-radius:1rem;">
                <img src="/img/gridbig.png" alt="" class="position-absolute top-50 start-0" style="z-index:-1; transform: translate(-30%,-50%)!important;">
                <h3 class="text-white p-4">Berita Terkini STAKN Palangka Raya</h3>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container pt-5">
        <div class="p-4 p-md-5 mb-4 mt-5 text-white rounded bg-dark position-relative d-flex">
            <div class="col-md-6 px-0">
                <h2 class="font-italic">Syukuran Hari Amal Bakti Kemenag ke 75 sekaligus penyerahan Ortaker IAKN Palangka Raya</h2>
                <p class="lead my-3 mb-5">IAKN Palangka Raya - Direktorat Jenderal Bimbingan Masyarakat (Bimas) Kristen menyelenggarakan acara Syukuran Hari Amal Bakti Kementerian Agama ke-75 dan Pembinaan Pegawai Ditjen Bimas Kristen Pusat dan Daerah di Gedung HM Rasjidi, MH Thamrin, Jakarta, Rabu (06/01).</p>
                <a href="#" class="text-white fw-normal btn btn-primary px-4"> Lihat Selengkapnya <i class="fa fa-chevron-right"></i></a>
            </div>
            <div class="col-md-5 px-0 ms-5">
                <img src="{{ asset('img/berita/penyerahan_ortaker_iaknpkyUP.jpg') }}" alt="" class="w-100 h-100">
            </div>
        </div>
    </div>

@endsection

@section('main_section')

    <main class="bg-light" style="margin-top:5rem !important; padding-bottom:5rem !important;">

        <div class="container position-relative">
            <div class="bg-white position-absolute top-0 start-50 translate-middle rounded-circle d-flex justify-content-center" style="height:50px; width:50px;">
                <i class="fab fa-gg-circle fa-2x align-items-center d-flex text-primary"></i>
            </div>

            <div class="row mb-2">
                <div class="col-md-6 mt-5">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">Syukuran</strong>
                            <h3 class="mb-0">Hari Amal Bakti Kemenag</h3>
                            <div class="mb-1 text-muted">Jan 06</div>
                            <p class="card-text mb-auto">IAKN Palangka Raya - Direktorat Jenderal Bimbingan Masyarakat (Bimas) Kristen menyelenggarakan acara Syukuran Hari Amal Bakti Kementerian Agama ke-75a</p>
                            <a href="#" class="stretched-link">Lihat Selengkapnya</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="{{ asset('img/berita/penyerahan_ortaker_iaknpkyUP.jpg') }}" alt="" width="200" height="250">                    
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">Syukuran</strong>
                            <h3 class="mb-0">Hari Amal Bakti Kemenag</h3>
                            <div class="mb-1 text-muted">Jan 06</div>
                            <p class="card-text mb-auto">IAKN Palangka Raya - Direktorat Jenderal Bimbingan Masyarakat (Bimas) Kristen menyelenggarakan acara Syukuran Hari Amal Bakti Kementerian Agama ke-75a</p>
                            <a href="#" class="stretched-link">Lihat Selengkapnya</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="{{ asset('img/berita/penyerahan_ortaker_iaknpkyUP.jpg') }}" alt="" width="200" height="250">                    
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection