<!DOCTYPE html>
<html lang="en">
<head>
  <title>DC Universe Library</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="-1" />
  <link rel="icon" href="images/logoweb.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index-style.css">
   <link rel="stylesheet" href="css/character-style.css">
  <link rel="stylesheet" href="css/media-screen-responsive.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/simplePagination.css">
  <!--<link rel="stylesheet" href="scss/pagination.scss"> -->
  <link rel="stylesheet" href="css/button.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&family=Staatliches&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
</head>
<body id="backtotop">

    <!--HEADER-->

    <div class="text-center" id="header">
    <a href="index.php"><img src="images/logo.jpg" class="header-logo"></a>
    </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid header_mobile">
    <a href="index.php"><img src="images/logo.jpg" class="header-logo-mobile"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav text-center px-1">
        <a class="nav-link nav-text" href="javascript:character()" id="link-character">CHARACTER</a>
        <a class="nav-link nav-text" href="javascript:comics()">COMICS</a>
        <a class="nav-link nav-text" href="javascript:movies()">MOVIES</a>
        <a class="nav-link nav-text" href="javascript:tvseries()">TV SERIES</a>
      </div>
    </div>
  </div>
</nav>  

<!--WELCOME TO DC UNIVERSE-->
    <div id="content">
    <div class="text-center body-explore">
    <span id="body-explore-title">WELCOME TO DC UNIVERSE</span>
    <p id="body-explore-subtitle">“Everyone has a hero, someone they look up to admire, someone they just wish they could be.” - The Flash</p> 
        <div class="container-fluid text-center px-4" id="search-container">

       </div>

    </div>

<!--EXPLORE TO DC UNIVERSE-->

    <div class="container text-center body-explore-2">
      <div class="row">
        <div class="col">
          <span><img src="images/logotext.png" width="80"></span><br>
          <span id="body-explore-title-2">EXPLORE THE DC UNIVERSE</span>
          <p id="body-explore-subtitle-2">"You Molded Me And Taught Me, Bruce. For Years, I Lived Under The Shadow Of The Batman. I Wanted To Get Away, To Be My Own Man. Yet, When I Chose A Costume And A Name, They Reflected You. You're A Part Of Me, Bruce. I Can't Deny It. And I Don't Want To Any Longer. I Just Wanted You To Know That. That, And One Other Thing -- I'm Proud To Have Been Robin.”</p> 
          <a href="javascript:character()" class="animated-button1">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          EXPLORE
          </a>
        </div>

        <!--EXPLORE SLIDESHOW-->
        <div class="col" id="body-slideshow">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/background-mid.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/slideshow-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/slideshow-2.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black;"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
     </div>
    </div>
    

