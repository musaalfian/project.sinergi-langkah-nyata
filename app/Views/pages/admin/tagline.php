<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <div class="tagline__section mb20">
        <h2 class="fw-bold darkgreen mb10">Tagline</h2>
        <div class="tagline__content p-3">
            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, quaerat.</h2>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ubah
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
                                <label for="tagline" class="form-label">Masukkan tagline baru</label>
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
    <div class="deskripsi__tagline">
        <h2 class="fw-bold darkgreen mb10">Deskripsi Tagline</h2>
        <div class="tagline__content p-3">
            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, quaerat.</h2>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            Ubah
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="tagline" class="form-label">Masukkan deskripsi tagline baru</label>
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
<!-- End main page -->

<?= $this->endSection(); ?>