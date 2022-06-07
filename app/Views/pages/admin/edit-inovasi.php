<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <div class="d-flex align-items-baseline mb10">
        <a href="<?= base_url('admin/inovasi'); ?>" class="text-decoration-none darkgreen">Innovation</a>
        <h4 class="mx-2">/</h4>
        <a href="<?= base_url('admin/detailInovasi'); ?>" class="text-decoration-none darkgreen">Innovation Detail</a>
        <h4 class="mx-2">/</h4>
        <a href="" class="text-decoration-none grey">Innovation Edit</a>
    </div>
    <div class="tagline__section mb20">
        <h2 class="fw-bold darkgreen mb10">Innovation Edit</h2>
        <form action="">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Innovation Name</label>
                        <input type="text" name="name" class="form-control" id="name" required aria-describedby="emailHelp" value="" />
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="uniq" class="form-label">Uniqueness</label>
                        <div class="form-floating">
                            <textarea class="form-control p-2" name="alamat" required id="alamat" style="height: 100px"></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="uniq" class="form-label">Project Impact</label>
                        <div class="form-floating">
                            <textarea class="form-control p-2" name="alamat" required id="alamat" style="height: 100px"></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="uniq" class="form-label">Description</label>
                        <div class="form-floating">
                            <textarea class="form-control p-2" name="alamat" required id="alamat" style="height: 187px"></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="npsn" class="form-label">Ubah Gambar <span class="grey">(Ukuran optimal foto 1280x720 dengan format .png)</span></label>
                        <input type="file" class="form-control" name="foto" id="foto" aria-describedby="emailHelp" value="" />
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="<?= base_url('admin/detailInovasi'); ?>"><button type="button" class="btn btn-secondary">Batal</button></a>
                    <a href="" class="ms-2"><button type="button" class="btn btn-primary">Simpan</button></a>
                </div>
            </div>

        </form>
    </div>

</div>
<!-- End main page -->

<?= $this->endSection(); ?>