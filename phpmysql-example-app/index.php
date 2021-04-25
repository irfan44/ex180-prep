<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home | NordPC</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css" />
  <link rel="stylesheet" href="assets/css/index.css" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php include 'components/navbar.php'; ?>
  <section class="hero is-fullheight-with-navbar">
    <div class="container hero-body mt-6">
      <div class="columns">
        <div class="column">
          <figure class="image is-1by1-custom mt-6">
            <img src="assets/img/computer.svg" alt="" />
          </figure>
        </div>
        <div class="column">
          <h1 class="title is-1 my-6">NordPC is the one stop solution for all your computer needs</h1>
          <p class="subtitle is-5">
            NordPC is an online marketplace that provides you with complete shopping experience for all your computer parts and more. From CPUs, GPUs, Case, we have it all.
          </p>
          <a class="button" id="button-custom" href="login.php">
            <strong>Shop Now</strong>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="section mt-6">
    <div class="container">
      <div class="columns">
        <div class="column">
          <h2 class="title is-2 mb-6">All in One Shopping Experience</h2>
          <p class="subtitle is-5">We proud ourselve to becoming the largest computer part seller in Asia. With over than 50,000 items on our catalog, we're sure you'll find all the parts you want.</p>
        </div>
        <div class="column has-text-centered">
          <figure class="image is-1by1-custom is-inline-block">
            <img src="assets/img/onestopshopping.svg" alt="" />
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="section mt-6">
    <div class="container">
      <div class="columns">
        <div class="column has-text-centered">
          <figure class="image is-1by1-custom is-inline-block">
            <img src="assets/img/experience.svg" alt="" />
          </figure>
        </div>
        <div class="column">
          <h2 class="title is-2 mb-6">Tailored for the best experience</h2>
          <p class="subtitle is-5">Want to build your own PC? Buying a laptop for your family? Whether you're a computer enthusiast or finding laptops for your kids, we'll guide you to get the best out of your deal.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section my-6">
    <div class="container">
      <div class="column has-text-centered">
        <h2 class="title is-2">Benefits</h2>
      </div>
      <div class="columns mt-4">
        <div class="column">
          <div class="box">
            <figure class="image is-128x128 block">
              <img src="assets/img/verified.svg" alt="" />
            </figure>
            <h4 class="title is-4">Verified Seller</h4>
            <p class="block">We're one of the largest verified seller of computer in Asia with over than 3000 partners from across the globe. We can assure you that we're only selling original parts.</p>
          </div>
        </div>
        <div class="column">
          <div class="box">
            <figure class="image is-128x128 block">
              <img src="assets/fastdelivery.svg" alt="" />
            </figure>
            <h4 class="title is-4">Fast Delivery</h4>
            <p class="block">We make sure that your package is in the safest possible shape for the delivery process. We have worked with delivery partners all over Asia to provide the fastest delivery possible.</p>
          </div>
        </div>
        <div class="column">
          <div class="box">
            <figure class="image is-128x128 block">
              <img src="assets/img/24hsupport.svg" alt="" />
            </figure>
            <h4 class="title is-4">24-hour Customer Support</h4>
            <p class="block">Our award winning customer support is ready to help you every time you want. Excellent customer support is a crucial part of our service and something that we're proud of</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="hero p-4" style="background-color: #2E3440;">
    <div class="hero-body container" style="text-align: center;">
      <h4 class=" title is-4" style="color: white">Looking for something to buy?</h4>
      <a class="button  is-centered" id="button-custom" href="login.php">
        <strong>Shop Now</strong>
      </a>
    </div>
  </section>

  <?php include 'components/footer.php'; ?>

</body>

</html>