<!DOCTYPE html>
<html lang="en">

<head>
    <title>Datta Able Free Bootstrap 4 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" >

</head>

<body>
    @php
    date_default_timezone_set("Europe/Istanbul");
  @endphp
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-layers"></i>
                        <!-- <i class="feather "><img width="40px" src="./assets/images/favicon.ico"></i> -->

                    </div>
                    <span class="b-title">Proje Takip Sistemi
                    </span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Dönemler</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                        class="nav-item active ">
                        <a href="{{ route('bahar') }}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">2021/2022
                                Bahar</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="{{ route('goz') }}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">2021/2022
                                Göz</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Hoca</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select"
                        class="nav-item">
                        <a href="{{ route('hoca_bilgileri') }}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-file-text"></i></span><span class="pcoded-mtext">Hoca
                                Bilgileri</span></a>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="{{ route('hoca_ekle') }}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-server"></i></span><span class="pcoded-mtext">Hoca
                                Ekle</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Öğrenci</label>
                    </li>
                    <li data-username="Charts Morris" class="nav-item"><a href="{{ route('ogrenci_bilgileri') }}"
                            class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-file-text"></i></span><span class="pcoded-mtext">Öğrenci
                                bilgieri</span></a></li>
                    <li data-username="Maps Google" class="nav-item"><a href="{{ route('ogrenci_ekle') }}" class="nav-link "><span
                                class="pcoded-micon"><i class="feather icon-server"></i></span><span
                                class="pcoded-mtext">Öğrenci Ekle</span></a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">Datta Able</span>
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i
                            class="feather icon-maximize"></i></a></li>

            </ul>
            <ul class="navbar-nav ml-auto">


                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a class="dropdown-item"><i class="feather icon-settings"></i>
                                        System Yönetici</a></li>
                                <li><a class="dropdown-item"><i class="feather icon-mail"></i> My
                                        test123@gmail.com</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <!-- <div class="card-header">
                                        <h5>Basic Componant</h5>
                                    </div> -->
                                    <div class="card-body">
                                        <h5>Hoca</h5>
                                        <hr>
                                        <form action="">
                                            <div class="row">

                                                <div class="col-md-6">


                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Dönem</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>2021/2022 Bahar</option>
                                                            <option>2021/2022 Göz</option>

                                                        </select>
                                                    </div>


                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Öğrenci</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Mehmet Ali</option>
                                                            <option>Zeynep Sarı</option>
                                                            <option>Ahmet Faruk</option>

                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary">Ara</button>
                                                </div>
                                            </div>
                                        </form>



                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12  ">
                                <div class="card card-social .card-body ">

                                    <div class="card-block border-bottom">
                                        <h5>Öğrenci Bilgileri</h5>
                                        <hr class="w-25 ml-0">
                                        <div class="row align-items-center justify-content-center">

                                            <div class="col-auto">
                                                <i class="fab  text-primary f-36"><img width="150px"
                                                        src="./assets/images/user/avatar-2.jpg" alt=""></i>
                                            </div>
                                            <div class="col ">
                                                <h6 class="mb-3">Adı: <span class="text-muted ml-1">Mehmet</span></h6>
                                                <h6 class="mb-3">Soyadı: <span class="text-muted ml-1">Ali</span></h6>
                                                <h6 class="mb-3">Öğrenci numara: <span
                                                        class="text-muted ml-1">181307085</span></h6>
                                                <h6 class="mb-3">fakulte: <span class="text-muted ml-1">Teknoloji</span>
                                                </h6>
                                                <h6 class="mb-3">bölum: <span class="text-muted ml-1">Bilişm
                                                        sistemleri</span></h6>



                                            </div>
                                            <div class="col">

                                                <h6 class="mb-3">Sınıf: <span class="text-muted ml-1">4</span></h6>
                                                <h6 class="mb-3">E-Posta: <span
                                                        class="text-muted">test123@gmail.com</span></h6>
                                                <h6 class="mb-3">Cep Telefonu: <span class="text-muted ml-1">535 018
                                                        1245</span></h6>
                                                <h6 class="mb-3">Danışman Hoca: <span class="text-muted ml-1">Serdar
                                                        Solak</span></h6>
                                                <h6 class="mb-3">Dönem: <span class="text-muted ml-1">2021/2022
                                                        Bahar</span></h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- [ Hover-table ] start -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Proje bilgileri</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <th>#</th>
                                                    <th>Öğrencinin Adı</th>
                                                    <th>Danışmanının Adı</th>
                                                    <th>Proje Adı</th>
                                                    <th>Dönem</th>
                                                    <th>Proje Süreci</th>

                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Fatma ..</td>
                                                        <td>Serdar Solak</td>
                                                        <td>Web</td>
                                                        <td>2021/2022 Bahar</td>
                                                        <td>Proje önerisi Aşama</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-block col-md-12">
                                <div class="row align-items-center justify-content-center card-active">
                                    <div class="col-12">

                                        <div class="progress">
                                            <div class="progress-bar progress-c-theme" role="progressbar"
                                                style="width:100%;height:6px;" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- [ Hover-table ] end -->
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- [ Main Content ] end -->


    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/pcoded.min.js')}}"></script>
</body>

</html>