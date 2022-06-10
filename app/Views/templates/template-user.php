<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/tim-style.css" />

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bgdarkgreen sticky-top">
        <div class="container container-fluid d-flex justify-content-between">
            <a class="navbar-brand d-flex align-items-center" href="/user/index">
                <img src="/assets/img/logo-batang.png" height="50px" alt="" />
                <h3 class="text-white">
                    Sinergi Langkah Nyata
                </h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon d-inline"><i class="fa-solid fa-bars text-white"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-end">
                    <li class="nav-item">
                        <a class="nav-link" id="beranda" aria-current="page" href="<?= base_url('user/index'); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-5" id="tentang" href="<?= base_url('user/tim'); ?>">Tim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-5" id="inovasi" href="<?= base_url('user/inovasi'); ?>">Inovasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End navbar -->

    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="bgdarkgreen pt40 mt80 text-white">
        <div class="container">
            <div class="row mb40 justify-content-between">
                <div class="col-md-6 col-12 mb40">
                    <h2 class="mb10 fw-bold">Sinergi Langkah Nyata</h2>
                    <div class="desc darklight">
                        <h3>We are a company that is engaged in innovation in the health sector to increase public awareness
                            of the importance of technology in health and facilitate access to health services
                            for the community to help achieve the third goal of the SDGs.
                        </h3>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="nav__footer d-flex justify-content-start">
                        <div class="item me-5">
                            <a href="">
                                <h3 class="mb10 fw-bold">Innovation</h3>
                            </a>
                            <a href="">
                                <h3 class="mb-2 darklight">Smart Glucosemeter</h3>
                            </a>
                            <a href="">
                                <h3 class="mb-2 darklight">Voiry</h3>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <h3 class="mb10 fw-bold">About</h3>
                            </a>
                            <a href="">
                                <h3 class="mb-2 darklight">Our Team</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sosmed mb20">
                <div class="content d-flex">
                    <a href="">
                        <div class="d-flex justify-content-center align-items-center icon">
                            <i class="fa-brands fa-instagram" id="insta"></i>
                        </div>
                    </a>
                    <a href="" class="ms-3">
                        <div class="d-flex justify-content-center align-items-center icon">
                            <i class="fa-brands fa-facebook" id="facebook"></i>
                        </div>
                    </a>
                    <a href="" class="ms-3">
                        <div class="d-flex justify-content-center align-items-center icon">
                            <i class="fa-brands fa-twitter" id="twitter"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="copyright text-center">
                <h3><i class="fa-solid fa-copyright me-2"></i>2022. Sinergi Langkah Nyata. All Right Reserved.</h3>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- JS Custom -->
    <script src="<?= base_url('/assets/js/main.js'); ?>"></script>
    <script src="https://kit.fontawesome.com/55f12d8286.js" crossorigin="anonymous"></script>
</body>

</html>