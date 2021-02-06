<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/19b42cd13d.js" crossorigin="anonymous"></script>
    
    <style type="text/css">
        .row {  --bs-gutter-x: 0rem;
                --bs-gutter-y: 0;
                display: flex;
                flex-wrap: wrap;
                margin-top: calc(var(--bs-gutter-y) * -1);
                margin-right: calc(var(--bs-gutter-x)/ -2);
                margin-left: calc(var(--bs-gutter-x)/ -2); }
        .bg-primary {
            background-color: #990099!important;
        }
        
        .btn-primary {
            background-color: #990099!important;
        }
    </style>

    <title>Login</title>
</head>
<body>
    
    <!-- Navigation Bar -->    
    <div class="row d-flex align-items-center">
        <div class="col-md-4 bg-primary min-vh-100">
            <div class="container mt-2">
                <a href="{{ url('/') }}" class="btn text-white d-flex align-items-center ps-3"><i class="fa fa-arrow-circle-left fa-2x me-2"></i> Halaman Utama</a> 
            </div>
        </div>

        <div class="container position-absolute">
            <div class="row">
                <div class="col-md-10 shadow-lg d-flex mx-auto" style="border-radius: 2rem!important;">
                    <div class="col-md-6 bg-primary" style="border-bottom-left-radius: 2rem!important; border-top-left-radius: 2rem!important;">
                        <div class="d-flex justify-content-between m-4 mb-5">
                            <img src="{{ asset('img/logo3.png') }}" alt="">
                            <p></p>
                            <img src="{{ asset('img/iakn.png') }}" alt="" class="d-flex ms-auto"  width="80" height="80">
                        </div>
                        
                        <div class="mt-5 pt-4 text-white text-center">
                            <h4 class="fw-light">Aplikasi Sistem Informasi</h4>
                            <h4 class="fw-light">Analisis Jabatan & Analisis Beban Kerja</h4>
                            <h3 class="pt-2 fw-normal">Institut Agama Kristen Negeri</h3>
                            <h3 class="fw-normal">Palangka Raya</h3>
                        </div>

                        <div class="d-flex justify-content-between ms-5 mt-5 pt-4">
                            <p class="text-white fw-light">www.stakn-palangkaraya.ac.id</p>
                        </div>
                    </div>
                    <div class="col-md-6 bg-light d-flex justify-content-center position-relative" style="border-bottom-right-radius: 2rem!important; border-top-right-radius: 2rem!important;">
                    <img src="{{ asset('img/gridbig.png') }}" alt="" class="position-absolute top-0 start-100 translate-middle" style="z-index:-1; transform: translate(-75%,-25%)!important;">
                        <form class="mt-5 col-md-8">
                            <div class="mb-3">
                                <input type="email" class="form-control p-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Pengguna">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control p-2" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <img src="{{ asset('img/captcha.png') }}" alt="">
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="fw-light">*Case Sensitive</p>
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <input type="text" class="form-control p-2" id="exampleInputCaptcha1" placeholder="Captcha">
                            </div>
                            <center><button type="submit" class="btn btn-primary p-2 px-5">LOGIN <i class="fa fa-arrow-circle-right text-white"></i></button></center>
                            <div class="d-flex justify-content-center mt-4">
                                <p class="fw-light p-0 m-0">kendala teknis hubungi</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="fw-light"><i class="fa fa-envelope"></i> itstakn@gmail.com</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>
</html>