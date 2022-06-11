<?= $this->extend('templates/template-user'); ?>

<?= $this->section('content'); ?>

<!-- Main page -->
<div class="px">
    <div class="innovation container text-center mb60">
        <h2 class="mb20 fw-bold">Innovation</h2>
        <div class="desc m-auto">
            <h4 class="lightlattegray">Our expert team is made up of creatives with technical knowhow, strategists who
                think
                outside of the box, dan developers who push innovation
            </h4>
        </div>
    </div>
    <?php $i = 1; ?>
    <?php foreach ($innovation as $innovation) : ?>
    <div class="container mb60">
        <div class="innovation__content bgdarkgreen">
            <div class="inovasi__header d-flex justify-content-between align-items-center">
                <h1 class="orange fw-bold"><?= $innovation['name_innovation']; ?></h1>
                <div class="gambar1 bglight mt-3 mb-3"></div>
                <div class="inovasi__desc">
                    <h5 class="text-white">Innovation <?= $i++; ?></h5>
                </div>
            </div>
            <img class="main__gambar mt-3 mb-3"
                src="<?= base_url(); ?>/assets/images/innovation/<?= $innovation['image_innovation']; ?>">
            </img>
            <div class="deskripsi text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold">Description</h4>
                    <button class="btn__dropdown btn bg-transparent p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#deskripsi_<?= $innovation['id_innovation']; ?>" aria-expanded="false"
                        aria-controls="collapseExample">
                        <i class="fa-solid fa-angle-down text-white"></i>
                    </button>
                </div>
                <div class="collapse" id="deskripsi_<?= $innovation['id_innovation']; ?>">
                    <h5 class="mt-2"><?= $innovation['description_innovation']; ?></h5>
                </div>
            </div>
            <div class="uniq mt-2 text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold">Uniqueness</h4>
                    <button class="btn__dropdown btn bg-transparent p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#uniq_<?= $innovation['id_innovation']; ?>" aria-expanded="false"
                        aria-controls="collapseExample">
                        <i class="fa-solid fa-angle-down text-white"></i>
                    </button>
                </div>
                <div class="collapse" id="uniq_<?= $innovation['id_innovation']; ?>">
                    <?php $j = 1; ?>
                    <?php foreach ($innovation['uniq'] as $uniq) : ?>
                    <h5 class="mt-2 fw-bold"><?= $j++; ?>. <?= $uniq['name_uniqueness']; ?></h5>
                    <?php if ($uniq['description_uniqueness'] != null) : ?>
                    <p><?= $uniq['description_uniqueness']; ?></p>
                    <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="project mt-2 text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold">Project Impact</h4>
                    <button class="btn__dropdown btn bg-transparent p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#project_<?= $innovation['id_innovation']; ?>" aria-expanded="false"
                        aria-controls="collapseExample">
                        <i class="fa-solid fa-angle-down text-white"></i>
                    </button>
                </div>
                <div class="collapse" id="project_<?= $innovation['id_innovation']; ?>">
                    <?php $k = 1; ?>
                    <?php foreach ($innovation['project'] as $project) : ?>
                    <h5 class="fw-bold mt-2"><?= $k++; ?>. <?= $project['name_project_impact']; ?></h5>
                    <?php if ($project['description_project_impact'] != null) : ?>
                    <p><?= $project['description_project_impact']; ?></p>
                    <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach ?>

</div>
<!-- End main page -->
<?= $this->endSection(); ?>