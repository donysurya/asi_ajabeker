@extends('layout.main')

@section('title', 'Hubungi Kami - ASI AJABEKER')

@section('container')

    <!-- Content -->
    <div class="container">
        <div class="row py-5 d-flex justify-content-center align-items-center">
            <div class="col-md-5 embed-responsive my-5 position-relative">
                <img src="{{ asset('img/gridbig.png') }}" alt="" class="position-absolute top-0 start-0" style="z-index:-1; transform: translate(-20%,-19%)!important;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.7160543748437!2d113.91367231526995!3d-2.2595852381008013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de34d256cd711a7%3A0x4530439c8bd6f779!2sSTAKN%20PALANGKA%20RAYA!5e0!3m2!1sid!2sid!4v1612532839318!5m2!1sid!2sid" frameborder="0" style="border-radius:1rem !important; width:100%; min-height:50vh;" class="rounded shadow-lg" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            
            <div class="col-md-5 ms-5 my-5 embed-responsive position-relative bg-light d-flex align-items-center justify-content-center shadow-lg" style="border-radius:1rem !important; height:40vh;">
                <img src="{{ asset('img/gridbig.png') }}" alt="" class="position-absolute top-100 start-100" style="z-index:-1; transform: translate(-75%,-80%)!important;">
                <div>
                    <h4 class="text-primary">Hubungi Kami</h4>
                    <p class="text-primary mb-0 mt-3"><i class="fa fa-tty"></i> (0536) 3241811 - 3241812</p>
                    <p class="text-primary mb-0"><i class="fa fa-fax"></i> (0536) 3241813</p>
                    <p class="text-primary mb-0"><i class="fa fa-envelope"></i> staknpalangkaraya@kemenag.go.id</p>
                    <p class="text-primary mb-0"><i class="fa fa-envelope"></i> itstakn@gmail.com</p>
                    <p class="text-primary mb-0"><i class="fa fa-envelope"></i> humas@stakn-palangkaraya.ac.id</p>
                    <h4 class="text-primary mt-4">Alamat</h4>
                    <p class="text-primary mb-0 mt-3"><i class="fa fa-map-marker-alt"></i> Jl. Tampung Penyang RTA Milono Km. 6, </p>
                    <p class="text-primary mb-0"><i class="fa fa-map-marker-alt text-light"></i> Palangkaraya, Kalimantan Tengah, 73112</p>
                </div>
            </div>
        </div>
    </div>

@endsection