<?= $this->extend('templates/template-user'); ?>

<?= $this->section('content'); ?>

<!-- Main page -->
<div class="hero__tim bgdarkgreen">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 mb-2 mb-md-0 col-12">
                <div class="foto__leader d-flex justify-content-center">
                    <img src="<?= base_url('/assets/img/leader-sample.png'); ?>" alt="">
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="caption d-flex align-items-center">
                    <h1 class="text-white"><?= $leader['motivational_words']; ?>.</h1>
                    <h2 class="text-white"><i class="fa-solid fa-quote-left"></i></h2>
                    <h3 class="text-white"><i class="fa-solid fa-quote-right"></i></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team px text-center">
    <div class="container">
        <h2 class="mb20 fw-bold">Our Team</h2>
        <div class="desc m-auto">
            <h4 class="lightlattegray">Our expert team is made up of creatives with technical knowhow, strategists who
                think
                outside of the box, dan developers who push innovation.
            </h4>
        </div>
    </div>
</div>
<div class="tim__card">
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($team as $team) : ?>
            <div class="col-sm-6 col-lg-4 mb-4 col-12">
                <div class="card__content">
                    <img src="<?= base_url(); ?>/assets/images/team/<?= $team['photo_team']; ?>"
                        class="gambar bglight mb20"></img>
                    <div class="desc mb20">
                        <h3 class="fw-bold mb-1"><?= $team['name_team']; ?></h3>
                        <h4><?= ucfirst($team['position_team']); ?></h4>
                    </div>
                    <div class="d-flex">
                        <a href="" class=" text-decoration-none">
                            <div class="icon d-flex justify-content-center align-items-center me-3"><i
                                    class="fa-brands fa-instagram text-white fs16"></i></div>
                        </a>
                        <a href="" class=" text-decoration-none">
                            <div class="icon d-flex justify-content-center align-items-center me-3"><i
                                    class="fa-brands fa-twitter text-white fs16"></i></div>
                        </a>
                        <a href="" class=" text-decoration-none">
                            <div class="icon d-flex justify-content-center align-items-center"><i
                                    class="fa-brands fa-linkedin-in text-white fs16"></i></div>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- End main page -->
<?= $this->endSection(); ?>