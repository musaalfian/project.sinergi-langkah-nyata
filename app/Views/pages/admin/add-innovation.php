<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <div class="d-flex align-items-baseline mb10">
        <a href="<?= base_url('innovation/innovation'); ?>" class="text-decoration-none darkgreen">Innovation</a>
        <!-- <h4 class="mx-2">/</h4>
        <a href="<?= base_url('/innovation/detailinnovation'); ?>" class="text-decoration-none darkgreen">Innovation Detail</a> -->
        <h4 class="mx-2">/</h4>
        <a href="" class="text-decoration-none grey">Add Innovation</a>
    </div>
    <div class="tagline__section mb20">
        <h2 class="fw-bold darkgreen mb10">Add Innovation</h2>
        <div class="alert alert-primary">
            Note for Uniqueness and Project (Impact or Feature) :
            <ol>
                <li>list can contain numbers, title, and description (optional).
                </li>
                <li>the title and description separator is a colon (:)
                </li>
                <li>end of list contains semicolon (;)
                </li>
                <li>example = 1. A Daily reminder to take care the loved ones : We hope that with the use of
                    this non-invasive Glucosemeter, we can always take care of our loved ones around us;
                </li>
            </ol>
        </div>
        <form action="/innovation/saveAddInnovation" method="post" enctype="multipart/form-data"
            class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Innovation Name<span class="red">*</span></label>
                        <input required type="text" name="name" class="form-control" id="name" required />
                        <div class="invalid-feedback">
                            Innovation name is required
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="uniq" class="form-label">Uniqueness<span class="red">*</span></label>
                        <div class="form-floating">
                            <textarea class="form-control p-2" name="uniq" required id="uniq"
                                style="height: 100px"></textarea>
                            <div class="invalid-feedback">
                                Uniqueness is required
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 impact_feature">
                        <label>Project</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project" id="project1" value="impact"
                                checked>
                            <label class="form-check-label" for="project1">
                                Impact
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project" id="project2" value="feature">
                            <label class="form-check-label" for="project2">
                                Feature
                            </label>
                        </div>
                        <label for="projectInput" class="form-label" id="label_impact">
                            Project Impact
                        </label>
                        <label for="projectInput" class="form-label" id="label_feature">
                            Project Feature
                        </label>
                        <span class="red">*</span>
                        <div class="form-floating">
                            <textarea class="form-control p-2" name="projectInput" required id="projectInput"
                                style="height: 100px"></textarea>
                            <div class="invalid-feedback">
                                Project Impact is required
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description<span class="red">*</span></label>
                        <div class="form-floating">
                            <textarea required class="form-control p-2" name="description" required id="description"
                                style="height: 187px"></textarea>
                            <div class="invalid-feedback">
                                Description is required
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="img_innovation" class="form-label">Image<span class="red">*</span><span
                                class="grey">(Optimum photo size
                                1280x720 with format .png)</span></label>
                        <input required type="file" accept="image/*" class="form-control" name="img_innovation"
                            id="img_innovation" />
                        <div class="invalid-feedback">
                            Image is required and file size not more
                            than
                            5mb
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="<?= base_url('admin/innoation'); ?>"><button type="button"
                            class="btn btn-secondary">Cancel</button></a>
                    <button type="submit" class="btn btn-primary ms-2">Save</button>
                </div>
            </div>

        </form>
    </div>

</div>
<!-- End main page -->

<?= $this->endSection(); ?>