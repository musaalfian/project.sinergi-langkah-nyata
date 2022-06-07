<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<div class="main__content px-4 pt40">
    <h2 class="fw-bold darkblue">Dashboard</h2>
    <div class="dashboard__section">
        <div class="row">
            <div class="col-xl-4 col-12">
                <div class="dashboard__content bg-white text-center mt10 p-4">
                    <h1 class="darkblue fw-bold">22</h1>
                    <h3 class="darkblue mt10">Sekolah Dasar</h3>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="dashboard__content bg-white text-center mt10 p-4">
                    <h1 class="darkblue fw-bold">22</h1>
                    <h3 class="darkblue mt10">Sekolah Menengah Pertama</h3>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="dashboard__content bg-white text-center mt10 p-4">
                    <h1 class="darkblue fw-bold">12</h1>
                    <h3 class="darkblue mt10">Tenaga Pendidik</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- SD -->
    <h2 class="fw-bold darkblue mt40">Sekolah Dasar</h2>
    <div class="sd__section mt10">
        <div class="row">
            <div class="col-xl-8 col-12">
                <div class="tabel__section__index border-0 p-3 table-responsive">
                    <div class="d-flex justify-content-between">
                        <h3 class="fw-bold darkblue">Data Sekolah</h3>
                        <a href="<?= base_url('admin/dataSd'); ?>" class="text-decoration-none blue">
                            Lihat selengkapnya
                            <i class="bi bi-arrow-right blue fs14 ms-2"></i>
                        </a>
                    </div>
                    <div class="line2 mt10"></div>
                    <table class="table table-responsive table-hover" id="table_id1">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="nama__sekolah">Nama Sekolah</th>
                                <th scope="col" class="text-center">Akreditasi</th>
                                <th scope="col">Status Sekolah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data -->
                            <?php $i = 1; ?>
                            <tr>
                                <td scope="row" class="text-center"><?= $i++; ?></td>
                                <td> 34</td>
                                <td class="text-center">234</td>
                                <td>
                                    34
                                </td>
                            </tr>
                            <!-- End data -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="tenaga__pendidik__section p-3">
                    <h3 class="fw-bold darkblue">Data Tenaga Pendidik</h3>
                    <div class="chartBox mt10">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="keterangan mt20">
                            <div class="d-flex">
                                <div class="kotak__merah me-2"></div>
                                <h4>
                                    Laki-laki <span class="ms__laki fw-bold">324</span>
                                </h4>
                            </div>
                            <div class="d-flex mt10">
                                <div class="kotak__biru me-2"></div>
                                <h4>Perempuan <span class="ms-3 fw-bold">23</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main content -->

<!-- Dougnat chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Dougnat sd -->
<script>
const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
    type: "pie",
    data: {
        datasets: [{
            label: "My First Dataset",
            data: [13,
                14
            ],
            backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)"],
            hoverOffset: 4,
        }, ],
    },
    options: {},
});
</script>

<?= $this->endSection(); ?>