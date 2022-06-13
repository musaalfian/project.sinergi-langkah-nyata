<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <form action="/admin/saveChangeTagline" method="post">
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
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tagline</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="tagline" class="form-label">Enter a new tagline</label>
                                <input required type="text" class="form-control" name="tagline" id="tagline" aria-describedby="emailHelp" value="<?= $tagline['tagline']; ?>" />
                            </div>
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
    <!-- end tagline -->
    <form action="/admin/saveChangeDescriptionTagline" method="post">
        <div class="deskripsi__tagline mb20">
            <h2 class="fw-bold darkgreen mb10">Description Tagline</h2>
            <div class="tagline__content p-3 mb-2">
                <h2><?= $tagline['description_tagline']; ?></h2>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#descriptionTagline">
                Edit
            </button>

            <!-- Modal -->
            <div class="modal fade" id="descriptionTagline" tabindex="-1" aria-labelledby="descriptionTaglineLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Description Tagline</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="description_tagline" class="form-label">enter new description</label>
                                <input required type="text" class="form-control" name="description_tagline" id="description_tagline" aria-describedby="emailHelp" value="<?= $tagline['description_tagline']; ?>" />
                            </div>
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
    <!-- end description tagline -->
    <form action="/admin/saveChangeImageTagline" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        <input type="text" value="<?= $tagline['image_tagline']; ?>" name="image_tagline_old" hidden>
        <div class="deskripsi__tagline mb20">
            <h2 class="fw-bold darkgreen mb10">Image Tagline</h2>
            <div class="p-3 mb-2">
                <img class="image__tagline" src="<?= base_url(); ?>/assets/images/tagline/<?= $tagline['image_tagline']; ?>" alt="" srcset="">
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageTagline">
                Edit
            </button>

            <!-- Modal -->
            <div class="modal fade" id="imageTagline" tabindex="-1" aria-labelledby="imageTaglineLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imageTaglineLabel">Image Tagline</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row ">
                                <div class="input-file input-file-image">
                                    <img class="img-upload-preview mb-2" width="100" height="100" src="https://via.placeholder.com/100">
                                    <input class="form-control form-control-file" type="file" id="image_tagline" name="image_tagline" accept="image/*" required>
                                    <label for="image_tagline" class="btn btn-primary btn-round mt-2"><i class="fa fa-file-image text-white"></i>
                                        Upload Image</label>
                                    <div class="invalid-feedback">
                                        Image is required and file size not more than 5mb
                                    </div>
                                </div>
                            </div>
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
    <!-- end image tagline -->
    <form action="/admin/saveChangeAboutUs" method="post">
        <div class="about_us">
            <h2 class="fw-bold darkgreen mb10">About Us</h2>
            <div class="tagline__content p-3 mb-2">
                <h2><?= $tagline['about_us']; ?></h2>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#aboutUs">
                Edit
            </button>

            <!-- Modal -->
            <div class="modal fade" id="aboutUs" tabindex="-1" aria-labelledby="aboutUsLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">About Us</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="about_us" class="form-label">enter new "about us"</label>
                                <input required type="text" class="form-control" name="about_us" id="about_us" aria-describedby="about_us" value="<?= $tagline['about_us']; ?>" />
                            </div>
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
    <!-- end about us -->

</div>
<!-- End main page -->

<?= $this->endSection(); ?>