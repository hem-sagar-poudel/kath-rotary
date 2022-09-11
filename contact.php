<?php include('head.php'); ?>
<?php include('header.php'); ?>

<div class="text-center bg-overlay-dark-4 py-5" style="background:url(assets/images/bg/05.jpg) no-repeat; background-size: cover; background-position: center center;">
  <div class="container">
    <div class="row all-text-white">
      <div class="col-md-12 align-self-center">
        <!-- <h6 class="display-6 fw-bold mt-9 mb-0">Call us at (+251) 854-6308</h6> -->
        <h1 class="fs-1 fw-bold  my-3">Contact Us</h1>
      </div>
    </div>
  </div>
</div>

<section class="contact-page">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 mx-auto">
        <div class="title text-center">
          <h2>How can we assist you?</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae adipisci veniam, commodi asperiores ad praesentium dolore id ducimus eum. Animi beatae blanditiis quidem iure aliquam veniam praesentium adipisci assumenda minus.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="h-100">
          <div class="mb-3">
            <h3>Have any query feel free to fill up the form.</h3>
            <p>Get in touch with us to see how we can help you with your project</p>
          </div>
          <form class="contact-form needs-validation" id="contact-form" name="contactform" method="POST" action="https://wizixo.webestica.com/assets/include/contact-action.php" novalidate>
            <!-- Main form -->
            <div class="row">
              <div class="col-md-6">
                <!-- name -->
                <div class="mb-3 position-relative">
                  <input required id="con-name" name="name" type="text" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="col-md-6">
                <!-- email -->
                <div class="mb-3 position-relative">
                  <input required id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
              </div>
              <div class="col-md-12">
                <!-- Subject -->
                <div class="mb-3 position-relative">
                  <input required id="con-subject" name="subject" type="text" class="form-control" placeholder="Subject">
                </div>
              </div>
              <div class="col-md-12">
                <!-- Message -->
                <div class="mb-3 position-relative">
                  <textarea required id="con-message" name="message" cols="40" rows="6" class="form-control" placeholder="Message"></textarea>
                </div>
              </div>
              <!-- submit button -->
              <div class="col-md-12 d-grid"><button class="btn btn-dark m-0" type="submit">Send Message</button></div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="contact-box d-flex flex-column h-100 px-3 py-4">
          <!-- Phone -->
          <div class="all-text-muted mb-4">
            <div class="fs-4"><i class="ti-map-alt"></i></div>
            <h5 class="mb-2">Address</h5>
            <p>1421 Coburn Hollow Road Metamora, Near Center Point, IL 61548.</p>
          </div>
          <!-- Email -->
          <div class="all-text-muted mb-4">
            <div class="fs-4"><i class="ti-email"></i></div>
            <h5 class="mb-2">E-mail</h5>
            <p>help@email.com</p>
          </div>
          <!-- Phone -->
          <div class="all-text-muted">
            <div class="fs-4"><i class="ti-panel"></i></div>
            <h5 class="mb-2">Phone</h5>
            <p class="mb-0">9813345486 / 9813345486</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<main class="page-wrapper">
  <section class="gallery pb-0" id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d28261.527743239014!2d85.2777744!3d27.6959447!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1662456686373!5m2!1sen!2snp" width="600" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
</main>

<?php include('footer.php'); ?>