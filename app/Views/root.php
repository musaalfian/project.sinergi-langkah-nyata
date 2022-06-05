<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- icon bootstraps -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <style>
        .bg-root {
            background-image: url("/assets/img/bg-root.png");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="bg-root p50">
        <div class="tengah align-items-center">
            <div class="tengah  ">
                <div class="mx-auto isiroot" style="padding: 60px 40px ;">
                    <div class="tengah flex-column">
                        <div class="img tengah">
                            <img class="logobatang" src="<?= base_url(); ?>/assets/img/logo-kabupaten-batang 2-1.png" alt="" style="width: 80px;height: auto;">
                        </div>
                        <div class="tengah mt20">
                            <h3 class="headerdinas text-center mx-auto"> SISTEM INFORMASI BANTUAN BIAYA PENDIDIKAN BAGI PESERTA DIDIK PENDIDIKAN MENENGAH DAN <br> MAHASISWA YANG BERPRESTASI DARI KELUARGA MISKIN <br></h3>
                        </div>
                        <div class="tengah mt20">
                            <h3 class="text-center">DINAS PENDIDIKAN DAN KEBUDAYAAN KABUPATEN BATANG</h3>

                        </div>
                    </div>
                    <div class="note mt25">
                        <p class="bold infoawal">Informasi bantuan biaya pendidikan, silahkan pilih <span class="biru">Informasi</span></p>
                        <p class="bold infoawal ">Melakukan pendaftaran silahkan pilih <span class="biru">Masuk</span></p>
                        <p class="bold infoawal">Lihat pendaftar beasiswa, silahkan pilih <span class="biru">Pendaftar</span>
                        </p>
                        <p class="bold infoawal">Lihat penerima beasiswa, silahkan pilih <span class="biru">Penerima</span>
                        </p>
                    </div>
                    <div class="row justify-content-around align-self-center mt25">
                        <div class="col mt10 align-self-center text-center">
                            <a href="/halaman_awal/informasi_pendaftaran/1" class="btn btn-primary br5">INFORMASI</a>
                        </div>
                        <div class="col mt10 align-self-center text-center">
                            <a href="/user/index" class="btn btn-primary br5">MASUK</a>
                        </div>
                        <div class="col mt10 align-self-center text-center">
                            <!-- <a href="" class="btn btn-primary ">Pendaftar</a> -->
                            <button class="btn btn-primary dropdown-toggle" type="button" id="daftar_pendaftar" data-bs-toggle="dropdown" aria-expanded="false">
                                PENDAFTAR<i class="bi bi-caret-down-fill"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="daftar_pendaftar">
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/halaman_awal/info_awal_pendaftar/1">SMA
                                        Sederajat</a></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/halaman_awal/info_awal_pendaftar/2">Calon
                                        Mahasiswa</a></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/halaman_awal/info_awal_pendaftar/3">Mahasiswa</a></li>
                            </ul>
                        </div>
                        <div class="col mt10 align-self-center text-center">
                            <!-- <a href="" class="btn btn-primary br5">Penerima</a> -->
                            <button class="btn btn-primary dropdown-toggle" type="button" id="daftar_penerima" data-bs-toggle="dropdown" aria-expanded="false">
                                PENERIMA <i class="bi bi-caret-down-fill"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="daftar_penerima">
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/halaman_awal/info_awal_penerima/1">SMA
                                        Sederajat</a></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/halaman_awal/info_awal_penerima/2">Calon
                                        Mahasiswa</a></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/halaman_awal/info_awal_penerima/3">Mahasiswa</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>