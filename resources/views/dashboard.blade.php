<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href={{ asset('assets/css/nucleo-icons.css') }} rel="stylesheet" />
    <link href={{ asset('assets/css/nucleo-svg.css') }} rel="stylesheet" />
    <link href={{ asset('assets/css/custom.css') }} rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Font Awesome Icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href={{ asset('assets/css/nucleo-svg.css') }} rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html "
                target="_blank">
                <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Soft UI Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  active" href="../pages/dashboard.html">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

            </ul>
        </div>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary btn-sm mb-0 me-3">Logout</a>
                            </form>

                        </li>

                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- End Navbar -->
        <div class="container-fluid py-4">


            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 text-center">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="numbers">
                                        <div class="col-12 text-center">
                                            <a class="btn bg-gradient-dark mb-0" data-bs-toggle="modal"
                                                data-bs-target="#tambah" href="javascript:;"><i
                                                    class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Data Baru</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Data Tanaman</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table-wrap table align-items-center mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th
                                                class="col-0 text-center text-uppercase text-secondary text-xxs  font-weight-bolder opacity-7">
                                                Nama Tanaman</th>
                                            <th
                                                class="table-wrap col-5 text-center  text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Deskripsi Tanaman</th>

                                            <th
                                                class="col-1 text-center text-uppercase text-secondary text-xxs  font-weight-bolder opacity-7 ">
                                                Kelembapan</th>
                                            <th
                                                class="col-1 text-center text-uppercase text-secondary text-xxs  font-weight-bolder opacity-7 ">
                                                Int.Penyinaran</th>
                                            <th
                                                class="col-1 text-center text-uppercase text-secondary text-xxs  font-weight-bolder opacity-7 ">
                                                Cur. Hujan</th>
                                            <th
                                                class="col-1 text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                                PH Tanah</th>
                                            <th
                                                class="col-1 text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                                Suhu</th>
                                            <th
                                                class="col-1 text-center text-uppercase text-secondary text-xxs  font-weight-bolder opacity-7 ">
                                                Ketinggian</th>
                                            <th class="col-1 text-secondary  opacity-7 ps-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_tanaman as $data)


                                        <tr class="">
                                            <td class="align-middle text-left p-3">
                                                <h6 class="mb-0 text-xs">{{ $data['nama'] }}</h6>
                                            </td>
                                            <td class="align-middle text-center p-3">

                                                <p class="wrap-column text-xs text-secondary mb-0  ">
                                                    {{$data['deskripsi']}}
                                                </p>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    {{$data['kelembapan']}}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    {{$data['intensitas_penyinaran']}}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    {{$data['curah_hujan']}}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    {{$data['ph_tanah']}}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    {{$data['suhu']}}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    {{$data['ketinggian']}}</span>
                                            </td>
                                            <td class="align-middle text-center p-3">
                                                <div class="ms-auto text-center">
                                                    <div>
                                                        <a class="btn btn-link text-dark px-3 mb-0"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit{{ $data['id'] }}"
                                                            href="javascript:;"><i
                                                                class="fas fa-pencil-alt text-dark me-2"
                                                                aria-hidden="true"></i>Edit</a>
                                                    </div>
                                                    <div>
                                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#hapus{{ $data['id'] }}"
                                                            href="javascript:;"><i
                                                                class="far fa-trash-alt me-2"></i>Hapus</a>
                                                    </div>


                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="hapus{{ $data['id'] }}" tabindex="-1"
                                            aria-labelledby="hapusModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="hapusModalLabel">Konfirmasi
                                                            Penghapusan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Tutup"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <form
                                                            action="{{ route('delete-tanaman', $data['id_encrypt']) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal" id="edit{{ $data['id'] }}">
                                            <div class="modal-dialog">
                                                <form role="form text-left" method="POST" action="/ubah-tanaman">
                                                    <div class="modal-content">
                                                        <!-- Konten modal di sini -->
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Data</h5>
                                                            <button type="button" class="close"
                                                                data-bs-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <input type="hidden" class="form-control"
                                                                placeholder="Kelembapan" name="id"
                                                                value="{{ $data['id'] }}">

                                                            @csrf

                                                            <div class="row ">
                                                                <div class="mb-1 mt-1">

                                                                    <p
                                                                        class="text-xs mb-2 mt-2 d-flex align-items-center  my-auto">
                                                                        Nama Tanaman</p>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Nama Tanaman" name="nama_tanaman"
                                                                        value="{{ $data['nama'] }}">



                                                                </div>
                                                                <div class="mb-1 mt-1">

                                                                    <p
                                                                        class="text-xs mb-2 mt-2 d-flex align-items-center  my-auto">
                                                                        Deskripsi Tanaman</p>
                                                                    <textarea type="" class="form-control"
                                                                        placeholder="Deskripsi"
                                                                        name="deskripsi_tanaman">{{ $data['deskripsi'] }}</textarea>



                                                                </div>
                                                                <div class="mb-1 mt-1">

                                                                    <p
                                                                        class="text-xs mb-2 mt-2 d-flex align-items-center  my-auto">
                                                                        Kelembapan</p>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Kelembapan"
                                                                                name="kelembapan_bawah"
                                                                                value="{{ $data['kelembapan_bawah'] }}">
                                                                        </div>
                                                                        <p class="text-center col-1  my-auto">
                                                                            -</p>
                                                                        <div class="col-4">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Kelembapan"
                                                                                name="kelembapan_atas" value="{{
                                                                                $data['kelembapan_atas'] }}">
                                                                        </div>
                                                                        <div
                                                                            class="col-2 text-center d-flex align-items-center  my-auto">
                                                                            <div class="mb-1 mt-1">
                                                                                <p
                                                                                    class="text-xs d-flex align-items-center  my-auto">
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                    </div>



                                                                </div>

                                                                <div class="mb-1 mt-1">
                                                                    <p
                                                                        class="text-xs d-flex align-items-center mb-2 mt-2 my-auto">
                                                                        Intensitas Penyinaran</p>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Intensitas Penyinaran"
                                                                                name="intensitas_penyinaran_bawah"
                                                                                value="{{ $data['intensitas_penyinaran_bawah'] }}">
                                                                        </div>
                                                                        <p class="text-center col-1  my-auto">
                                                                            -</p>
                                                                        <div class="col-4">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Intensitas Penyinaran"
                                                                                name="intensitas_penyinaran_atas"
                                                                                value="{{ $data['intensitas_penyinaran_atas'] }}">
                                                                        </div>
                                                                        <div
                                                                            class="col-2 text-center d-flex align-items-center  my-auto">
                                                                            <div class="mb-1 mt-1">
                                                                                <p
                                                                                    class="text-xs d-flex align-items-center  my-auto">
                                                                                    %</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="mb-1 mt-1">
                                                                    <p
                                                                        class="text-xs d-flex align-items-center mb-2 mt-2 my-auto">
                                                                        Curah Hujan</p>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Curah Hujan"
                                                                                name="curah_hujan_bawah" value="{{
                                                                                $data['curah_hujan_bawah'] }}">
                                                                        </div>
                                                                        <p class="text-center col-1  my-auto">
                                                                            -</p>
                                                                        <div class="col-4">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Curah Hujan"
                                                                                name="curah_hujan_atas" value="{{
                                                                                $data['curah_hujan_atas'] }}">
                                                                        </div>
                                                                        <div
                                                                            class="col-2 text-center d-flex align-items-center  my-auto">
                                                                            <div class="mb-1 mt-1">
                                                                                <p
                                                                                    class="text-xs d-flex align-items-center  my-auto">
                                                                                    jam/hari
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="mb-1 mt-1">
                                                                    <p
                                                                        class="text-xs d-flex align-items-center mb-2 mt-2 my-auto">
                                                                        PH Tanah</p>

                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="PH Tanah"
                                                                                name="ph_tanah_bawah" id="ph_tanah"
                                                                                value="{{
                                                                                $data['ph_tanah_bawah'] }}">
                                                                        </div>
                                                                        <p class="text-center col-1  my-auto">
                                                                            -</p>
                                                                        <div class="col-4">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="PH Tanah"
                                                                                name="ph_tanah_atas" id="ph_tanah"
                                                                                value="{{
                                                                                $data['ph_tanah_atas'] }}">
                                                                        </div>
                                                                        <div
                                                                            class="col-2 text-center d-flex align-items-center  my-auto">
                                                                            <div class="mb-1 mt-1">
                                                                                <p
                                                                                    class="text-xs d-flex align-items-center  my-auto">
                                                                                    mm/bulan</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="mb-1 mt-1">
                                                                    <p
                                                                        class="text-xs d-flex align-items-center mb-2 mt-2 my-auto">
                                                                        Suhu</p>
                                                                    <div class="row text-center">
                                                                        <div class="col-4">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Suhu" name="suhu_bawah"
                                                                                value="{{
                                                                                $data['suhu_bawah'] }}">
                                                                        </div>
                                                                        <p class="text-center col-1  my-auto">
                                                                            -</p>

                                                                        <div class="col-4 text-center ">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Suhu" name="suhu_atas"
                                                                                value="{{
                                                                                $data['suhu_atas'] }}">
                                                                        </div>
                                                                        <div
                                                                            class="col-3 text-center d-flex align-items-center  my-auto">
                                                                            <div class="mb-1 mt-1">
                                                                                <p
                                                                                    class="text-xs d-flex align-items-center  my-auto">
                                                                                    Celcius</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="mb-1 mt-1">
                                                                    <p
                                                                        class="text-xs d-flex align-items-center mb-2 mt-2  my-auto">
                                                                        Ketinggian</p>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Ketinggian"
                                                                                name="ketinggian_bawah" value="{{
                                                                                $data['ketinggian_bawah'] }}">
                                                                        </div>
                                                                        <p class="text-center col-1  my-auto">
                                                                            -</p>
                                                                        <div class="col-4">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Ketinggian"
                                                                                name="ketinggian_atas" value="{{
                                                                                $data['ketinggian_atas'] }}">
                                                                        </div>
                                                                        <div
                                                                            class="col-2 text-center d-flex align-items-center  my-auto">
                                                                            <div class="mb-1 mt-1">
                                                                                <p
                                                                                    class="text-xs d-flex align-items-center  my-auto">
                                                                                    mdpl</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>





                                                            </div>



                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer pt-3  ">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <div class="copyright text-center text-sm text-muted text-lg-start">
                                    © <script>
                                        document.write(new Date().getFullYear())
                                    </script>,
                                    made with <i class="fa fa-heart"></i> by

                                    Swasembada Production.
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                            target="_blank">Creative Tim</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                            target="_blank">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                            target="_blank">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                            target="_blank">License</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    </main>

    <div class="modal" id="tambah">
        <div class="modal-dialog">
            <form role="form text-left" method="POST" action="/tambah-tanaman">
                <div class="modal-content">
                    <!-- Konten modal di sini -->
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" class="form-control" placeholder="Kelembapan" name="id">

                        @csrf

                        <div class="row ">
                            <div class="mb-1 mt-1">

                                <p class="text-xs mb-2 mt-2 d-flex align-items-center  my-auto">
                                    Nama Tanaman</p>
                                <input type="text" class="form-control" placeholder="Nama Tanaman" name="nama_tanaman">



                            </div>
                            <div class="mb-1 mt-1">

                                <p class="text-xs mb-2 mt-2 d-flex align-items-center  my-auto">
                                    Deskripsi Tanaman</p>
                                <textarea type="" class="form-control" placeholder="Deskripsi"
                                    name="deskripsi_tanaman"></textarea>



                            </div>
                            <div class="mb-1 mt-1">

                                <p class="text-xs mb-2 mt-2 d-flex align-items-center  my-auto">
                                    Kelembapan</p>
                                <div class="row">
                                    <div class="col-4">
                                        <input type="number" class="form-control" placeholder="Kelembapan"
                                            name="kelembapan_bawah" ">
                                    </div>
                                    <p class=" text-center col-1 my-auto">
                                        -</p>
                                        <div class="col-4">
                                            <input type="number" class="form-control" placeholder="Kelembapan"
                                                name="kelembapan_atas">
                                        </div>
                                        <div class="col-2 text-center d-flex align-items-center  my-auto">
                                            <div class="mb-1 mt-1">
                                                <p class="text-xs d-flex align-items-center  my-auto">
                                                </p>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                                <div class="mb-1 mt-1">
                                    <p class="text-xs d-flex align-items-center mb-2 mt-2 my-auto">
                                        Intensitas Penyinaran</p>
                                    <div class="row">
                                        <div class="col-4">
                                            <input type="number" class="form-control"
                                                placeholder="Intensitas Penyinaran" name="intensitas_penyinaran_bawah" ">
                                    </div>
                                    <p class=" text-center col-1 my-auto">
                                            -</p>
                                            <div class="col-4">
                                                <input type="number" class="form-control"
                                                    placeholder="Intensitas Penyinaran"
                                                    name="intensitas_penyinaran_atas">
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center  my-auto">
                                                <div class="mb-1 mt-1">
                                                    <p class="text-xs d-flex align-items-center  my-auto">
                                                        %</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="mb-1 mt-1">
                                        <p class="text-xs d-flex align-items-center mb-2 mt-2 my-auto">
                                            Curah Hujan</p>
                                        <div class="row">
                                            <div class="col-4">
                                                <input type="number" class="form-control" placeholder="Curah Hujan"
                                                    name="curah_hujan_bawah">
                                            </div>
                                            <p class="text-center col-1  my-auto">
                                                -</p>
                                            <div class="col-4">
                                                <input type="number" class="form-control" placeholder="Curah Hujan"
                                                    name="curah_hujan_atas">
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center  my-auto">
                                                <div class="mb-1 mt-1">
                                                    <p class="text-xs d-flex align-items-center  my-auto">
                                                        jam/hari
                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="mb-1 mt-1">
                                        <p class="text-xs d-flex align-items-center mb-2 mt-2 my-auto">
                                            PH Tanah</p>

                                        <div class="row">
                                            <div class="col-4">
                                                <input type="text" class="form-control" placeholder="PH Tanah"
                                                    name="ph_tanah_bawah" id="ph_tanah">
                                            </div>
                                            <p class="text-center col-1  my-auto">
                                                -</p>
                                            <div class="col-4">
                                                <input type="text" class="form-control" placeholder="PH Tanah"
                                                    name="ph_tanah_atas" id="ph_tanah">
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center  my-auto">
                                                <div class="mb-1 mt-1">
                                                    <p class="text-xs d-flex align-items-center  my-auto">
                                                        mm/bulan</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="mb-1 mt-1">
                                        <p class="text-xs d-flex align-items-center mb-2 mt-2 my-auto">
                                            Suhu</p>
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <input type="number" class="form-control" placeholder="Suhu"
                                                    name="suhu_bawah">
                                            </div>
                                            <p class="text-center col-1  my-auto">
                                                -</p>

                                            <div class="col-4 text-center ">
                                                <input type="number" class="form-control" placeholder="Suhu"
                                                    name="suhu_atas">
                                            </div>
                                            <div class="col-3 text-center d-flex align-items-center  my-auto">
                                                <div class="mb-1 mt-1">
                                                    <p class="text-xs d-flex align-items-center  my-auto">
                                                        Celcius</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="mb-1 mt-1">
                                        <p class="text-xs d-flex align-items-center mb-2 mt-2  my-auto">
                                            Ketinggian</p>
                                        <div class="row">
                                            <div class="col-4">
                                                <input type="number" class="form-control" placeholder="Ketinggian"
                                                    name="ketinggian_bawah">
                                            </div>
                                            <p class="text-center col-1  my-auto">
                                                -</p>
                                            <div class="col-4">
                                                <input type="number" class="form-control" placeholder="Ketinggian"
                                                    name="ketinggian_atas">
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center  my-auto">
                                                <div class="mb-1 mt-1">
                                                    <p class="text-xs d-flex align-items-center  my-auto">
                                                        mdpl</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>





                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
            </form>
        </div>
    </div>

    <div class="fixed-plugin">
        <a class="F-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free
                    Download</a>
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Menerapkan validasi untuk input desimal
        document.getElementById('ph_tanah').addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9.]/g, ''); // Hanya membiarkan angka dan tanda desimal
        });
    </script>

    <!-- Memuat library Toastr sebelum penggunaannya -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Core JS Files -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <!-- Tautan ke file JavaScript Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: 0.5
            };
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script>
        @if(Session::has('success'))
        Swal.fire(
            "Sukses",
            "{{ Session::get('success') }}",
            "success"
        );
        @endif
        toastr.success('Data has been saved successfully!', 'Congrats');
        // toastr.success('Have fun storming the castle!')
        // @if(session('success'))
        // toastr.success('{{ session('success') }}', 'success', {
        //     positionClass: 'toast-top-right',
        //     closeButton: true,
        //     timeOut: 5000
        // });
        // @endif
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>


</body>

</html>