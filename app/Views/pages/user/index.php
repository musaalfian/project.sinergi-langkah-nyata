<?= $this->extend('templates/template-user'); ?>

<?= $this->section('content'); ?>

<!-- Main page -->
<div class="hero d-flex align-items-center bgdarkgreen" id="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-12 text-white">
        <h2 class="mb20 fs18">Tagline</h2>
        <h1 class="mb40 fs20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit soluta, dicta placeat possimus deserunt, sit sapiente magnam nam labore itaque ipsam tempore saepe deleniti corrupti suscipit praesentium. Provident, error deleniti.</h1>
        <div class="d-flex">
          <a href="">
            <button class="btn btn-primary bgorange">Smart Glucosemeter</button>
          </a>
          <a href="" class="ms-3">
            <button class="btn btn-primary bgtrans">Voiry</button>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="gambar mb20">
          <img src="<?= base_url('assets/img/sdgs-logo.png'); ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tentang px text-center bglight">
  <div class="container">
    <h2 class="mb20 fw-bold">About Us</h2>
    <div class="content m-auto">
      <h4 class="text-center lightlattegray">We are a company that is engaged in innovation in the health sector to increase public awareness
        of the importance of technology in health and facilitate access to health services
        for the community to help achieve the third goal of the SDGs.</h4>
    </div>
  </div>
</div>
<div class="inovasi bglight">
  <div class="inovasi__content bgdarkgreen px">
    <div class="row">
      <div class="col-md-3 col-12">
        <div class="gambar"></div>
      </div>
      <div class="col-md-9 col-12">
        <div class="inovasi__header d-flex justify-content-between align-items-center mb20">
          <h1 class="orange fw-bold">Smart Glucosemeter</h1>
          <div class="gambar1"></div>
          <div class="inovasi__desc">
            <h5 class="text-white">Innovation 1</h5>
          </div>
        </div>
        <div class="text-white mb20">
          <h4>Early checking and monitoring of blood sugar is the key to preventing the risk of developing diabetes.
            Reaching 3rd SDGs, therefore, requires a closer look at strategies for educating regions that
            have poor knowledge of health especially ineducation-related to prevention and
            management procedures for this diabetes.
          </h4>
        </div>
        <div class="inovasi__btn">
          <a href="" class=" text-decoration-none">
            <button type="button" class="btn__custom btn btn-primary w-25 d-flex align-items-center justify-content-center">
              Go <i class="fa-solid fa-arrow-right-long ms-3"></i>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="mx">
    <div class="inovasi__content bgdarkgreen px">
      <div class="row row__voiry">
        <div class="col-md-3 col-12">
          <div class="gambar"></div>
        </div>
        <div class="col-md-9 col-12">
          <div class="inovasi__header d-flex justify-content-end justify-content-sm-between align-items-center mb20">
            <div class="inovasi__desc">
              <h5 class="text-white">Innovation 2</h5>
            </div>
            <h1 class="orange fw-bold voiry">Voiry</h1>
            <div class="gambar2"></div>
          </div>
          <div class="text-white mb20">
            <h4 class="text-end">Early checking and monitoring of blood sugar is the key to preventing the risk of developing diabetes.
              Reaching 3rd SDGs, therefore, requires a closer look at strategies for educating regions that
              have poor knowledge of health especially ineducation-related to prevention and
              management procedures for this diabetes.
            </h4>
          </div>
          <div class="inovasi__btn">
            <a href="" class="text-decoration-none d-flex justify-content-end">
              <button type="button" class="btn__custom btn btn-primary w-25 d-flex align-items-center justify-content-center">
                Go <i class="fa-solid fa-arrow-right-long ms-3"></i>
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="saran m-auto">
    <div class="saran__content">
      <h3 class="darkgreen mb20 text-center fw-bold">Subcribe For Any Update <br>
        About Sinergi Langkah Nyata
      </h3>
      <div class="input position-relative">
        <input type="email" class="form-control" id="email" placeholder="Your email">
        <button type="submit" class="btn__custom btn btn-primary fs12">Send</button>
      </div>
    </div>
  </div>
</div>
<!-- End main page -->
<?= $this->endSection(); ?>