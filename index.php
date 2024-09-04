<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KP Smart Grid Homepage</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="css/main.css">
            <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome for icons (if needed) -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>

    <header class="header" id="header">

    <?php include 'includes/sections/navigation.php'; ?>

    <div class="header__text-box">
      <h1 class="heading-primary">
        <span class="heading-primary--sub">Welcome to our website</span>
      </h1>
      <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod praesentium voluptatibus beatae repudiandae ullam accusamus. Saepe vitae ullam consequatur libero.</p>
      <a href="#" class="butn butn--green">Airzone</a>
      <a href="#" class="butn butn--whitee">Enex</a>
    </div>

    <a href="#portfolio"><i class="fas fa-chevron-down hide_on_scroll"></i></a>
    </header>    

  <!-- portfolio -->

  <section class="section-portfolio" id="portfolio">
    <div class="u-center-text u-margin-bottom-big">
      <h2 class="heading-secondary u-medium-margin-top-big" data-sal-duration="1200" data-sal="slide-right"
        data-sal-delay="300" data-sal-easing="ease-out-bounce">
        Our Partners 
      </h2>
    </div>

    <div class="roww">
    <div class="col-1-of-2">
        <div class="carta">
          <div class="carta__side carta__side--front">
            <div class="carta__picture carta__picture--2">
              &nbsp;
            </div>
            <h4 class="carta__heading">
              <span class="carta__heading-span carta__heading-span--2" data-sal-duration="1200" data-sal="zoom-in"
                data-sal-delay="300" data-sal-easing="ease-out-bounce">Airzone</span>
            </h4>
            <div class="carta__details">
              <ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, doloribus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione error praesentium aliquid odio, accusamus iure.</p>
              </ul>
            </div>

          </div>
          <div class="carta__side carta__side--back carta__side--back-2">
            <div class="carta__cta">
              <div class="carta__portfolio-box">
                <p class="carta__portfolio-only">Lorem ipsum dolor sit amet.</p>
                <p class="carta__portfolio-value">Website</p>
              </div>
              <a href="https://www.airzonecontrol.com/en/en/" target="_blank" class="butn butn--white">Here</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1-of-2">
        <div class="carta">
          <div class="carta__side carta__side--front">
            <div class="carta__picture carta__picture--1">
              &nbsp;
            </div>
            <h4 class="carta__heading">
              <span class="carta__heading-span carta__heading-span--1" data-sal-duration="1200" data-sal="zoom-in"
                data-sal-delay="300" data-sal-easing="ease-out-bounce">Enex</span>
            </h4>
            <div class="carta__details">
              <ul>
                <!-- <p>Made in:</p>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>Bootstrap</li>
                <li>Jquery</li>
                <li>Javascript</li> -->
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, doloribus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione error praesentium aliquid odio, accusamus iure.</p>
              </ul>
            </div>
          </div>
          <div class="carta__side carta__side--back carta__side--back-1">
            <div class="carta__cta">
              <div class="carta__portfolio-box">
              <p class="carta__portfolio-only">Lorem ipsum dolor sit amet.</p>
              <p class="carta__portfolio-value">Website</p>
              </div>
              <a href="https://www.enex.it/" target="_blank" class="butn butn--white">Here</a>
              <!-- <a href="https://github.com/Koogru95/Villasgetaway/tree/master" target="_blank" class="butn butn--white u-margin-left-for-buttons">Github</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!--/ portfolio -->

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




  <!-- Footer -->
  <footer class="navigation-footer">
    <div class="roww navigation-padding">
      <div class="col-1-of-3">
        <div class="navigation-footer-links">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sequi rerum, at, dignissimos autem suscipit possimus dolores similique cumque omnis culpa magnam expedita est molestias, a maxime! Voluptas velit aut perferendis magni ratione aspernatur inventore at nam facere? Blanditiis ex eligendi commodi, itaque eaque autem beatae eos ab porro aut?</p>
        </div>
      </div>
      <div class="col-1-of-3">
        <div class="phone-and-mail">
          <span class="green">Tel: </span><span> +38123-456-789</span>
          <br>
          <span class="green">Mail: </span><span>KPSmartGRids@gmail.com</span>
          <br>
          <span class="green">Address: <span> Address 23/45</span>
        </div>
      </div>
      <div class="col-1-of-3">
        <div class="icons">
          <a href="#">
            <i class="fab fa-codepen"></i>
          </a>
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!--/ Footer -->



            <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>