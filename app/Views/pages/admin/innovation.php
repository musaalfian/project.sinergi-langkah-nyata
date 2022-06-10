<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <div class="tagline__section mb20">
        <h2 class="fw-bold darkgreen mb10">Innovation</h2>
        <div class="tab-pane fade show active bgwhite" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tabel__section px-3 table-responsive pt20 pb20">
                <div class="d-flex justify-content-between my-3">
                    <h3 class="darkblue fw-bold">Latest Innovation</h3>
                    <a href="/innovation/addInnovation">
                        <button type="button" class="btn btn-primary align-self-end">
                            Add Innovation <i class="bi bi-plus text-white"></i>
                        </button>
                    </a>
                </div>
                <table class="table table-responsive table-hover mb20i border-bottom-0" id="dataSekolahSd">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center nomor">No</th>
                            <th scope="col">Innovation Name</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data -->
                        <?php $i = 1 ?>
                        <?php foreach ($innovation as $innovation) : ?>
                        <tr>
                            <td scope="row" class="text-center"><?= $i++; ?></td>
                            <td><?= $innovation['name_innovation']; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <div class="btn__edit me-2">
                                        <a href="<?= base_url('innovation/detailInnovation/' . $innovation['id_innovation']); ?>"
                                            class=" text-decoration-none">Detail</a>
                                    </div>
                                    <div class="btn__hapus">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="button bg-transparent border-0"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modal_<?= $innovation['id_innovation']; ?>">
                                            <i class="bi bi-trash3-fill red"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal_<?= $innovation['id_innovation']; ?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title fw-bold" id="exampleModalLabel">
                                                            Confirm
                                                        </h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4 style="text-align: left">
                                                            Are you sure want to delete?
                                                        </h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            Cancel
                                                        </button>
                                                        <a
                                                            href="/innovation/deleteInnovation/<?= $innovation['id_innovation']; ?>">
                                                            <button type="button" class="btn btn-danger">
                                                                Delete
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
                        <?php endforeach ?>
                        <!-- End data -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- End main page -->

<?= $this->endSection(); ?>