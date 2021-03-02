<!-- Include the header file that contains all
    HTML calls, styles sheets, and the main navigation -->
<?php include 'includes/header.php';?>

<!-- Content -->
<!-- <div class="container"> -->
  <!-- Carousel -->

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/ss_pizza.jpg" class="img-responsive" alt="Gavino's Pizza">
        <div class="carousel-caption">
          <!-- PEPPERONI PIZZA -->
        </div>
      </div>
      <div class="item">
        <img src="images/ss_salad.jpg" class="img-responsive" alt="Gavino's Pizza">
        <div class="carousel-caption">
          <!-- SALAD -->
        </div>
      </div>
      <div class="item">
        <img src="images/ss_wings.jpg" class="img-responsive" alt="Gavino's Pizza">
        <div class="carousel-caption">
          <!-- BUFFALO WINGS -->
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Content Copy -->
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-0 text-center">
        <h2 class="location-title">
          <span class="red">Locations &amp; Hours</span>
        </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-5 col-md-offset-1 white">

        <p class="locations">
          Take out, Dine-In &amp; Delivery
        </p>
        <p class="locations">
          Limited delivery area &#8226; Delivery fee $2.00 <br/>
          Our drivers do not carry more than $20.00
        </p>
        <p class="locations">
          Catering Available &#8226; Call for details
        </p>
        <p class="locations">
          <span class="underline"><strong>Store Hours</strong></span><br/>
          <br>
            Sun: 12pm - 10pm
          <br>
            Mon: CLOSED
          <br>
            Tues - Thr: 11am - 10pm
          <br>
            Fri: 11am - 10pm
          <br>
            Sat: 12pm - 10pm
        </p>
        <p class="locations">
          <strong>Phone:</strong> 412-331-3700
        </p>
        <p class="locations">
          <strong>Address:</strong> 528 Chartiers Avenue, McKees Rocks, PA 15136
        </p>

        <a class="btn btn-menu" href="images/gavinos-pizza-menu2021.pdf" target="_blank" role="button">Menu</a>
        <a class="btn btn-menu index-online-order" href="https://www.letsget.net/default.aspx?restaurantid=5730" target="_blank" role="button">Order Online</a>
        <p class="locations">
          <br/>
          We accept major credit cards and business checks only
        </p>
        <p class="locations">
          <br/>
          <em>Prices subject to change without notice</em>
        </p>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="store-img">
          <img src="images/gavinos_store.jpg" class="img-responsive" alt="Gavino's Pizzeria Store">
        </div>
        <div class="embed-responsive embed-responsive-4by3 google-map">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3088.5098479435424!2d-80.06195310360728!3d40.46528601690476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834f5c95a9c2397%3A0xfae4f7e2c93c71e5!2s528+Chartiers+Ave%2C+McKees+Rocks%2C+PA+15136!5e0!3m2!1sen!2sus!4v1495032700010" style="border:0" allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </div>



  <!-- Row of 3 images -->
  <!-- <div class="row">
    <div class="col-md-4">
      <img src="https://placeholdit.imgix.net/~text?txtsize=40&txt=Product%201%20100x100&w=100&h=100"
      class="img-responsive center-block sm-margin"
      alt="Thumbnail">
    </div>
    <div class="col-md-4">
      <img src="https://placeholdit.imgix.net/~text?txtsize=40&txt=Product%201%20100x100&w=100&h=100"
      class="img-responsive center-block sm-margin"
      alt="Thumbnail">
    </div>
    <div class="col-md-4">
      <img src="https://placeholdit.imgix.net/~text?txtsize=40&txt=Product%201%20100x100&w=100&h=100"
      class="img-responsive center-block margin-bottom"
      alt="Thumbnail">
    </div>
  </div>-->
<!-- </div> content container -->


<!-- Include the footer file that contains all
    footer content and script calls -->
<?php include 'includes/footer.php';?>
