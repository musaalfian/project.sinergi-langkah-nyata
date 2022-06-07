<?= $this->extend('templates/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="main__content px-4 pt40">
    <div class="d-flex align-items-baseline mb10">
        <a href="<?= base_url('admin/inovasi'); ?>" class="text-decoration-none darkgreen">Innovation</a>
        <h4 class="mx-2">/</h4>
        <a href="" class="text-decoration-none grey">Innovation Detail</a>
    </div>
    <div class="tagline__section mb20">
        <h2 class="fw-bold darkgreen mb10">Innovation Detail</h2>
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="gambar"></div>
            </div>
            <div class="col-md-8 col-12">
                <div class="content border-bottom mb-3">
                    <div class="row">
                        <div class="col-4">
                            <h3>Innovation Name</h3>
                        </div>
                        <div class="col-1">
                            <h3>:</h3>
                        </div>
                        <div class="col-7">
                            <h3>Smart Glucosemeter</h3>
                        </div>
                    </div>
                </div>
                <div class="content border-bottom mb-3">
                    <div class="row">
                        <div class="col-4">
                            <h3>Description</h3>
                        </div>
                        <div class="col-1">
                            <h3>:</h3>
                        </div>
                        <div class="col-7">
                            <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam facilis quis debitis eius, perferendis illo dicta dolor accusamus quisquam! Vel nulla voluptas facilis quas incidunt maiores. Amet assumenda laudantium id aliquam voluptates modi. Dolore dolorum ipsa praesentium facere illo eveniet.</h3>
                        </div>
                    </div>
                </div>
                <div class="content border-bottom mb-3">
                    <div class="row">
                        <div class="col-4">
                            <h3>Uniqueness</h3>
                        </div>
                        <div class="col-1">
                            <h3>:</h3>
                        </div>
                        <div class="col-7">
                            <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam facilis quis debitis eius, perferendis illo dicta dolor accusamus quisquam! Vel nulla voluptas facilis quas incidunt maiores. Amet assumenda laudantium id aliquam voluptates modi. Dolore dolorum ipsa praesentium facere illo eveniet.</h3>
                        </div>
                    </div>
                </div>
                <div class="content border-bottom mb-3">
                    <div class="row">
                        <div class="col-4">
                            <h3>Project Impact</h3>
                        </div>
                        <div class="col-1">
                            <h3>:</h3>
                        </div>
                        <div class="col-7">
                            <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam facilis quis debitis eius, perferendis illo dicta dolor accusamus quisquam! Vel nulla voluptas facilis quas incidunt maiores. Amet assumenda laudantium id aliquam voluptates modi. Dolore dolorum ipsa praesentium facere illo eveniet.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="<?= base_url('admin/ubahInovasi'); ?>"><button type="button" class="btn btn-primary">Edit</button></a>
            </div>
        </div>
    </div>

</div>
<!-- End main page -->

<?= $this->endSection(); ?>