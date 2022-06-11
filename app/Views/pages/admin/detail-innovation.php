<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <div class="d-flex align-items-baseline mb10">
        <a href="<?= base_url('innovation/innovation'); ?>" class="text-decoration-none darkgreen">Innovation</a>
        <h4 class="mx-2">/</h4>
        <a href="" class="text-decoration-none grey">Innovation Detail</a>
    </div>
    <div class="inovasi__section mb20">
        <h2 class="fw-bold darkgreen mb10">Innovation Detail</h2>
        <div class="row">
            <div class="col-md-4 col-12">
                <img class="gambar"
                    src="<?= base_url(); ?>/assets/images/innovation/<?= $innovation['image_innovation']; ?>"
                    alt="image innovation">
                </img>
            </div>
            <div class=" col-md-8 col-12">
                <div class="content border-bottom pb-3 mb-3">
                    <div class="row">
                        <div class="col-4">
                            <h3>Innovation Name</h3>
                        </div>
                        <div class="col-1">
                            <h3>:</h3>
                        </div>
                        <div class="col-7">
                            <h3><?= $innovation['name_innovation']; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="content border-bottom pb-3 mb-3">
                    <div class="row">
                        <div class="col-4">
                            <h3>Description</h3>
                        </div>
                        <div class="col-1">
                            <h3>:</h3>
                        </div>
                        <div class="col-7">
                            <h3><?= $innovation['description_innovation']; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="content border-bottom pb-3 mb-3">
                    <div class="row">
                        <div class="col-4">
                            <h3>Uniqueness</h3>
                        </div>
                        <div class="col-1">
                            <h3>:</h3>
                        </div>
                        <div class="col-7">
                            <?php $i = 1; ?>
                            <?php foreach ($uniq as $uniq) : ?>
                            <h3><?= $i++; ?>. <?= $uniq['name_uniqueness']; ?></h3>
                            <?php if ($uniq['description_uniqueness'] != null) : ?>
                            <p class="grey"><?= $uniq['description_uniqueness']; ?></p>
                            <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="content border-bottom pb-3 mb-3">
                    <div class="row">
                        <div class="col-4">
                            <h3>Project <?= ucfirst($project[0]['category']); ?></h3>
                        </div>
                        <div class="col-1">
                            <h3>:</h3>
                        </div>
                        <div class="col-7">
                            <?php $j = 1; ?>
                            <?php foreach ($project as $project) : ?>
                            <h3><?= $j++; ?>. <?= $project['name_project_impact']; ?></h3>
                            <?php if ($project['description_project_impact'] != null) : ?>
                            <p class="grey"><?= $project['description_project_impact']; ?></p>
                            <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="<?= base_url('innovation/editInnovation/' . $innovation['id_innovation']); ?>"><button
                        type="button" class="btn btn-primary">Edit</button></a>
            </div>
        </div>
    </div>

</div>
<!-- End main page -->

<?= $this->endSection(); ?>