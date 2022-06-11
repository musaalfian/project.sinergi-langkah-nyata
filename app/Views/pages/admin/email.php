<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <div class="tagline__section mb20">
        <h2 class="fw-bold darkgreen mb10">Users Email</h2>
        <div class="tab-pane fade show active bgwhite" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tabel__section px-3 table-responsive pt20 pb20">
                <table class="table table-responsive table-hover mb20i border-bottom-0" id="dataSekolahSd">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center nomor">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data -->
                        <?php if ($email == null) : ?>
                        <tr>
                            <td colspan="4" class="text-center">No data entered yet</td>
                        </tr>
                        <?php endif ?>
                        <?php foreach ($email as $email) : ?>
                        <tr>
                            <td scope="row" class="text-center">1</td>
                            <td><?= date_format(date_create($email['created_at']), 'd-m-Y'); ?></td>
                            <td><?= $email['email']; ?></td>
                            <td>
                                <div class="btn__hapus">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="button bg-transparent border-0" data-bs-toggle="modal"
                                        data-bs-target="#modal_<?= $email['id_users_email']; ?>">
                                        <i class="bi bi-trash3-fill red"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal_<?= $email['id_users_email']; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <a href="/admin/deleteEmail/<?= $email['id_users_email']; ?>">
                                                        <button type="button" class="btn btn-danger">
                                                            Delete
                                                        </button>
                                                    </a>
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