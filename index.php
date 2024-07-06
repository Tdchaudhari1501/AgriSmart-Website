<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/Agrismart/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Courgette&family=Inter:wght@100;200;300;400;500;531;600;700;800;900&family=Lobster&family=Montserrat:wght@1,500;600;700&family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100;0,500;1,400;1,500&family=Roboto:ital,wght@0,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link href="/Agrismart/css/ekko-lightbox.css">
  <link rel="stylesheet" href="/Agrismart/css/style.css">
  <title>Home-page</title>
  <style>
    .bg-img {
      background-image: url('/Agrismart/images/main\ picture.jpg');
      height: 100vh;
      width: 100vw;
      position: relative;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav style="height:120px;"  class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container ">
      <a class="navbar-brand" href="index.php">
        <img class="img-responsive" src="/Agrismart/images/agri-logo.jpg" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          <li class="nav-item">
            <a class="nav-link" href="store.php">Store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="expert_advice.php"> advice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="marketplace.php">Market Place</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notification.php">Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="team.php">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="partners.php">Partners</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>

    </div>
    <!-- /container -->

  </nav>
  <!-- /Navbar -->


  <!-- Main content -->
  <!-- background image -->
  <div class="bg-img">
    <div class="overlay">
      <!-- Home page content -->
      <div class="home-page-content">
        <h1 class="text-center home-page-text h1-responsive"> AgriSmart </h1>
        <h5 class="text-center home-supporting-text">Agriculture is life - be with AgriSmart </h5>
        <div class="home-buttons text-center fadeIn">
          <a href="services.php">
            <div class="btn homepage-btn-1 btn-lg mt-2">Services</div>
          </a>
        </div>
      </div>
      <!-- /Home page content -->
    </div>
    <!-- /bg-img -->

  </div>
  <!-- /view -->

  <!-- /main content -->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ekko-lightbox.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>