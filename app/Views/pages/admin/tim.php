<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <div class="tagline__section mb20">
        <h2 class="fw-bold darkgreen mb10">Our Teams</h2>
        <div class="tab-pane fade show active bgwhite" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tabel__section px-3 table-responsive pt20 pb20">
                <table class="table table-responsive table-hover mb20i border-bottom-0" id="dataSekolahSd">
                    <div class="d-flex justify-content-between align-items-center mb20">
                        <h4 class="darkblue fw-bold">Latest Our Teams</h4>
                        <div class="tambah__anggota">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah Anggota <i class="bi bi-plus text-white"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="tagline" class="form-label">Masukkan nama anggota</label>
                                                    <input required type="text" class="form-control" name="tagline" id="tagline" aria-describedby="emailHelp" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tagline" class="form-label">Masukkan posisi</label>
                                                    <input required type="text" class="form-control" name="tagline" id="tagline" aria-describedby="emailHelp" />
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th scope="col" class="text-center nomor">No</th>
                            <th scope="col">Nama Anggota</th>
                            <th scope="col">Posisi</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data -->
                        <tr>
                            <td scope="row" class="text-center">1</td>
                            <td>Rafly</td>
                            <td>Leader</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <div class="btn__edit me-2">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="button bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#modal1">
                                            <i class="bi bi-pencil-square blue"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="">
                                                            <div class="mb-3">
                                                                <label for="tagline" class="form-label">Masukkan nama baru</label>
                                                                <input required type="text" class="form-control" name="tagline" id="tagline" aria-describedby="emailHelp" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="tagline" class="form-label">Masukkan posisi baru</label>
                                                                <input required type="text" class="form-control" name="tagline" id="tagline" aria-describedby="emailHelp" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn__hapus">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="button bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#modal_">
                                            <i class="bi bi-trash3-fill red"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal_>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title fw-bold" id="exampleModalLabel">
                                                            Konfirmasi
                                                        </h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4 style="text-align: left">
                                                            Yakin ingin menghapus data?
                                                        </h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                            Batal
                                                        </button>
                                                        <a href="">
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
    </div>

</div>
<!-- End main page -->

<?= $this->endSection(); ?>