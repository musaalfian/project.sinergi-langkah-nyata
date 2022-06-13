<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <div class="tagline__section mb20">
        <h2 class="fw-bold darkgreen mb10">Our Teams</h2>
        <div class="tab-pane fade show active bgwhite" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tabel__section px-3 table-responsive pt20 pb20">
                <table class="table table-responsive table-hover mb20i border-bottom-0" id="dataSekolahSd">
                    <div class="d-flex justify-content-between align-items-center py-3 mb20">
                        <h4 class="darkblue fw-bold">Latest Our Teams</h4>
                        <div class="tambah__anggota">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Add Member <i class="bi bi-plus text-white"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="/team/saveAddTeam" method="post" enctype="multipart/form-data" class="needs-validation">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="name_team" class="form-label">Enter member's
                                                        name<span class="red">*</span></label>
                                                    <input type="text" class="form-control <?= ($validation->hasError('name_team')) ? 'is-invalid' : ''; ?>" name="name_team" id="name_team" required>
                                                    <div class="invalid-feedback">
                                                        <?= ($validation->getError('name_team') == '') ? 'Name is required' : str_replace('_', ' ', $validation->getError('name_team')); ?>
                                                    </div>
                                                </div>
                                                <!-- member name -->
                                                <div class="mb-3">
                                                    <label for="position_team" class="form-label">Enter
                                                        Position <span class="red">*</span></label>
                                                    <input type="text" class="form-control <?= ($validation->hasError('position_team')) ? 'is-invalid' : ''; ?>" required name="position_team" id="position_team" />
                                                    <div class="invalid-feedback">

                                                        <?= ($validation->getError('position_team') == '') ? 'Position is required' : str_replace('_', ' ', $validation->getError('position_team')); ?>

                                                    </div>
                                                </div>
                                                <!-- position member -->
                                                <div class="mb-3">
                                                    <label for="motivational_words" class="form-label">Enter
                                                        Motivational
                                                        Words</label>
                                                    <input type="text" class="form-control" name="motivational_words" id="motivational_words" />
                                                </div>
                                                <!-- position member -->
                                                <div class="mb-3 row">
                                                    <label for="member_img" class="form-label">Image Member
                                                        <span class="red">*</span>
                                                        <small class="m-0 grey">Max 5 MB</small>
                                                    </label>
                                                    <div class="row ">
                                                        <div class="input-file input-file-image">
                                                            <img class="img-upload-preview mb-2" width="100" height="100" src="https://via.placeholder.com/100">
                                                            <input class="form-control form-control-file <?= ($validation->hasError('member_img')) ? 'is-invalid' : ''; ?>" type="file" id="member_img" name="member_img" accept="image/*" required>
                                                            <label for="member_img" class="btn btn-primary btn-round mt-2"><i class="fa fa-file-image text-white"></i>
                                                                Upload Image</label>
                                                            <div class="invalid-feedback">
                                                                <?= ($validation->getError('member_img') == '') ? 'Image is required and file size not more than 5mb' : str_replace('_', ' ', $validation->getError('member_img')); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end member image -->
                                                <p>Social Media</p>
                                                <div class="row">
                                                    <?php foreach ($socmed as $socmed_add) : ?>
                                                        <div class="col-6 mt-2">
                                                            <label class="form-check-label" for="<?= $socmed_add; ?>">
                                                                <?= ucfirst($socmed_add); ?>
                                                            </label>
                                                        </div>
                                                        <div class="col-6 mt-2">
                                                            <input type="text" class="form-control" id="link_<?= $socmed_add; ?>" name="link_<?= $socmed_add; ?>">
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th scope="col" class="text-center nomor">No</th>
                            <th scope="col">Member's name</th>
                            <th scope="col">Position</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data -->
                        <?php $i = 1 ?>
                        <?php foreach ($team as $dataTeam) : ?>

                            <tr>
                                <td scope="row" class="text-center"><?= $i++; ?></td>
                                <td><?= $dataTeam['name_team']; ?></td>
                                <td><?= $dataTeam['position_team']; ?></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <div class="btn__edit me-2">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="button bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#modal_<?= $dataTeam['id_team']; ?>">
                                                <i class="bi bi-pencil-square blue"></i>
                                            </button>
                                            <!-- Modal -->

                                            <div class="modal fade" id="modal_<?= $dataTeam['id_team']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="/team/saveEditTeam/<?= $dataTeam['id_team']; ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                                            <input type="text" hidden name="member_img_old_<?= $dataTeam['id_team']; ?>" value="<?= $dataTeam['photo_team']; ?>">
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="name_team_<?= $dataTeam['id_team']; ?>" class="form-label">Enter member's
                                                                        name<span class="red">*</span></label>
                                                                    <input type="text" class="form-control" name="name_team_<?= $dataTeam['id_team']; ?>" id="name_team_<?= $dataTeam['id_team']; ?>" required value="<?= $dataTeam['name_team']; ?>">
                                                                    <div class="invalid-feedback">
                                                                        Name is required
                                                                    </div>
                                                                </div>
                                                                <!-- member name -->
                                                                <div class="mb-3">
                                                                    <label for="position_team_<?= $dataTeam['id_team']; ?>" class="form-label">Enter
                                                                        Position <span class="red">*</span></label>
                                                                    <input type="text" class="form-control" required name="position_team_<?= $dataTeam['id_team']; ?>" id="position_team_<?= $dataTeam['id_team']; ?>" value="<?= $dataTeam['position_team']; ?>" />
                                                                    <div class="invalid-feedback">
                                                                        Position is required
                                                                    </div>
                                                                </div>
                                                                <!-- position member -->
                                                                <div class="mb-3">
                                                                    <label for="motivational_words_<?= $dataTeam['id_team']; ?>" class="form-label">Enter
                                                                        Motivational
                                                                        Words</label>
                                                                    <input type="text" class="form-control" name="motivational_words_<?= $dataTeam['id_team']; ?>" id="motivational_words_<?= $dataTeam['id_team']; ?>" value="<?= $dataTeam['motivational_words']; ?>" />
                                                                </div>
                                                                <!-- position member -->
                                                                <div class="mb-3 row">
                                                                    <label for="member_img_<?= $dataTeam['id_team']; ?>" class="form-label">Image Member
                                                                        <span class="red">*</span>
                                                                        <small class="m-0 grey">Max 5 MB</small>
                                                                    </label>
                                                                    <div class="row ">
                                                                        <div class="input-file" id="edit_image_<?= $dataTeam['id_team']; ?>">
                                                                            <?php if ($dataTeam['photo_team'] != null) { ?>
                                                                                <img id="img_edit_preview_<?= $dataTeam['id_team']; ?>" width="100" height="100" src="<?= base_url(); ?>/assets/images/team/<?= $dataTeam['photo_team']; ?>">
                                                                            <?php } else { ?>
                                                                                <img id="img_edit_preview_<?= $dataTeam['id_team']; ?>" width="100" height="100" src="https://via.placeholder.com/100">
                                                                            <?php } ?>
                                                                            <input hidden class="form-control form-control-file <?= ($validation->hasError('member_img_' . $dataTeam['id_team'])) ? 'is-invalid' : ''; ?>" type="file" id="member_img_<?= $dataTeam['id_team']; ?>" name="member_img_<?= $dataTeam['id_team']; ?>" accept="image/*" value="<?= $dataTeam['photo_team']; ?>">
                                                                            <label for="member_img_<?= $dataTeam['id_team']; ?>" class="btn btn-primary btn-round mt-2"><i class="fa fa-file-image text-white"></i>
                                                                                Upload Image</label>
                                                                            <div class="invalid-feedback">
                                                                                Image is required and file size not more
                                                                                than
                                                                                5mb
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end member image -->
                                                                <p>Social Media</p>
                                                                <div class="row">
                                                                    <?php foreach ($dataTeam['socmed'] as $socmed_edit) : ?>
                                                                        <div class="col-6 mt-2">
                                                                            <label class="form-check-label" for="<?= $socmed_edit['name_social_media']; ?>">
                                                                                <?= ucfirst($socmed_edit['name_social_media']); ?>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-6 mt-2">
                                                                            <input type="text" class="form-control" id="link_<?= $socmed_edit['name_social_media']; ?>" value="<?= $socmed_edit['link_social_media']; ?>" name="link_<?= $socmed_edit['name_social_media']; ?>">
                                                                        </div>
                                                                    <?php endforeach ?>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn__hapus">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="button bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#modal_hapus_<?= $dataTeam['id_team']; ?>">
                                                <i class="bi bi-trash3-fill red"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal_hapus_<?= $dataTeam['id_team']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title fw-bold" id="exampleModalLabel">
                                                                Confirm
                                                            </h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4 style="text-align: left">
                                                                Are you sure you want to delete data?
                                                            </h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                                Cancel
                                                            </button>
                                                            <a href="/team/deleteTeam/<?= $dataTeam['id_team']; ?>">
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
                            <script>
                                // console.log($("#sumTeam").val());
                                function readURLEditTeam_<?= $dataTeam['id_team']; ?>(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        console.log(input);
                                        reader.onload = function(e) {
                                            $(input)
                                                .parent("#edit_image_<?= $dataTeam['id_team']; ?>")
                                                .find("#img_edit_preview_<?= $dataTeam['id_team']; ?>")
                                                .attr("src", e.target.result);
                                        };

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }

                                $('#edit_image_<?= $dataTeam['id_team']; ?> input[type="file"').change(function() {
                                    if (this.files[0].size > 5242880) {
                                        $(this).addClass("is-invalid");
                                        this.value = "";
                                    } else {
                                        readURLEditTeam_<?= $dataTeam['id_team']; ?>(this);
                                        // console.log(this);
                                        $(this).removeClass("is-invalid");
                                        $(this).addClass("is-valid");
                                    }
                                });
                            </script>
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