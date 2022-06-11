<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/admin-style.css" /> -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom style -->
    <link rel="stylesheet" href="<?= base_url('/assets/css/admin-style.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css'); ?>" />

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Sidebar section -->
    <input type="checkbox" name="" id="nav-toogle" />
    <div class="sidebar__section bgdarkgreen">
        <div class="sidebar__brand d-flex align-items-center justify-content-center">
            <div class="d-flex justify-content-center px-2 py-3 align-items-center icon__admin">
                <i class="fa-solid fa-user-gear me-2" id="navAdmin"></i>
                <h3 class="text-white ff2">Admin</h3>
            </div>
        </div>
        <div class="sidebar__menu">
            <div class="menu__content">
                <a href="<?= base_url('admin/tagline'); ?>" class="text-decoration-none">
                    <span class="text-white"><i class="fas fa-hashtag" id="navTagline"></i></span>
                    <span class="ms-2 fs18" id="navTagline1">Tagline</span>
                </a>
            </div>
            <div class="menu__content mt10">
                <a href="<?= base_url('team/team'); ?>" class="text-decoration-none">
                    <span class="text-white"><i class="fas fa-users" id="navTeam"></i></span>
                    <span class="ms-2 fs18" id="navTeam1">Team</span>
                </a>
            </div>
            <div class="menu__content mt10">
                <a href="<?= base_url('innovation/innovation'); ?>" class="text-decoration-none">
                    <i class="fas fa-brain" id="navInnovation"></i>
                    <span class="ms-2 fs18" id="navInnovation1">Innovation</span>
                </a>
            </div>
            <div class="menu__content mt10">
                <a href="<?= base_url('admin/email'); ?>" class="text-decoration-none">
                    <i class="fas fa-envelope" id="navEmail"></i>
                    <span class="ms-2 fs18" id="navEmail1">Users Email</span>
                </a>
            </div>
            <div class="menu__content mt10">
                <a href="/logout" class="text-decoration-none">
                    <i class="bi bi-door-open-fill"></i>
                    <span class="ms-2 fs18">Logout</span>
                </a>
            </div>
        </div>
    </div>
    <!-- End sidebar section -->

    <div class="main__section">
        <!-- Header -->
        <div class="header bgdarkgreen d-flex justify-content-between align-items-center px-4">
            <label for="nav-toogle">
                <i class="fas fa-bars white" style="cursor: pointer;"></i>
                <!-- <img src="<?= base_url('/assets/img/bar-putih.svg'); ?>" height="20px" alt="" for /> -->
            </label>
            <a class="navbar-brand d-flex align-items-center" href="">
                <img src="<?= base_url(); ?>" height="50px" alt="" />
                <h3 class="text-white">
                    Sinergi Langkah Nyata
                </h3>
            </a>
            <div class="kosong"></div>
        </div>

        <?= $this->renderSection('content'); ?>

        <!-- Footer -->
        <footer class="p-4 text-center mt40">
            <h4 class="ff2">
                ©2022. Sinergi Langkah Nyata. All rights
                reserved
            </h4>
        </footer>
        <!-- End footer -->
    </div>
    <!-- End header -->


    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- JS Custom -->
    <script src="https://kit.fontawesome.com/55f12d8286.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('/assets/js/main.js'); ?>"></script>
</body>

</html>