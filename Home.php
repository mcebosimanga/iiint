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
    <title>ABC Gym | Members | TUT Project 2024</title>

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
              <span data-feather="calendar"></span>
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
         
        </ul>

       
        
   
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


     
			</div>



					<!-- Product Display Box End -->

          <!--user infor -->
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <img src="../images/userimg.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4> <?php echo  $results['user_name']?></h4>
                      <p class="text-secondary mb-1">Member package -  <?php echo  $results['package']?></p>
                      <p class="text-muted font-size-sm">TUT, Witbank, RSA</p>
                  
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo  $results['user_name']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo  $results['user_email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Wight</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo  $results['user_weight']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo  $results['user_contact']?>
                    </div>
                  </div>
                  <hr>
              
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="member_edit.php">Edit</a>
                    </div>
                  </div>
                </div>
              </div>




            </div>
          </div>
          <?php if( $results['package'] !='General')
        
        {?> <h4><label> You can schedule a training session with one of our trainers:  </label> <a href="schedule.php">
          <button type="button" class="btn btn-warning" >Schedule</button> </h4> <?php } ?> 


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
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	 
    </main>
	
  </div>
  
  	
</div>

<?php
if(isset($_POST["exportq"]))  
 {  
      //$connect = mysqli_connect("localhost", "root", "", "mygym");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('user_id', 'User_name', 'user_email', 'user_contact', 'user_weight', 'user_age'));  
      $query = "SELECT * from users ";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 
?>


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
	  
	 <?php include ('../footerp.php'); ?>
  </body>

</html>

