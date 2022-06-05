<?= $this->extend('templates/template-user'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->

<div class="hero__section bgdarkgreen">
  <div class="px">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12 text-white">
          <h2 class="mb20">Tagline</h2>
          <h1 class="mb40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit soluta, dicta placeat possimus deserunt, sit sapiente magnam nam labore itaque ipsam tempore saepe deleniti corrupti suscipit praesentium. Provident, error deleniti.</h1>
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
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tentang__section px text-center bglight">
  <div class="container">
    <h1 class="mb20 ">About Us</h1>
    <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio magnam reprehenderit odit dicta voluptates eaque at iste. Ullam assumenda, dolorem maiores laborum cum error, architecto, dicta nemo rem libero expedita?</h2>
  </div>
</div>
<div class="inovasi__section bglight">
  <div class="inovasi__content bgdarkgreen px">
    <div class="row">
      <div class="col-md-3 col-12">
        <div class="gambar"></div>
      </div>
      <div class="col-md-9 col-12">
        <div class="d-flex justify-content-between align-items-center mb40">
          <h1 class="orange">Smart Glucosemeter</h1>
          <h4 class=" text-white">Innovation 1</h4>
        </div>
        <div class="text-white">
          <h2 class="mb10">Description</h2>
          <h3>Early checking and monitoring of blood sugar is the key to preventing the risk of developing diabetes.
            Reaching 3rd SDGs, therefore, requires a closer look at strategies for educating regions that
            have poor knowledge of health especially ineducation-related to prevention and
            management procedures for this diabetes.
          </h3>
        </div>
      </div>
    </div>
  </div>
  <div class="mx">
    <div class="inovasi__content bgdarkgreen px">
      <div class="row">
        <div class="col-md-9 col-12">
          <div class="d-flex justify-content-between align-items-center mb40">
            <h4 class=" text-white">Innovation 2</h4>
            <h1 class="orange">Voiry</h1>
          </div>
          <div class="text-white text-end">
            <h2 class="mb10">Description</h2>
            <h3 class="">Stress on the individual will affect the sound produced when speaking. Even if one tries to cover up one's
              psychological state, the sound will still show actual conditions. Stress affects physiological regulation
              in the body, it will impact voice changes.
            </h3>
          </div>
        </div>
        <div class="col-md-3 col-12">
          <div class="gambar"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="saran__section w-50 m-auto">
  <div class="saran__content darkgreen">
    <h2 class="mb10 text-center">Kotak Saran</h2>
    <h3 class="text-center mb20">Berikan saran Anda untuk website yang lebih baik!</h3>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Contoh : email@gmail.com">
    </div>
    <div class="mb-3">
      <label for="saran" class="form-label">Saran</label>
      <textarea class="form-control" id="saran" rows="3"></textarea>
    </div>
  </div>
</div>


<!-- End main page -->
<?= $this->endSection(); ?>