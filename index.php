<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="Author" content="Swaraj Dutta" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/style1.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <title>NoMad</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <?php include 'navbar.php' ?>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/rolf-schmidbauer-CG992WO5oek-unsplash.jpg" alt="First slide"
          width="1100" height="500" />
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/unitedstates.jpg" alt="Second slide" width="1100"
          height="500" />
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/train-light-trails-long-exposure-un.jpg" alt="Third slide"
          width="1100" height="500" />
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- About Us -->
  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center">About Us</h1>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="assets/img/1652612406802 (1).jpg" alt="Error" class="img-fluid aboutimg" />
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">This is Our Group</h2>
          <p class="py-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde
            repudiandae eaque, deleniti distinctio magni itaque ex vero.
            Blanditiis, praesentium optio cupiditate excepturi eos, minima
            cumque, quas velit voluptates dignissimos eum.
          </p>
          <a href="about.php">Check More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Services -->
  <section class="my-5 py-4" id="membership_dropdown">
    <div class="py-5">
      <h2 class="text-center">Memberships Options</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="assets/img/yamaha-r1-4k-w7.jpg" alt="Card image">
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">Advanced 1499₹</h4>
              <p class="card-text">
                Weekly Rides! <br>
                Invited to All Rides <br>
                Special Patches <br>
                T-Shirt <br>
                Stickers <br>
              </p>
              <a href="memebership.php" class="btn btn-success mt-auto fa-beat-fade">Check More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="assets/img/ducati-panigale-1199-4k-kq.jpg" alt="Card image">
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">Intermediate 999₹</h4>
              <p class="card-text">
                Invited to one Ride Every Month <br>
                Special Patches <br>
                T-Shirt <br>
                Stickers <br>
              </p>
              <a href="memebership.php" class="btn btn-success mt-auto fa-beat-fade">Check More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="assets/img/bmw-m-1000-rr-4k-wt.jpg" alt="Card image">
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">Starter 499₹</h4>
              <p class="card-text">
                Invited to 3 Rides Every Year <br>
                T-Shirt <br>
                Stickers <br>
              </p>
              <a href="memebership.php" class="btn btn-success mt-auto fa-beat-fade">Check More!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Gallary -->
  <section class="my-5 py-4" id="gallary_dropdown">
    <div class="py-5">
      <h2 class="text-center">Our Gallary</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="assets/img/tony-pham-E_NnVp1pw3o-unsplash.jpg" class="img-fluid pb-3" alt="Error">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="assets/img/_Preview.jpeg" class="img-fluid pb-3" alt="Error">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="assets/img/group-riding-is-the-worst.jpg" class="img-fluid pb-3" alt="Error">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="assets/img/AdobeStock_459454177_Preview.jpeg" class="img-fluid pb-3" alt="Error">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="assets/img/mike-swigunski-6SgLJg7kM7E-unsplash.jpg" class="img-fluid pb-3" alt="Error">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="assets/img/AdobeStockasdasdas.jpeg" class="img-fluid pb-3" alt="Error">
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Us -->
  <section class="my-5 py-4" id="contact_dropdown">
    <div class="py-5">
      <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Your Name</label>
          <input type="text" name="name" id="name" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Email ID</label>
          <input type="email" name="email" id="email" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="number" name="number" id="number" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea name="comment" id="comment" class="form-control"></textarea>
        </div>
        <div>
          <button type="submit" class="btn btn-success" onclick="demoFucntion()">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn text-white btn-floating m-1 fa-beat-fade" style="background-color: #3b5998;" href="#!"
          role="button"><i class="fab fa-facebook"></i></a>

        <!-- Twitter -->
        <a class="btn text-white btn-floating m-1 fa-beat-fade" style="background-color: #55acee;" href="#!"
          role="button"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn text-white btn-floating m-1 fa-beat-fade" style="background-color: #dd4b39;"
          href="mailto:swrjdutta@outlook.com" role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn text-white btn-floating m-1 fa-beat-fade" style="background-color: #ac2bac;"
          href="https://instagram.com/wolf_swaraj" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn text-white btn-floating m-1 fa-beat-fade" style="background-color: #0082ca;" href="#!"
          role="button"><i class="fab fa-linkedin"></i></a>
        <!-- Github -->
        <a class="btn text-white btn-floating m-1 fa-beat-fade" style="background-color: #333333;"
          href="https://github.com/wolf4269" role="button"><i class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center p-3 bg-dark">
      <a class="text-white" href="terms_con.php">Terms & Conditions</a>
    </div>
    <!-- Copyright -->
  </footer>
  
  <script src="https://kit.fontawesome.com/0dc3a790fc.js" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</body>

</html>