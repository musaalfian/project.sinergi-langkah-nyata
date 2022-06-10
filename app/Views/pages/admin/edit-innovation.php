<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <div class="d-flex align-items-baseline mb10">
        <a href="<?= base_url('innovation/innovation'); ?>" class="text-decoration-none darkgreen">Innovation</a>
        <h4 class="mx-2">/</h4>
        <a href="<?= base_url('innovation/detailInnovation/' . $innovation['id_innovation']); ?>"
            class="text-decoration-none darkgreen">Innovation
            Detail</a>
        <h4 class="mx-2">/</h4>
        <a href="" class="text-decoration-none grey">Innovation Edit</a>
    </div>
    <div class="tagline__section mb20">
        <h2 class="fw-bold darkgreen mb10">Innovation Edit</h2>

        <div class="alert alert-primary">
            Note for Uniqueness and Project Impact:
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
        <form action="/innovation/saveEditInnovation/<?= $innovation['id_innovation']; ?>" method="post"
            enctype="multipart/form-data" class="needs-validation" novalidate>
            <input hidden type="text" name="image_old" value="<?= $innovation['image_innovation']; ?>">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Innovation Name<span class="red">*</span></label>
                        <input required type="text" name="name" class="form-control" id="name"
                            value="<?= $innovation['name_innovation']; ?>" />
                        <div class="invalid-feedback">
                            Innovation name is required
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="uniq" class="form-label">Uniqueness<span class="red">*</span></label>
                        <div class="form-floating">
                            <textarea
                                class="form-control p-2  <?= ($validation->hasError('uniqueness')) ? 'is-invalid' : ''; ?>"
                                name="uniqueness" required id="uniq" style="height: 100px"><?php foreach ($uniq as $uniq) : ?><?= $uniq ?><?php endforeach ?>
                            </textarea>
                            <div class="invalid-feedback">
                                <?= ($validation->getError('uniqueness') == '') ? 'Uniqueness is required' : str_replace('_', ' ', $validation->getError('uniqueness')); ?>
                                <!-- Uniqueness is required -->
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 impact_feature">
                        <label>Project</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project" id="project1" value="impact"
                                <?= ($category_project == 'impact') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="project1">
                                Impact
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project" id="project2" value="feature"
                                <?= ($category_project == 'feature') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="project2">
                                Feature
                            </label>
                        </div>
                        <label for="projectInput" class="form-label" id="label_impact">
                            Project Impact
                        </label>
                        <label for="projectInput" class="form-label" id="label_feature">
                            Project Feature
                        </label><span class="red">*</span>
                        <div class="form-floating">
                            <textarea
                                class="form-control p-2 <?= ($validation->hasError('project_impact')) ? 'is-invalid' : ''; ?>"
                                name="project_impact" required id="impact"
                                style="height: 100px"><?php foreach ($project as $project) : ?><?= $project ?><?php endforeach ?></textarea>
                            <div class="invalid-feedback">
                                <?= ($validation->getError('project_impact') == '') ? 'Project Impact is required' : str_replace('_', ' ', $validation->getError('project_impact')); ?>
                                <!-- Project Impact is required -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description<span class="red">*</span></label>
                        <div class="form-floating">
                            <textarea class="form-control p-2" name="description" required id="description"
                                style="height: 187px"><?= $innovation['description_innovation']; ?></textarea>
                            <div class="invalid-feedback">
                                Description is required
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="image_innovation" class="form-label">Image<span class="red">*</span><span
                                class="grey">(Optimum photo size
                                1280x720 with format .png)</span></label>
                        <input hidden type="file" accept="image/*" class="form-control" name="img_innovation"
                            id="edit_img_innovation" />
                        <label class=" bg-white" style="cursor: pointer; border: 1px; border-color: gray;"
                            for="edit_img_innovation">
                            <a class="btn btn-secondary">Choose File</a>
                            <?= $innovation['image_innovation']; ?>
                        </label>
                        <div class="invalid-feedback">
                            Image is required and file size not more
                            than
                            5mb
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="<?= base_url('admin/detailInovasi'); ?>"><button type="button"
                            class="btn btn-secondary">Cancel</button></a>
                    <a href="" class="ms-2"><button type="submit" class="btn btn-primary">Save</button></a>
                </div>
            </div>

        </form>
    </div>

</div>
<!-- End main page -->

<?= $this->endSection(); ?>