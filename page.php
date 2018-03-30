<?php get_header(); ?>

  <!-- HERO SECTION -->
  <!--
  <section id="hero-section" class="text-white">
    <div class="primary-overlay">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1 class="display-4 mb-3">Okay Shop - Freeride Headquarter of Engelberg</h1>
            <h3 class="mb-4">Ski rental. Freeride. Ski Service. GREAT coffee.</h3>
            <a href="#contact-section"><button class="btn btn-success btn-lg">Get Me Ready</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
-->

<section id="hero-section" class="text-white">
  <div class="primary-overlay">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1 class="display-4 mb-3"><?php the_field( 'home_page_primary_text' ); ?></h1>
          <h3 class="mb-4"><?php the_field( 'home_page_sub_primary_text' ); ?></h3>
          <a href="#contact-section"><button class="btn btn-success btn-lg"><?php the_field( 'home_page_primary_button_text' ); ?></button></a>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- SERVICES SECTION -->
  <!--
  <section id="services-section" class="pt-2 pb-5">
    <div class="container">
      <div class="info-header mb-4 mt-4 text-center">
        <h2>What We Do</h2>
        <p>We do everything from all mountain to freeride to telemarks skis and avalanche equipment and ski/freeride boots.</p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="card card-inverse mb-4 text-center">
            <div class="card-block">
              <h2 class="card-header">Rental</h2>
              <p class="card-text mt-3 mx-3">We rent all kinds of skis: Freeride, Touring, All Mountain, Telemark and Pist Skis.<br>Boots: Piste and Freeride (walking mode)<br>Avalanche Equipment: Tranciever, Shovel, Probe and Avalanche Back Pack.</p>
              <img class="card-img-bottom img-fluid" src="img/equipment.png" alt="Freeride skis">
              <div class="card-footer">
                <a href="#contact-section" class="btn btn-success my-1">Get Ready <i class="fa fa-arrow-right ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="card card-inverse mb-4 text-center">
            <div class="card-block">
              <h2 class="card-header">Service</h2>
              <p class="card-text mt-3 mx-3">We give your skis the love they need: from waxing to big service.<br>We mount your binding and glue your skis if they need a bit more then just a normal service.</p>
              <img class="card-img-bottom img-fluid" src="img/repair.jpg" alt="Repairing freerid skis in Engelberg">
              <div class="card-footer">
                <a href="#contact-section" class="btn btn-success my-1">Get Sorted <i class="fa fa-arrow-right ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="card card-inverse mb-4 text-center">
            <div class="card-block">
              <h2 class="card-header">Equipment</h2>
              <p class="card-text mt-3 mx-3">We have everything that comes to skis, boots and avalanche equipment.<br>We also have Helmets, Goggles, Skipools, Gloves, Beanis, Boot Dryer and Fresh Roasted Coffee..</p>
              <img class="card-img-bottom img-fluid" src="img/equipment-okay.jpeg" alt="Freeride skis">
              <div class="card-footer">
                <a href="#contact-section" class="btn btn-success my-1">Get Gear <i class="fa fa-arrow-right ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
-->

<section id="services-section" class="pt-2 pb-5">
  <div class="container">
    <div class="info-header mb-4 mt-4 text-center">
      <h2>What We Do</h2>
      <p>We do everything from all mountain to freeride to telemarks skis and avalanche equipment and ski/freeride boots.</p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="card card-inverse mb-4 text-center">
          <div class="card-block">
            <?php
            if( is_active_sidebar( 'service-1' ) ) {
              dynamic_sidebar( 'service-1' );
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card card-inverse mb-4 text-center">
          <div class="card-block">
            <h2 class="card-header">Service</h2>
            <p class="card-text mt-3 mx-3">We give your skis the love they need: from waxing to big service.<br>We mount your binding and glue your skis if they need a bit more then just a normal service.</p>
            <img class="card-img-bottom img-fluid" src="img/repair.jpg" alt="Repairing freerid skis in Engelberg">
            <div class="card-footer">
              <a href="#contact-section" class="btn btn-success my-1">Get Sorted <i class="fa fa-arrow-right ml-2"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card card-inverse mb-4 text-center">
          <div class="card-block">
            <h2 class="card-header">Equipment</h2>
            <p class="card-text mt-3 mx-3">We have everything that comes to skis, boots and avalanche equipment.<br>We also have Helmets, Goggles, Skipools, Gloves, Beanis, Boot Dryer and Fresh Roasted Coffee..</p>
            <img class="card-img-bottom img-fluid" src="img/equipment-okay.jpeg" alt="Freeride skis">
            <div class="card-footer">
              <a href="#contact-section" class="btn btn-success my-1">Get Gear <i class="fa fa-arrow-right ml-2"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- WHY US SECTION -->
  <section id="why-us-section" class="pb-5 pt-2">
    <div class="container">
      <div class="info-header mb-4 mt-4 text-center">
        <h2>Why Choose Us</h2>
      </div>
      <div class="row">
        <div class="col-md-6 offset-lg-1 col-lg-5 text-center mt-2">
          <img src="img/dani-pictures-1.jpg" alt="Telemark" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-6 col-lg-6 mt-3 text-center">
          <p class="mt-4">I've had the Okay Shop for over 20 years. Even though it's been a long time, I'm still in love in what I'm doing.</p>
          <p class="mt-5">Even if you don't have any problems or want to purchase anything, come in for a fresh cup of coffee. See you on your next ski trip to Engelberg!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <section id="contact-section" class="pb-5 pt-2">
    <div class="container">
      <div class="info-header mb-4 mt-4 text-center">
        <h2>Contact Us</h2>
        <p>Best way to get you ready for the mountain is to drop by the shop. If you have any questions feel free to give us a call.</p>
      </div>
      <div class="row">
        <div class="col-sm-6 text-center">
          <div class="d-flex flex-column align-items-center mt-3">
            <a class="call-to-action btn btn-success btn-lg btn-block" href="tel:+41416370777">Call Us <i class="fa fa-phone ml-2 fa-1x"></i></a>
            <p class="mt-3">Give me a call! If I don't pick up, try again later or swing by the shop.</p>
          </div>
        </div>
        <div class="col-sm-6 mt-3 text-center">
          <div class="d-flex flex-column align-items-center text-center">
            <a class="call-to-action btn btn-success btn-lg btn-block" href="#maps-section-scroll">Come By <i class="fa fa-arrow-down ml-2 fa-1x"></i></a>
            <p class="mt-3">Stop by for a good chat and get your skis and gear all sorted.</p>
          </div>
        </div>
        <div class="col-lg-8 push-lg-4 mt-4">
          <div class="scroll-anchor" id="maps-section-scroll"></div>
          <div id="map"></div>
        </div>
        <div id="contact-info" class="col-lg-4 pull-lg-8 mt-4 text-center">
          <h3 class="contact-header">Contact Information</h3>
          <p>
            Okay Shop<br> Bahnhofstr. 10<br> 6390 Engelberg
            <br><br> Telephone: <a href="tel:+41416370777">+41 41 637 0 777</a><br> Email: <a href="mailto:okay.dani@gmx.ch">okay.dani@gmx.ch</a><br>
            <br><br> From November to April<br> Open 7 days a week<br> Lunch break 12.00 - 13.00
          </p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
