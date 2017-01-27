<!-- Section -->
<section class="section section--large section--no-pb " id='contacts'>
  <div class="container">
    <div class="row">
      <div class="col-md-24">
        <!-- Section Title -->
        <h2 class="section-title section-title--center "> Get in touch
          <span class='section-title__highlight'>with us</span>
        </h2>
        <!-- End of Section Title -->
        <!-- Section Subtitle -->
        <p class="section-subtitle section-subtitle--center "> Lorem ipsum dolor sit amet, eos fierent pertinacia eu est elit tincidunt sadipscing te </p>
        <!-- End of Section Subtitle -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-20 col-lg-offset-2 col-md-24 col-md-offset-0">
        <!-- Contact Form -->
        <div class="contact-form  ">
          <form action="blocks/contact-form/contact-form.php" class="contact-form__form js-contact-form">
            <div class="contact-form__modal js-contact-form__modal">
              <h3 class="contact-form__message"> Your message was sent
                <span>successfully</span>
                <br>Thank you! </h3>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="contact-form__label" for="name-input">Your name</label>
                <!-- Input -->
                <div class="input input--contact  ">
                  <input type="text" name="name-input" class="input__field" placeholder="" id="name-input" data-validation="required"> </div>
                <!-- End of Input -->
                <label class="contact-form__label" for="email-input">Your e-mail</label>
                <!-- Input -->
                <div class="input input--contact  ">
                  <input type="text" name="email-input" class="input__field" placeholder="" id="email-input" data-validation="required email"> </div>
                <!-- End of Input -->
                <label class="contact-form__label" for="subject-input">Subject</label>
                <!-- Input -->
                <div class="input input--contact  ">
                  <input type="text" name="subject-input" class="input__field" placeholder="" id="subject-input" data-validation="required"> </div>
                <!-- End of Input -->
              </div>
              <div class="col-md-12">
                <label class="contact-form__label" for="message-input">Your Message</label>
                <textarea name="message-input" id="message-input" class="contact-form__textarea" data-validation="required"></textarea>
                <!-- Button -->
                <div class="button button--small button--shadow  ">
                  <input type="submit" class="button__input" value="Send us the message"> </div>
                <!-- End of Button -->
              </div>
            </div>
          </form>
        </div>
        <!-- End of Contact Form -->
      </div>
    </div>
  </div>
  <!-- Map -->
  <div class="map  " id="map" data-lon="40.799645" data-lat="-73.952437"> </div>
  <!-- End of Map -->
</section>
<!-- End of Section -->
