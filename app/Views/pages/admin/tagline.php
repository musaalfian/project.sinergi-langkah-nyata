<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <form action="/admin/simpanUbahTagline" method="post">
        <div class="tagline__section mb20">
            <h2 class="fw-bold darkgreen mb10">Tagline</h2>
            <div class="tagline__content p-3 mb-2">
                <h2><?= $tagline['tagline']; ?></h2>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Edit
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tagline</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="tagline" class="form-label">Enter a new tagline</label>
                                    <input required type="text" class="form-control" name="tagline" id="tagline"
                                        aria-describedby="emailHelp" value="<?= $tagline['tagline']; ?>" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save Change</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="/admin/simpanUbahDeskripsiTagline" method="post">
        <div class="deskripsi__tagline">
            <h2 class="fw-bold darkgreen mb10">Description Tagline</h2>
            <div class="tagline__content p-3 mb-2">
                <h2><?= $tagline['description_tagline']; ?></h2>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Edit
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Description Tagline</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="tagline" class="form-label">enter new description</label>
                                    <input required type="text" class="form-control" name="tagline" id="tagline"
                                        aria-describedby="emailHelp" value="<?= $tagline['description_tagline']; ?>" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Change</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<!-- End main page -->

<?= $this->endSection(); ?>