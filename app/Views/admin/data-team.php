<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<div class="data__sd">
    <div class="main__content px-4 pt40">
        <h2 class="fw-bold darkblue">Data Sekolah Dasar</h2>
        <?php if (session()->getFlashdata('pesanHapusSekolah')) : ?>
        <div class="alert alert-success mt20 bd__radius__none" role="alert">
            <?= session()->getFlashdata('pesanHapusSekolah'); ?>
        </div>
        <?php endif; ?>
        <!-- Main content -->
        <div class="mt20">
            <!-- Data Sekolah -->
            <div class="tab-pane fade show active bgwhite" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="tabel__section px-3 table-responsive pt20 pb20">
                    <table class="table table-responsive table-hover mb20i border-bottom-0" id="dataTeam">
                        <div class="d-flex justify-content-between align-items-center mb20">
                            <h4 class="darkblue fw-bold">Data Team</h3>
                                <a href="<?= base_url('admin/tambahSekolahSd'); ?>">
                                    <div class="btn btn-primary bd__radius__none bgblue">Add Member <i
                                            class="bi bi-plus text-white"></i></div>
                                </a>
                        </div>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center nomor">No</th>
                                <th scope="col">Name Member</th>
                                <th scope="col">Motivational Words</th>
                                <th scope="col">Position</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data -->
                            <?php $i = 1; ?>
                            <tr>
                                <td scope="row" class="text-center"><?= $i++; ?></td>
                                <td>sdfsdf</td>
                                <td>sdf</td>
                                <td>
                                    sdfsdf
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <div class="btn__edit">
                                            <a href="<?= base_url() ?>/admin/detailSd/123"
                                                class="me-2 text-decoration-none">
                                                Detail</a>
                                        </div>
                                        <div class="btn__hapus">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="button button__transparan"
                                                data-bs-toggle="modal" data-bs-target="#modal_123">
                                                <i class="bi bi-trash3-fill red"></i>
                                            </button>


                                            <!-- Modal -->
                                            <div class="modal fade" id="modal_123" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title fw-bold" id="exampleModalLabel">
                                                                Konfirmasi
                                                            </h3>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4 style="text-align: left">
                                                                Yakin ingin menghapus data?
                                                            </h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">
                                                                Batal
                                                            </button>
                                                            <a href="<?= base_url() ?>/admin/hapusDataSekolah/123">
                                                                <button type="button" class="btn btn-danger">
                                                                    Hapus
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- End data -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End data sekolah -->

        </div>
        <!-- End main content -->
    </div>
</div>

<?= $this->endSection(); ?>

<!-- Data sekolah -->
<script>
$(document).ready(function() {
    $("#table_id1").DataTable();
});
</script>

<!-- Data tenaga pendidik -->
<script>
$(document).ready(function() {
    $("#example2").DataTable();
});
</script>

<!-- Tooltip -->
<script>
var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});
</script>