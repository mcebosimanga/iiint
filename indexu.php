<!doctype html>

<?php
session_start();
include ("../include/db.php");
include ("../include/functions.php");

$userLogged = $_SESSION['user_email'];

$results=getUser($con,$userLogged);




?>



<?php

if($_SESSION['user_email']==true){
}
else{
  header('location: login.php');
}


include ("functions/functions.php");
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    

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

      #right_content
      {
            text-align:center;

      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">ABC Gym</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Home.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Home.php?view_users">
              <span data-feather="shopping-cart"></span>
              Days
            </a>
          </li>
	          <ul id="days">
					<?php  
						getDays();
					?>
				</ul>
      

          <li class="nav-item">
            <a class="nav-link" href="Home.php?view_trainers">
              <span data-feather="users"></span>
              View Trainers
            </a>
              
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Home.php?view_exercises">
              <span data-feather="bar-chart-2"></span>
              View Exercise
            </a>
            <ul id="days">
					<?php 
						getExercise();
					?>
				</ul>

          </li>
 
      </div>
	  
    </nav>
	

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome <strong><?php echo  $results['user_name']?></strong> your package is <B><?php echo  $results['package']?></B> </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo  $_SESSION['user_email']?></button>
           <br>
            <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-sm btn-outline-secondary" />  
                </form>  
          </div>
         <!--<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="Currency"></span>
            Credit :R <?php echo  $results['Credit']?>
          </button>-->
		  <div class="dropdown">
  <button class="btn btn-sm btn-outline-secondary dropdown-toggle type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Credit :R <?php echo  $results['Credit']?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="paycard.php">Pay</a>
   
  </div>
</div>
        </div>
      </div>

     <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->

      <h2></h2>
      <div class="table-responsive">
        <!-- Table -->


        <div class="left" style="background-image: url(images/bg1.jpg)">
				<!-- Product Display Box Start -->
        <div id="right_content">
				<div id="headline">
					<div id="headline_content">
						<h1 style="color: blue; text-align:center;"><center>No pain no gain</center></h1>
					</div>
				</div>
					<!-- Product Display Box Start -->
					<div id="products_box" style="background-color:whitesmoke">
						<?php
							get_All_Exercises();
							get_Day_Exercises();
							get_Exer_Exercises();
						?>
					</div>
					<!-- Product Display Box End -->
			</div>



					<!-- Product Display Box End -->

          <!--user infor -->
      


          <!--end--->

        
			</div>
		</div>
					<!-- Product Display Box End -->
			</div>


		</div>

    <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb 
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
           Breadcrumb -->
    
       

        </div>
    </div>

      </div>
    </main>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>

  <?php include ('../footerp.php'); ?>




                <!-- Page level plugins -->
                <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
	  
	
  </body>
  


</html>

	  
		
	
