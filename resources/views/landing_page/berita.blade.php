@extends('layout.main')

@section('title', 'Berita - ASI AJABEKER')

@section('container')

    <!-- Content -->
    <div class="container mt-5 pt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 position-relative bg-primary" style="border-radius:1rem;">
                <img src="{{ asset('img/gridbig.png') }}" alt="" class="position-absolute top-50 start-0" style="z-index:-1; transform: translate(-30%,-50%)!important;">
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
                <button type="button" class="text-white fw-normal btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Lihat Selengkapnya <i class="fa fa-chevron-right"></i>
                </button>
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
                        <div class="col-md-8 p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">Syukuran</strong>
                            <h3 class="mb-0">Hari Amal Bakti Kemenag</h3>
                            <div class="mb-1 text-muted">Jan 06</div>
                            <p class="card-text mb-auto">IAKN Palangka Raya - Direktorat Jenderal Bimbingan Masyarakat (Bimas) Kristen menyelenggarakan acara Syukuran Hari Amal Bakti Kementerian Agama ke-75a</p>
                            <a href="" class="fw-normal mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Lihat Selengkapnya
                            </a>
                        </div>
                        <div class="col-md-4 d-none d-lg-block">
                            <img src="{{ asset('img/berita/penyerahan_ortaker_iaknpkyUP.jpg') }}" alt="" class="h-100 w-100">                    
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-md-8 p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">Syukuran</strong>
                            <h3 class="mb-0">Hari Amal Bakti Kemenag</h3>
                            <div class="mb-1 text-muted">Jan 06</div>
                            <p class="card-text mb-auto">IAKN Palangka Raya - Direktorat Jenderal Bimbingan Masyarakat (Bimas) Kristen menyelenggarakan acara Syukuran Hari Amal Bakti Kementerian Agama ke-75a</p>
                            <a href="" class="fw-normal mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Lihat Selengkapnya
                            </a>
                        </div>
                        <div class="col-md-4 d-none d-lg-block">
                            <img src="{{ asset('img/berita/penyerahan_ortaker_iaknpkyUP.jpg') }}" alt="" class="h-100 w-100">                    
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Button trigger modal -->
    

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Syukuran Hari Amal Bakti Kemenag ke 75 sekaligus penyerahan Ortaker IAKN Palangka Raya</h5>
                    
                </div>
                <div class="modal-body">
                    <p class="fw-light">06 January 2021</p> 
                    <img src="{{ asset('img/berita/penyerahan_ortaker_iaknpkyUP.jpg') }}" alt="" class="w-100" style="height:300px;">
                    <p class="mt-4 fw-light">IAKN Palangka Raya - Direktorat Jenderal Bimbingan Masyarakat (Bimas) Kristen menyelenggarakan acara Syukuran Hari Amal Bakti Kementerian Agama ke-75 dan Pembinaan Pegawai Ditjen Bimas Kristen Pusat dan Daerah di Gedung HM Rasjidi, MH Thamrin, Jakarta, Rabu (06/01). Acara tersebut dihadiri oleh Menteri Agama, Pimpinan Ditjen Bimas Kristen dan jajarannya, serta para Ketua dan Rektor PTKKN se Indonesia. Turut pula hadir Rektor IAKN Palangka Raya Telhalia, M.Th.,  D.Th didampingi oleh Plt. Wakil Rektor Bidang Administrasi Umum, Perencanaan dan Keuangan Tirta Susila, D.Th. </p>
                    <p class="mt-2 fw-light">Menteri Agama Yaqut Cholil Qoumas atau dikenal juga dengan Gus Yaqut, dalam sambutannya mengajak seluruh hadirin untuk mencintai Indonesia dan menjunjung tinggi nilai kemanusiaan. "Jangan pernah lelah mencintai Indonesia. Mereka yang bukan saudara seiman adalah saudaramu dalam kemanusiaan.",  kata Menag.</p>
                    <p class="mt-2 fw-light">Gus Yaqut mengajak untuk menjadikan agama sebagai sarana meraih kehidupan yang rukun dan damai. "Saya harap kita semua bisa menyampaikan pesan ini kepada saudara-saudara kita yang lain. Dengan demikian, saya yakin kehidupan kita akan lebih baik, dan Indonesia lebih damai, tenang, sejuk, tenteram dalam membangun bangsa Indonesia," lanjut Gus Yaqut.</p>
                    <p class="mt-2 fw-light">Dirjen Bimas Kristen, Prof. Dr. Thomas Pentury, M.Si, pada laporannya menyampaikan syukuran dan pembinaan digelar untuk memberikan pencerahan sebagai bekal melaksanakan tugas di tahun 2021 serta memberikan pelayanan terbaik bagi umat dan merawat kerukunan.</p>
                    <p class="mt-2 fw-light">Thomas pun melaporkan beberapa hal yang menjadi perhatian Ditjen Bimas Kristen. Pertama, terkait implementasi Peraturan Bersama Menteri (PBM) Nomor 9 dan 8 Tahun 2006 tentang pedoman pelaksanaan tugas kepada daerah/wakil kepala daerah dalam pemeliharaan kerukunan umat beragama, pemberdayaan Forum Kerukunan Umat Beragama (FKUB), dan pendirian rumah ibadah.</p>
                    <p class="mt-2 fw-light">Kedua, terkait Program Kita Cinta Papua yang digalang oleh Menag Fachrul Razi (Periode 2019-2020), yang sudah memberi afirmasi bagi anak-anak Papua untuk melanjutkan pendidikan di berbagai Perguruan Tinggi di Indonesia.</p>
                    <p class="mt-2 fw-light">Ketiga, perihal ketersediaan guru pada lembaga pendidikan di Ditjen Bimas Kristen. Keempat, perkembangan transformasi kelembagaan Perguruan Tinggi Keagamaan Kristen, dari Sekolah Tinggi menjadi Institut, dan Institut menjadi Universitas.</p>
                    <p class="mt-2 fw-light">Dirjen Bimas Kristen berharap agar pengalaman di tahun 2020 dijadikan pelajaran berharga untuk memperbaiki kinerja dan meningkatkan mutu pelayanan di tahun 2021 dan tahun-tahun mendatang. "Semoga kita semua senantiasa dalam kebaikan dan bisa memberikan pelayanan terbaik bagi umat," tutup Thomas Pentury.</p>
                    <p class="mt-2 fw-light">Pada acara tersebut pula dilakukan penyerahan Organisasi dan Tata Kerja (Ortaker) IAKN Palangka Raya. Hal ini sebagai tindak lanjut dari perubahan status Sekolah Tinggi Agama Kristen Negeri (STAKN) Palangka Raya menjadi Institut Agama Kristen Negeri (IAKN) Palangka Raya yang telah disahkan beberapa waktu lalu melalui Peraturan Presiden.</p>
                    <p class="mt-2 fw-light">Hingga akhir, acara berlangsung baik dengan menerapkan Protokol Kesehatan Covid-19 yang dianjurkan oleh Pemerintah.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white text-primary border border-primary rounded" data-bs-dismiss="modal"><i class="fa fa-arrow-circle-left me-2"></i>Kembali</button>
                </div>
            </div>
        </div>
    </div>

@endsection