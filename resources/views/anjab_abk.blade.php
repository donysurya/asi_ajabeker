@extends('layout.main')

@section('title', 'Tentang Anjab & ABK - ASI AJABEKER')

@section('container')

    <!-- Content -->
    <div class="container mt-5 pt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 position-relative bg-primary" style="border-radius:1rem;">
                <img src="/img/gridbig.png" alt="" class="position-absolute top-50 start-0" style="z-index:-1; transform: translate(-30%,-50%)!important;">
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
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>           
            </div>
        </div>

    </main>

@endsection