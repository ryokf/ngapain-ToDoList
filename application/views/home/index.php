<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .foto-kegiatan {
        width: 200px;
        height: 135px;
        object-fit: cover;
    }
    </style>
</head>

<body class="gelap">

    <!-- NAVBAR=============================================================================================================== -->

    <nav class="navbar bg-light fixed-top">
        <div class="container d-flex justify-content-between">
            <span class="navbar-brand mb-0 h1">To Do List</span>

            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg></button>

            <div class="offcanvas-sm offcanvas offcanvas-end setengah" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">

                    <h5 class="offcanvas-title" id="offcanvasRightLabel">
                        <img src="img/pp_user/<?= $data_pribadi[0]['foto'] ?>" alt="<?= $data_pribadi[0]['foto'] ?>"
                            class="img-profile-canvas">
                        <?= $data_pribadi[0]['username'] ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="container py-5">
                        <div class="my-5 display-6">
                            <a href="<?=
                              base_url('profil/index/')//  . $_SESSION['login'] 
                             ?>" class="text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                                <span class="mx-3">profile</span>
                            </a>
                        </div>
                        <div class="my-5">
                            <form action="<?= base_url('home/mode_gelap') ?>" method="POST">
                                <div class="mb-3">
                                    <input type="hidden" class="form-control" id="email" name="email"
                                        value="<?= $_SESSION['login']; ?>">
                                    <input type="hidden" class="form-control" id="nama" name="gelap"
                                        <?php if( $data_gelap[0]['gelap'] == 'true' ): ?> value="<?= 'false' ?>"
                                        <?php else: ?> value="<?= 'true' ?>" <?php endif ?>>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                        class="bi bi-moon" viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                    </svg>
                                    <button type="submit" class="display-6 no-btn mx-2">mode gelap</button>
                                </div>
                            </form>
                        </div>
                        <div class="my-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                            <a href="<?= base_url('logout') ?>" class="display-6 mx-3 text-dark">logout</a>
                            <!-- <a href="<?php 
                                // base_url('logout') 
                                ?>" class="btn btn-danger btn-sm d-block">logout</a> -->
                        </div>
                        <!-- <div id="tombol-dark" class="btn btn-dark">
                            dark
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="py-4"></div>

    <!-- AKHIR NAVBAR ===========================================================================================================-->

    <?php 

    $tanggal_kegiatan = [];
    foreach($data_kegiatan as $kegiatan){
        array_push($tanggal_kegiatan, $kegiatan['tanggal_deadline']);
    }
     
    $tanggal_kegiatan = array_unique($tanggal_kegiatan);
    // $i = 0;
    // foreach($tanggal_kegiatan as $kegiatan){
    //     $kegiatan = explode('-', $kegiatan);
    //     $jumlah[$i] = array_sum($kegiatan);
        
    //     // print_r($jumlah);
    //     $i++;
    //     // print_r($kegiatan);
    //     // for($i = 0; $i < count($kegiatan) - 1; $i++){
    //     //     echo $kegiatan[$i] . '+' . $kegiatan[$i+1] . '=';
    //     //     $kegiatan[$i] = $kegiatan[$i] + $kegiatan[$i+1];
    //     // }
    //     // print_r($kegiatan);
    //     // echo $kegiatan;
    //     // echo count($kegiatan) . '<br>';
    //     // foreach($kegiatan as $ubah_int){
    //     //     // $ubah_int += $ubah_int;
    //     //     print_r($ubah_int);
    //         echo '<br>';
    //     // }   
    // }

    // var_dump($jumlah);
    
    ?>

    <!-- INTI APLIKASI ===========================================================================================================-->

    <div id="carouselExampleControls" class="carousel slide" data-bs-touch="true" data-bs-interval="false">

        <!-- DAFTAR KEGIATAN====================================================================================================== -->
        <div class="carousel-item active">

            <div class="container my-4">

                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="cari kegiatan anda"
                        aria-label="Recipient's email" aria-describedby="basic-addon2" id="input_cari_ajax">
                    <span class="input-group-text" id="basic-addon2">cari</span>
                </div>

                <!-- tombol tambah -->
                <div class="d-flex justify-content-start mb-3">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                        </svg>
                    </button>
                </div>

                <div id="container_search_ajax">
                    <div class="accordion" id="accordionExample">
                        <?php foreach($tanggal_kegiatan as $tanggal): ?>

                        <h5 class="mt-3"><?= $tanggal ?></h5>
                        <?php foreach($data_kegiatan as $kegiatan): ?>

                        <?php if( $kegiatan['tanggal_deadline'] == $tanggal ): ?>

                        <div class="accordion-item gelap">

                            <h2 class="accordion-header" id="headingTwo">
                                <?php if( $kegiatan['sudah'] == 'true' ): ?>
                                <?php $bg = 'alert-success'; ?>
                                <?php else: ?>
                                <?php $bg = 'alert-warning'; ?>
                                <?php endif ?>
                                <button class="accordion-button collapsed alert <?= $bg ?>" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo<?= $kegiatan['id'] ?>"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="d-flex justify-content-between">
                                        <span><?= $kegiatan['kegiatan'] ?></span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseTwo<?= $kegiatan['id'] ?>" class="accordion-collapse collapse"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <img src="img/foto_kegiatan/<?= $kegiatan['foto'] ?>" alt="" class="foto-kegiatan">
                                    <p><b>nama kegiatan: <?= $kegiatan['kegiatan'] ?></b></p>
                                    <p>lokasi : <?= $kegiatan['lokasi'] ?></p>
                                    <p>waktu :
                                        <?= $kegiatan['tanggal_deadline'] . ' | ' . $kegiatan['waktu_deadline'] ?>
                                    </p>
                                    <p>deskripsi : <?= $kegiatan['deskripsi'] ?></p>
                                    <span class="d-flex">
                                        <!-- edit dan hapus -->
                                        <a type="button" class="btn btn-danger btn-sm mx-1" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalHapus"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-trash3"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                            </svg></a>
                                        <a href="" class="btn btn-primary btn-sm text-white" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop<?= $kegiatan['id'] ?>"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg></a>
                                        <!-- Modal hapus-->
                                        <div class="modal fade" id="exampleModalHapus" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div> -->
                                                    <div class="modal-body">
                                                        yakin ingin menghapus data?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">batal</button>
                                                        <a class="btn btn-danger"
                                                            href="<?= base_url('home/hapus') . '/' . $kegiatan['id'] ?>">yakin</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- visibilitas -->
                                        <?php if( $kegiatan['visibilitas'] == 'public' ): ?>
                                        <a class="btn btn-sm bg-success mx-1 text-white"
                                            href="<?= base_url('home/visibilitas_ke_private/') ?><?= $kegiatan['id'] ?>">public</a>
                                        <?php else: ?>
                                        <a class="btn btn-sm bg-danger mx-1 text-white"
                                            href="<?= base_url('home/visibilitas_ke_public/') ?><?= $kegiatan['id'] ?>">private</a>
                                        <?php endif ?>
                                        <!-- status  -->
                                        <?php if( $kegiatan['sudah'] == 'true' ): ?>
                                        <a class="btn btn-sm bg-success mx-1 text-white"
                                            href="<?= base_url('home/belum_selesai/') ?><?= $kegiatan['id'] ?>">selesai</a>
                                        <?php else: ?>
                                        <a class="btn btn-sm bg-danger mx-1 text-white"
                                            href="<?= base_url('home/selesai/') ?><?= $kegiatan['id'] ?>">belum
                                            dikerjakan</a>
                                        <?php endif ?>
                                    </span>
                                </div>
                            </div>

                            <!-- edit kegiatan-->
                            <div class="modal fade" id="staticBackdrop<?= $kegiatan['id'] ?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">edit kegiatan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <?php 
                                    $kegiatan['tanggal_deadline'] = explode('-', $kegiatan['tanggal_deadline']);
                                    $kegiatan['tanggal_deadline'] = array_reverse($kegiatan['tanggal_deadline']);
                                    $kegiatan['tanggal_deadline'] = join('-', $kegiatan['tanggal_deadline']);
                                    ?>

                                        <div class="modal-body">
                                            <form action="<?= base_url('home/ubah/') ?>" method="post">
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Kegiatan</label>
                                                    <input type="text" class="form-control" id="nama" name="nama"
                                                        value="<?= $kegiatan['kegiatan'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lokasi" class="form-label">lokasi</label>
                                                    <input type="text" class="form-control" id="lokasi" name="lokasi"
                                                        value="<?= $kegiatan['lokasi'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">waktu</label>
                                                    <input type="date" class="form-control" id="deadline"
                                                        name="tanggal_deadline"
                                                        value="<?= $kegiatan['tanggal_deadline'] ?>">
                                                    <input type="time" class="form-control" id="deadline"
                                                        name="waktu_deadline"
                                                        value="<?= $kegiatan['waktu_deadline'] ?>">
                                                </div>
                                                <label for="floatingTextarea2">deskripsi kegiatan</label>
                                                <div class="form-floating">
                                                    <textarea class="form-control my-1"
                                                        placeholder="Leave a comment here" id="floatingTextarea2"
                                                        style="height: 100px"
                                                        name="deskripsi"><?= $kegiatan['deskripsi'] ?></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="hidden" class="form-control" id="email" name="email"
                                                        value="<?= $_SESSION['login']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="hidden" class="form-control" id="id" name="id"
                                                        value="<?= $kegiatan['id'] ?>">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">kirim</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                        <?php endforeach ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <br>
            <!-- tambah kegiatan -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah daftar kegiatan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('home/tambah/') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Kegiatan</label>
                                    <input type="text" class="form-control" id="nama" name="nama" maxlength="20">
                                    <div id="emailHelp" class="form-text">max 20 karakter</div>
                                </div>
                                <div class="mb-3">
                                    <label for="lokasi" class="form-label">lokasi</label>
                                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">waktu</label>
                                    <input type="date" class="form-control" id="deadline" name="tanggal_deadline">
                                    <input type="time" class="form-control" id="deadline" name="waktu_deadline">
                                    <div id="emailHelp" class="form-text">harap masukkan waktu dengan benar, karena
                                        sistem akan menghapus data setelah 1 hari terlewat</div>
                                </div>
                                <label for="floatingTextarea2">deskripsi kegiatan</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control my-1" placeholder="Leave a comment here"
                                        id="floatingTextarea2" style="height: 100px" name="deskripsi"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto_kegiatan" required>
                                </div>
                                <div class="mb-3">
                                    <input type="hidden" class="form-control" id="email" name="email"
                                        value="<?= $_SESSION['login']; ?>">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                            <button type="submit" class="btn btn-primary">Tambah kegiatan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- AKHIR DAFATR KEGIATAN=========================================================================================== -->

        <!-- PENCARIAN ==========================================================================================================-->

        <div class="carousel-item">

            <div class="my-4 container">
                <form action="<?= base_url('cari_pengguna/index')  ?>" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="cari pengguna"
                            aria-label="Recipient's email" aria-describedby="basic-addon2" id="cari_user" name="user">
                        <button class="input-group-text" type="submit" id="basic-addon2">cari</button>
                </form>
            </div>

            <div id="container_cari_pengguna">
                <h1 class="display-4 text-center my-5">cari pengguna lain untuk melakukan kegiatan bersama</h1>
            </div>
        </div>

    </div>


    <!-- PENCARIAN ==========================================================================================================-->


    <!--  <div class="container">
                https://images.unsplash.com/photo-1606946887361-78feb162a525?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm90b3xlbnwwfHwwfHw%3D&w=1000&q=80"
                <h1 class="my-3 text-center gelap">cari kegiatan</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's email"
                        aria-label="Recipient's email" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">cari</span>
                </div>
            </div>
        </div>

        <div id="container-search" class="container"> 

        </div>-->

    <div class="carousel-item my-3">

        <div class="container d-flex justify-content-center flex-wrap">

            <?php foreach($data_beranda as $beranda ): ?>
            <div class="card my-2" style="width: 100%;">
                <div class="my-2 mx-3">
                    <?php foreach($data_cocok as $cocok ): ?>
                    <?php if( $beranda['email'] == $cocok['email'] ): ?>
                    <?php $foto_cocok = $cocok['foto'] ?>
                    <img src="img/pp_user/<?= $foto_cocok ?>" alt=""
                        style="border-radius: 50%; width: 30px; height: 30px">
                    <?php $username_cocok = $cocok['username'] ?>
                    <span><?= $username_cocok ?></span>
                    <?php endif ?>
                    <?php endforeach; ?>
                </div>
                <img src="img/foto_kegiatan/<?= $beranda['foto'] ?>" class="card-img-top" alt="..."
                    style="border-radius: 0;">
                <div class="card-body">
                    <h5 class="card-title"><?= $beranda['kegiatan'] ?></h5>
                    <p class="card-text"><?= $beranda['deskripsi'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="my-5">

        </div>

    </div>



    <div class="carousel-item">
        <div class="d-flex justify-content-center align-content-center my-5 py-5">
            <h1 class="display-2">segera hadir</h1>
        </div>
    </div>

    <div class="carousel-item">
        <div class="d-flex justify-content-center align-content-center my-5 py-5">
            <h1 class="display-2">segera hadir</h1>
        </div>
    </div>





    <nav class="navbar fixed-bottom bg-light">
        <div class="container d-flex justify-content-around">
            <a class="" type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-journal-text" viewBox="0 0 16 16">
                    <path
                        d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    <path
                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                    <path
                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                </svg>
            </a>
            <a class="" type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </a>
            <a class="" type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd"
                        d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg>
            </a>
            <a class="" type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="3">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat"
                    viewBox="0 0 16 16">
                    <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                </svg>
            </a>
            <a class="" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"
                data-bs-slide-to="4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                </svg>
            </a>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="js/script.js"></script>

    <script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel)
    </script>

    <script>
    let gelap = document.querySelector('#tombol-dark')
    let body = document.querySelector('.gelap')
    let accordion = document.querySelectorAll('.accordion-item')
    let navigasi = document.querySelectorAll('.bg-light')
    let teks_nav = document.querySelector('.navbar-brand')
    let teks_list = document.querySelectorAll('.accordion-body')

    <?php if( $data_gelap[0]['gelap'] == 'true' ): ?>

    body.classList.toggle('mode-gelap-bg')

    for (let i = 0; i < accordion.length; i++) {
        accordion[i].classList.toggle('mode-gelap-bg')
    }

    // accordion.classList.toggle('mode-gelap-bg')

    for (let i = 0; i < navigasi.length; i++) {
        navigasi[i].classList.toggle('bg-dark')
    }

    teks_nav.classList.toggle('text-white')

    for (let i = 0; i < teks_list.length; i++) {
        teks_list[i].classList.toggle('text-white')
    }

    <?php endif ?>
    </script>

</body>

</html>