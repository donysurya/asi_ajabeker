@extends('layout.main')

@section('title', 'Tentang Anjab & ABK - ASI AJABEKER')

@section('container')

    <!-- Content -->
    <div class="container mt-5 pt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 position-relative bg-primary" style="border-radius:1rem;">
                <img src="{{ asset('img/gridbig.png') }}" alt="" class="position-absolute top-50 start-0" style="z-index:-1; transform: translate(-30%,-50%)!important;">
                <h3 class="text-white p-4">Tentang Anjab & ABK</h3>
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

            <div class="row d-flex justify-content-center align-items-center pt-5">

                <div class="col-md-5">

                    <div id="accordion">

                        <div class="card mb-4">
                            <a class="card-link btn btn-primary p-3 d-flex justify-content-between" data-toggle="collapse" href="#anjab" aria-expanded="false" aria-controls="anjab">
                                Analisis Jabatan (Anjab)
                                <span class="collapsed"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded"><i class="fa fa-minus-circle"></i></span> 
                            </a>
                            <div id="anjab" class="collapse">
                                <div class="card-body">
                                    <p class="fw-light">Analisis Jabatan merupakan suatu kegiatan pengumpulan, penilaian dan penyusunan berbagai informasi secara sistematis yang berkaitan dengan jabatan.</p> 
                                    <a href="" class="fw-normal mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Lihat Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>  
                       
                <div class="col-md-5">
                    
                    <div id="accordion">

                        <div class="card mb-4">
                            <a class="card-link btn btn-primary p-3 d-flex justify-content-between" data-toggle="collapse" href="#abk" aria-expanded="false" aria-controls="abk">
                                Analisis Beban Kerja (ABK)
                                <span class="collapsed"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded"><i class="fa fa-minus-circle"></i></span> 
                            </a>
                            <div id="abk" class="collapse">
                                <div class="card-body">
                                    <p class="fw-light">Analisa beban kerja adalah proses untuk menetapkan jumlah jam kerja orang yang digunakan atau dibutuhkan untuk merampungkan suatu pekerjaan dalam waktu tertentu, atau dengan kata lain analisis beban kerja bertujuan untuk menentukan berapa jumlah personalia dan berapa jumlah tanggung jawab atau beban kerja yang tepat dilimpahkan kepada seorang petugas.</p>
                                    <a href="" class="fw-normal mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                        Lihat Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>           
            </div>
        </div>

    </main>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content bg-primary">
                <div class="modal-header" style="border-bottom: 1px solid #ffffff;">
                    <img src="{{ asset('img/logo3.png') }}" alt="">
                    <span class="border-start border border-1 ms-3" style="height:5rem !important;"></span>
                    <h4 class="modal-title ms-4 text-white fw-normal" id="staticBackdropLabel">Analisis Jabatan IAKN Palangkaraya</h4>
                    <p style="margin: -.5rem -.5rem -.5rem auto;"></p>
                </div>
                <div class="modal-body">

                    <div id="accordion" class="mt-4 pb-4">
                        <div class="card m-1">
                            <a class="card-link btn btn-light text-primary p-2 d-flex justify-content-start" style="box-shadow:none;" data-toggle="collapse" href="#detailanjab" aria-expanded="false" aria-controls="detailanjab">
                                <span class="collapsed me-2"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded me-2"><i class="fa fa-minus-circle"></i></span> 
                                Analisis Jabatan (Anjab)
                            </a>
                            <div id="detailanjab" class="collapse p-2">
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 1
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 2
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 3
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 4
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 5
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1">
                            <a class="card-link btn btn-light text-primary p-2 d-flex justify-content-start" style="box-shadow:none;" data-toggle="collapse" href="#detailanjab2" aria-expanded="false" aria-controls="detailanjab2">
                                <span class="collapsed me-2"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded me-2"><i class="fa fa-minus-circle"></i></span> 
                                Analisis Jabatan (Anjab)
                            </a>
                            <div id="detailanjab2" class="collapse p-2">
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 1
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 2
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 3
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 4
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 5
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1">
                            <a class="card-link btn btn-light text-primary p-2 d-flex justify-content-start" style="box-shadow:none;" data-toggle="collapse" href="#detailanjab3" aria-expanded="false" aria-controls="detailanjab3">
                                <span class="collapsed me-2"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded me-2"><i class="fa fa-minus-circle"></i></span> 
                                Analisis Jabatan (Anjab)
                            </a>
                            <div id="detailanjab3" class="collapse p-2">
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 1
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 2
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 3
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 4
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 5
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1">
                            <a class="card-link btn btn-light text-primary p-2 d-flex justify-content-start" style="box-shadow:none;" data-toggle="collapse" href="#detailanjab4" aria-expanded="false" aria-controls="detailanjab4">
                                <span class="collapsed me-2"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded me-2"><i class="fa fa-minus-circle"></i></span> 
                                Analisis Jabatan (Anjab)
                            </a>
                            <div id="detailanjab4" class="collapse p-2">
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 1
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 2
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 3
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 4
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 5
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1">
                            <a class="card-link btn btn-light text-primary p-2 d-flex justify-content-start" style="box-shadow:none;" data-toggle="collapse" href="#detailanjab5" aria-expanded="false" aria-controls="detailanjab5">
                                <span class="collapsed me-2"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded me-2"><i class="fa fa-minus-circle"></i></span> 
                                Analisis Jabatan (Anjab)
                            </a>
                            <div id="detailanjab5" class="collapse p-2">
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 1
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 2
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 3
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 4
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Jabatan 5
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer" style="border-top: 1px solid #ffffff;">
                    <button type="button" class="btn btn-white bg-white text-primary rounded" data-bs-dismiss="modal"><i class="fa fa-arrow-circle-left me-2"></i>Kembali</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content bg-primary">
                <div class="modal-header" style="border-bottom: 1px solid #ffffff;">
                    <img src="{{ asset('img/logo3.png') }}" alt="">
                    <span class="border-start border border-1 ms-3" style="height:5rem !important;"></span>
                    <h4 class="modal-title ms-4 text-white fw-normal" id="staticBackdropLabel">Analisis Beban Kerja IAKN Palangkaraya</h4>
                    <p style="margin: -.5rem -.5rem -.5rem auto;"></p>
                </div>
                <div class="modal-body">

                    <div id="accordion" class="mt-4 pb-4">
                        <div class="card m-1">
                            <a class="card-link btn btn-light text-primary p-2 d-flex justify-content-start" style="box-shadow:none;" data-toggle="collapse" href="#detailabk" aria-expanded="false" aria-controls="detailabk">
                                <span class="collapsed me-2"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded me-2"><i class="fa fa-minus-circle"></i></span> 
                                Analisis Beban Kerja (ABK)
                            </a>
                            <div id="detailabk" class="collapse p-2">
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 1
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 2
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 3
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 4
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 5
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1">
                            <a class="card-link btn btn-light text-primary p-2 d-flex justify-content-start" style="box-shadow:none;" data-toggle="collapse" href="#detailabk2" aria-expanded="false" aria-controls="detailabk2">
                                <span class="collapsed me-2"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded me-2"><i class="fa fa-minus-circle"></i></span> 
                                Analisis Beban Kerja (ABK)
                            </a>
                            <div id="detailabk2" class="collapse p-2">
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 1
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 2
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 3
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 4
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 5
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1">
                            <a class="card-link btn btn-light text-primary p-2 d-flex justify-content-start" style="box-shadow:none;" data-toggle="collapse" href="#detailabk3" aria-expanded="false" aria-controls="detailabk3">
                                <span class="collapsed me-2"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded me-2"><i class="fa fa-minus-circle"></i></span> 
                                Analisis Beban Kerja (ABK)
                            </a>
                            <div id="detailabk3" class="collapse p-2">
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 1
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 2
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 3
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 4
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 5
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1">
                            <a class="card-link btn btn-light text-primary p-2 d-flex justify-content-start" style="box-shadow:none;" data-toggle="collapse" href="#detailabk4" aria-expanded="false" aria-controls="detailabk4">
                                <span class="collapsed me-2"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded me-2"><i class="fa fa-minus-circle"></i></span> 
                                Analisis Beban Kerja (ABK)
                            </a>
                            <div id="detailabk4" class="collapse p-2">
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 1
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 2
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 3
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 4
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 5
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1">
                            <a class="card-link btn btn-light text-primary p-2 d-flex justify-content-start" style="box-shadow:none;" data-toggle="collapse" href="#detailabk5" aria-expanded="false" aria-controls="detailabk5">
                                <span class="collapsed me-2"><i class="fa fa-plus-circle"></i></span> 
                                <span class="expanded me-2"><i class="fa fa-minus-circle"></i></span> 
                                Analisis Beban Kerja (ABK)
                            </a>
                            <div id="detailabk5" class="collapse p-2">
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 1
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 2
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 3
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 4
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                                <div class="card-body p-2">
                                    <a class="card-link btn btn-light text-primary d-flex justify-content-between" data-toggle="tooltip" data-placement="top" title="Download Panduan" href="#">
                                        Analisis Beban Kerja 5
                                        <span><i class="fa fa-download"></i></span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer" style="border-top: 1px solid #ffffff;">
                    <button type="button" class="btn btn-white bg-white text-primary rounded" data-bs-dismiss="modal"><i class="fa fa-arrow-circle-left me-2"></i>Kembali</button>
                </div>
            </div>
        </div>
    </div>

@endsection