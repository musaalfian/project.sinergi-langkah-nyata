<?= $this->extend('templates/template-user'); ?>

<?= $this->section('content'); ?>

<!-- Main page -->
<div class="hero d-flex align-items-center bgdarkgreen" id="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-12 text-white">
                <h2 class="mb20 fs18"><?= $tagline['tagline']; ?></h2>
                <h1 class="mb40 fs20"><?= $tagline['description_tagline']; ?>.</h1>
                <div class="d-flex"> <?php $i = 1 ?> <?php foreach ($innovation as $innovation_name) : ?>
                    <a href="/user/innovation" <?= ($i != 1) ? 'class="ms-3"' : ''; ?>>
                        <button
                            class="btn btn-primary <?= ($i == 1) ? 'bgorange' : 'bgtrans'; ?> "><?= $innovation_name['name_innovation']; ?>
                        </button>
                    </a>
                    <?php $i++ ?>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="gambar mb20">
                    <img src="<?= base_url('assets/images/tagline/' . $tagline['image_tagline']); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tentang px text-center bglight">
    <div class="container">
        <h2 class="mb20 fw-bold">About Us</h2>
        <div class="content m-auto">
            <h4 class="text-center lightlattegray"><?= $tagline['about_us']; ?></h4>
        </div>
    </div>
</div>
<div class="inovasi bglight">
    <?php $i = 1 ?>
    <?php foreach ($innovation as $innovation_data) : ?>
    <?php if (($i % 2) == 1) : ?>
    <div class="mb60">
        <div class="inovasi__content bgdarkgreen px">
            <div class="row align-items-center">
                <div class="col-md-3 col-12">
                    <div class="bg__main">
                        <img
                            src="<?= base_url(); ?>/assets/images/innovation/<?= $innovation_data['image_innovation']; ?>"></img>
                    </div>
                </div>
                <div class="col-md-9 col-12">
                    <div class="inovasi__header d-flex justify-content-between align-items-center mb20">
                        <h1 class="orange fw-bold"><?= $innovation_data['name_innovation']; ?></h1>
                        <div class="bg__second my-2">
                            <img
                                src="<?= base_url(); ?>/assets/images/innovation/<?= $innovation_data['image_innovation']; ?>"></img>
                        </div>
                        <div class="inovasi__desc">
                            <h5 class="text-white">Innovation <?= $i; ?></h5>
                        </div>
                    </div>
                    <div class="text-white mb20">
                        <h4>
                            <?php $j = 1; ?>
                            <?php foreach ($innovation_data['description_cut'] as $description) : ?>
                            <?php if ($j <= 3) : ?>
                            <?= $description ?>.
                            <?php else : ?>
                            <?php break ?>
                            <?php endif ?>
                            <?php $j++ ?>
                            <?php endforeach ?>
                        </h4>
                    </div>
                    <div class="inovasi__btn">
                        <a href="/user/innovation" class=" text-decoration-none">
                            <button type="button"
                                class="btn__custom btn btn-primary w-25 d-flex align-items-center justify-content-center">
                                Go <i class="fa-solid fa-arrow-right-long ms-3"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php elseif (($i % 2) == 0) : ?>
    <div class="mx">
        <div class="inovasi__content bgdarkgreen px">
            <div class="row row__voiry align-items-center">
                <div class="col-md-3 col-12">
                    <div class="bg__main">
                        <img
                            src="<?= base_url(); ?>/assets/images/innovation/<?= $innovation_data['image_innovation']; ?>"></img>
                    </div>
                </div>
                <div class="col-md-9 col-12">
                    <div
                        class="inovasi__header d-flex justify-content-end justify-content-sm-between align-items-center mb20">
                        <div class="inovasi__desc">
                            <h5 class="text-white">Innovation <?= $i ?></h5>
                        </div>
                        <h1 class="orange fw-bold voiry"><?= $innovation_data['name_innovation']; ?></h1>
                        <div class="bg__second my-2">
                            <img
                                src="<?= base_url(); ?>/assets/images/innovation/<?= $innovation_data['image_innovation']; ?>"></img>
                        </div>
                    </div>
                    <div class="text-white mb20">
                        <h4 class="text-end">
                            <?php $j = 1; ?>
                            <?php foreach ($innovation_data['description_cut'] as $description) : ?>
                            <?php if ($j <= 3) : ?>
                            <?= $description ?>.
                            <?php else : ?>
                            <?php break ?>
                            <?php endif ?>
                            <?php $j++ ?>
                            <?php endforeach ?>
                        </h4>
                    </div>
                    <div class="inovasi__btn">
                        <a href="/user/innovation" class="text-decoration-none d-flex justify-content-end">
                            <button type="button"
                                class="btn__custom btn btn-primary w-25 d-flex align-items-center justify-content-center">
                                Go <i class="fa-solid fa-arrow-right-long ms-3"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>
    <?php $i++ ?>
    <?php endforeach ?>
</div>
<div class="container">
    <div class="saran m-auto">
        <div class="saran__content">
            <h3 class="darkgreen mb20 text-center fw-bold">Subcribe For Any Update <br>
                About Sinergi Langkah Nyata
            </h3>
            <form action="/user/saveEmail" method="post">
                <div class="input position-relative">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
                    <button type="submit" class="btn__custom btn btn-primary fs12">Send</button>
                </div>
            </form>
            <?php if (session()->getFlashdata('message-save-email')) : ?>
            <div class="alert alert-success text-center mt-3" role="alert">
                <?= session()->getFlashdata('message-save-email'); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- End main page -->
<?= $this->endSection(); ?>