<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Donation System</title>

    <!-- Custom fonts for this theme -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="css/freelancer.min.css" rel="stylesheet">

</head>
<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">အနိုင္းမဲ့ေမတၱာ</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">System</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Home</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">AboutUs</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Contact</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Admin Login</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('register')}}">Register</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('login')}}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
      <div class="row">
          <div class="col-md-4">
              <img class="masthead-avatar mb-5" src="img/portfolio/bloodd.png"  height="380px" alt="">
          </div>
          <div class="col-md-4">
              <img class="masthead-avatar mb-5" src="img/portfolio/logo.png" height="380px" alt="">
          </div>
          <div class="col-md-4">
              <div class="card " style="background-color:#099cbc;color: black; margin-left: 20px;">
                  <div class="card-header" style="background-color:#099cbc;color: black;"><h4>Available Blood in Blood Band</h4></div>
                  <div class="card-body" style="background-color:wheat;color: black;">
                     <form>
                         <div class="form-group">
                             <label for="A" style="color: black;">A &nbsp; -</label>
                             <input type="radio" >
                         </div>
                         <div  class="form-group">
                             <label for="B" style="color: black;">B &nbsp; -</label>
                             <input type="radio">
                         </div>
                         <div  class="form-group">
                             <label for="C" style="color: black;">C &nbsp; -</label>
                             <input type="radio">
                         </div>
                         <div  class="form-group">
                             <label for="D" style="color: black;">D &nbsp; -</label>
                             <input type="radio">
                         </div>
                         <div  class="form-group">
                             <button type="submit" class="btn btn-info">Check</button>
                         </div>
                     </form>

                  </div>
              </div>
          </div>
      </div>

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">အနိုင္းမဲ့ေမတၱာ</h1>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <img src="img/portfolio/bd.png" width="30px" height="30px" >
            </div>
            <div class="divider-custom-line"></div>
        </div>
    </div>
</header>

<!--  Section -->
<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">သေးလြွဴျခင္း</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Items -->
        <div class="row">
            <!-- Item 1 -->
            <div class="col-md-6 col-lg-4" style="padding:10px">
                    <img class="img-fluid" src="img/portfolio/donate1.jpg" alt="">
            </div>

            <div class="col-md-6 col-lg-4" style="padding:10px">
                    <img class="img-fluid" src="img/portfolio/donate2.jpg" alt="">
            </div>
            <!--  Item 3 -->
            <div class="col-md-6 col-lg-4"style="padding:10px">
                    <img class="img-fluid" src="img/portfolio/donate3.jpg" alt="">
            </div>

            <!--  Item 4 -->
            <div class="col-md-6 col-lg-4" style="padding:10px;">
                    <img class="img-fluid" src="img/portfolio/donate7.jpg" alt="">
            </div>
            <!-- Item 5 -->
            <div class="col-md-6 col-lg-4" style="padding:10px">
                    <img class="img-fluid" src="img/portfolio/donate5.jpg" alt="">
            </div>
            <!--Item 6 -->
            <div class="col-md-6 col-lg-4" style="padding:10px">
                    <img class="img-fluid" src="img/portfolio/donate6.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Your Website 2019</small>
    </div>
</section>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>
</body>

</html>
