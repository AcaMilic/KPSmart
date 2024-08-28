  <!-- contact -->

  <section class="section-form" id="contact">
    <div class="roww">
      <div class="contact">
        <div class="contact__form">
          <form method="POST" action="form/sendemail.php" class="form">
            <div class="u-margin-bottom-medium">
              <h2 class="heading-secondary-medium" data-sal-duration="800" data-sal="slide-down" data-sal-delay="800"
                data-sal-easing="ease-out-bounce">
                Contact Us
              </h2>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Name" id="name" name="name" required>
              <label for="name" class="form__label">Name</label>
            </div>

            <div class="form__group">
              <input type="email" class="form__input" placeholder="Email address" id="email" name="email" required>
              <label for="email" class="form__label">Email address</label>
            </div>
            <div class="form__group">
              <textarea name="message" id="message" class="form-control" placeholder="Enter your message" name="message"></textarea>
            </div>

            <div class="form__group">
              <br>
              <button class="butn butn--white" type="submit" id="sendForm" value="Submit" name="submit">Send Message</button>
              <p id="success" class="greenSuccess">Message sent!</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--/ contact -->