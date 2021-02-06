@extends('layout.main')

@section('title', 'Struktur Organisasi - ASI AJABEKER')

@section('container')

    <!-- Content -->
    <div class="container mt-5 pt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 position-relative bg-primary" style="border-radius:1rem;">
                <img src="{{ asset('img/gridbig.png') }}" alt="" class="position-absolute top-50 start-0" style="z-index:-1; transform: translate(-30%,-50%)!important;">
                <h3 class="text-white p-4">Struktur Organisasi</h3>
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

                <div class="col-md-10">

                    <img src="{{ asset('img/strukturiakn.png') }}" alt="" srcset="" class="w-100">

                </div>  
                                
            </div>
        </div>

    </main>

@endsection