<!--JUSTICE LEAGUE MEMBERS DIVISION -->

    <div class="text-center body-explore-3">
    <span id="body-explore-title-3">JUSTICE LEAGUE</span>
    <p id="body-explore-subtitle-3">MEMBER OF THE JUSTICE LEAGUE ORIGINAL</p> 

    <!-- JUSTICE LEAGUE MEMBER FOR DESKTOP-->
        <div class="container row mx-auto card-main-desktop" id="jlmember-desktop">
          <div class="col card-item">
            <div class="card card-item-size">
              <a href="#" onclick="javascript:browseAlanScott();">
                  <img src="images/profile/individuals/superman.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SUPERMAN</h5>
                  </div>
              </a>
                </div>
          </div>
         
          <div class="col card-item">
            <div class="card card-item-size">
                  <img src="images/profile/individuals/batman.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">BATMAN</h5>
                  </div>
                </div>
          </div>
          <div class="col card-item">
            <div class="card card-item-size">
                  <img src="images/profile/individuals/wonderwoman.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">WONDER WOMAN</h5>
                  </div>
                </div>
          </div>
          <div class="col card-item">
            <div class="card card-item-size">
                  <img src="images/profile/individuals/greenlantern.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">GREEN LANTERN</h5>
                  </div>
                </div>
          </div>
          <div class="col card-item">
            <div class="card card-item-size">
                  <img src="images/profile/individuals/theflash.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">THE FLASH</h5>
                  </div>
                </div>
          </div>
          <div class="col card-item">
            <div class="card card-item-size">
                  <img src="images/profile/individuals/aquaman.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">AQUAMAN</h5>
                  </div>
                </div>
          </div>
           <div class="col card-item">
            <div class="card card-item-size">
                  <img src="images/profile/individuals/cyborg.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CYBORG</h5>
                  </div>
                </div>
          </div>
        </div> 
    

    <!-- JUSTICE LEAGUE MEMBER FOR MOBILE-->
        <div id="jlmember-mobile">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner mobile-carousel">
            <div class="carousel-item active">
              <div class="col card-item"> <!--CHARACTER 1-->
                   <div class="card card-item-size-mobile">
                            
                            <img src="images/profile/individuals/superman.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">SUPERMAN</h5>
                          </div>
                          
                      </div>
                  </div>
            </div>
            <div class="carousel-item">
              <div class="col card-item"> <!--CHARACTER 1-->
                   <div class="card card-item-size-mobile">
                            <img src="images/profile/individuals/batman.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">BATMAN</h5>
                          </div>
                      </div>
                  </div>
            </div>
            <div class="carousel-item">
              <div class="col card-item"> <!--CHARACTER 1-->
                   <div class="card card-item-size-mobile">
                            <img src="images/profile/individuals/wonderwoman.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">WONDER WOMAN</h5>
                          </div>
                      </div>
                  </div>
            </div>
            <div class="carousel-item">
              <div class="col card-item"> <!--CHARACTER 1-->
                   <div class="card card-item-size-mobile">
                            <img src="images/profile/individuals/greenlantern.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">GREEN LANTERN</h5>
                          </div>
                      </div>
                  </div>
            </div>
            <div class="carousel-item">
              <div class="col card-item"> <!--CHARACTER 1-->
                   <div class="card card-item-size-mobile">
                            <img src="images/profile/individuals/theflash.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">THE FLASH</h5>
                          </div>
                      </div>
                  </div>
            </div>
            <div class="carousel-item">
              <div class="col card-item"> <!--CHARACTER 1-->
                   <div class="card card-item-size-mobile">
                            <img src="images/profile/individuals/aquaman.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">AQUAMAN</h5>
                          </div>
                      </div>
                  </div>
            </div>
            <div class="carousel-item">
              <div class="col card-item"> <!--CHARACTER 1-->
                   <div class="card card-item-size-mobile">
                            <img src="images/profile/individuals/cyborg.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">CYBORG</h5>
                          </div>
                      </div>
                  </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
    <!-- JUSTICE LEAGUE MEMBER FOR MOBILE END-->

    </div>
    </div>
    </div>
    <div class="container js-scroll-trigger" id="footer-backtotop"><a href="#backtotop">
      <span>back to top</span> </a>
    </div>
    <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="images/logoweb.png" width="20"></a>

    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        THIS PROJECT IS FOR PERSONAL USE ONLY. NO COPYRIGHT INFRINGEMENT.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">COMICS</a>
            </li>
            <li>
              <a href="#!" class="text-white">DC CHARACTER </a>
            </li>
            <li>
              <a href="#!" class="text-white">VILLAINS</a>
            </li>
            <li>
              <a href="#!" class="text-white">DC COMICS TEAMS</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">DC COMICSEVENTS</a>
            </li>
            <li>
              <a href="#!" class="text-white">DC UNIVERSE</a>
            </li>
            <li>
              <a href="#!" class="text-white">ARROWVERSE</a>
            </li>
            <li>
              <a href="#!" class="text-white">DC MOVIES</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">COMMUNITY FANDOM</a>
            </li>
            <li>
              <a href="#!" class="text-white">OFFICIAL DC SITE</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright: IAN PORTFOLIO
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->








<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
<script src="js/browseall.js"></script>
<script src="js/character-filter.js"></script>
<script src="js/search.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.simplePagination.min.js"></script>


</body>
</html>