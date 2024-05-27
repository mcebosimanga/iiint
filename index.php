<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>TUT Project - ABC Gym 2024</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">ABC Gym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contactus.php">Contact Us</a>
          </li>
        <!--  <li class="nav-item">
            <a class="nav-link disabled" href="" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="false">Log in</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->
        <img src="../images/pexels-binyamin-mellish-116077.jpg" alt="Girl in a jacket" style="width:30px;height:600px;">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>ABC Gym.</h1>
            <p>Whether you're searching for your nearest gym or a skilled personal trainer, here's where you'll find everything you need to kickstart your path to fitness.</p>
            <p><a class="btn btn-lg btn-primary" href="contactus.php">Contact Us ...</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       <!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->
       <img src="../images/mike-von-CX0zKCHOpJo-unsplash.jpg" alt="Girl in a jacket" style="width:30px;height:600px;">

        <div class="container">
          <div class="carousel-caption">
            <h1>Gym goes with healthy food.</h1>
            <p>Food is fuel, and what you reach for before and after exercise can make or break your workout success. Power up and maximize performance with these 10 fitness foods.</p>
            <p><a class="btn btn-lg btn-primary" href="contactus.php">Contact Us ...</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
         <!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->
       <img src="../images/pexels-binyamin-mellish-116077.jpg" alt="Girl in a jacket" style="width:30px;height:600px;">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Body Builder.</h1>
            <p>We provide neccessary exercise , materials and training for one to become a body builder.</p>
            <p><a class="btn btn-lg btn-primary" href="contactus.php">Contact Us ...</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
    <?php //$price1 = 100;?>
  <div class="container marketing">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">ABC Gym</h1>
      <p class="fs-5 text-muted">We provide proper gyming equipment and assistance that can suite everyone. Provide all different type of personal trainers.We also provide proper diet guidance .</p>
    </div>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <!--Pricing-->
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">General</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R500<small class="text-muted fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>1 person</li>
              
              </ul>
              <a href="signup.php?id=<?=$package="General"?>">
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Get General Package</button>
              </a>

            </div>
          </div>
        </div>


        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3 text-white bg-secondary border-secondary">
              <h4 class="my-0 fw-normal">Couple</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R1000<small class="text-muted fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>2 people</li>
              
              </ul>
              <a href="signup.php?id=<?=$package="Couple"?>">
                <button type="button" class="w-100 btn btn-lg btn-outline-secondary">Get Couple Package</button>
              </a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-info">
            <div class="card-header py-3 text-white bg-info border-info">
              <h4 class="my-0 fw-normal">VIP</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R1500<small class="text-muted fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>1 person + personal trainer</li>
               
              </ul>
              
              <a href="signup.php?id=<?=$package="VIP"?>">
              <button type="button" class="w-100 btn btn-lg btn-outline-info">Get VIP Package</button>
              </a>
            </div>
          </div>
        </div>
      </div>



    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Aerobic <span class="text-muted">exercise.</span></h2>
        <p class="lead">We provide physical activity exercise that uses large muscle groups in your body. This type of exercise is usually rhythmic and repetitive. You can adjust 
          the intensity of your workout, which is how hard your body works during this type of exercise.</p>
      </div>
      <div class="col-md-5">
        <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
        <img src="../images/beautiful-young-sports-couple-are-doing-crunches-gym_484651-19188.jpg" alt="Girl in a jacket" style="width:500px;height:600px;">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"> Chin-Up. <span class="text-muted">excercise</span></h2>
        <p class="lead">The chin-up is a bodyweight exercise that can help you build upper-body strength. The move is similar to a pull-up. The two movements are not the same, however, because of small differences in form.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
        <img src="../images/edgar-chaparro-sHfo3WOgGTU-unsplash.jpg" alt="Girl in a jacket" style="width:500px;height:600px;">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Body Builder <span class="text-muted">execirse.</span></h2>
        <p class="lead">We provide neccessary exercise , materials and training for one to become a body builder.</p>
      </div>
      <div class="col-md-5">
        <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
        <img src="../images/pexels-li-sun-2294403.jpg" alt="Girl in a jacket" style="width:500px;height:600px;">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
     <?php include ('../footerp.php'); ?><p class="float-end"><a href="#">Back to top</a></p>
    <!--<p>&copy; 2024 TUT Project, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>-->
  </footer>
  
  
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
