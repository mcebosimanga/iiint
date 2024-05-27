<!doctype html>

<?php
session_start();
include ("../include/db.php");
include ("../include/functions.php");

$userLogged = $_SESSION['user_email'];

$results=getUser($con,$userLogged);

$userLoggedEmail = $results['user_email'];


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
    <title>ABC Gym Member | TUT Project</title>

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
      .asterik
      {color:red;}
      .sizeIcon
      {
        height : 150px;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

		<style type="text/css" xml:space="preserve">
		BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
		A{font-family: Arial,Verdana,Helvetica, sans-serif;}
		B { font-family : Arial, Helvetica, sans-serif; font-size : 12px;   font-weight : bold;}
		.error_strings{ font-family:Verdana; font-size:14px; color:red; background-color:;}
		</style><script language="JavaScript" src="js/gen_validatorv4.js"
			type="text/javascript" xml:space="preserve"></script>
    
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
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

       <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>-->
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
            <div class="col-lg-8">
					<div class="card">
						<div class="card-body">
                     <form action="" method = "post" class="user" name="myform" id="myform" >
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name <span class="asterik">*</span> </h6>
								</div>
                              
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control"  name = "user_name" value="<?php echo $results['user_name']; ?>">
									<div id='myform_user_name_errorloc' class="error_strings"></div>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email <span class="asterik">*</span> </h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="email" class="form-control" name="user_email" value="<?php echo $results['user_email']; ?>">
								</div>
							</div>
							<!--<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value=>
								</div>
							</div>-->


							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Mobile <span class="asterik">*</span> </h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name = "user_contact" value="<?php echo $results['user_contact']; ?>">
									<div id='myform_user_contact_errorloc' class="error_strings"></div>
								</div>
							</div>


                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Weight <span class="asterik">*</span> </h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name = 'user_weight' value="<?php echo $results['user_weight']; ?>">
									<div id='myform_user_weight_errorloc' class="error_strings"></div>
								</div>
							</div>


							<!--<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address <span class="asterik">*</span> </h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="Bay Area, San Francisco, CA">
								</div>
							</div>-->
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-primary px-4" name = "update_member" value="Save Changes">
								</div>
							</div>
  				              </form><script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("user_weight","req","Please enter your body weight");
	 frmvalidator.addValidation("user_weight","numeric","body weight must contain numbers only");
  
	
	frmvalidator.addValidation("user_contact","req","Please enter your contact number");
	 frmvalidator.addValidation("user_contact","numeric","contact number must contain numbers only");
	  frmvalidator.addValidation("user_contact","maxlen=10",	"Max length for Contact number is 10 digits");
    frmvalidator.addValidation("user_contact","minlen=10",	"Max length for Contact number is 10 digits");
  
	
	 frmvalidator.addValidation("user_name","maxlen=12",	"Name cannot be empty");
    
	
    frmvalidator.addValidation("exp","req","Please enter  expiry date");
  
	
		
    frmvalidator.addValidation("cvv","req","Please enter  cvv number");
    frmvalidator.addValidation("cvv","numeric","cvv number can contain numbers only");
	
	 frmvalidator.addValidation("amount","req","Please enter  amount");
    frmvalidator.addValidation("amount","numeric","amount must contain numbers only");

//]]></script>
						</div>
					</div>
          </div>


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

      
<?php 

if (isset($_POST['update_member']))
{

    //Text Data Variables
    $user_name= $_POST['user_name'];
    $user_email= $_POST['user_email'];
    $user_contact= $_POST['user_contact'];
    $user_weight= $_POST['user_weight'];
   

    //Validations
    if($user_name==''){
        echo "<script>alert('Please enter member name')</script>";
        exit();
    }
    elseif ($user_email=='') {
        echo "<script>alert('Please Fill All The Fields!')</script>";
        exit();
    }
    elseif ($user_contact=='') {
        echo "<script>alert('Please Fill All The Fields!')</script>";
        exit();
    }

    elseif ($user_weight=='') {
        echo "<script>alert('Please enter your current weight!')</script>";
        exit();
    }

   

    else{

        //Query For Inserting New Trainer Into Database.....
        $update_member = "UPDATE users SET user_name='$user_name',user_email='$user_email',user_contact='$user_contact',user_weight = '$user_weight' WHERE user_email='$userLoggedEmail'";
        $run_update = mysqli_query($con, $update_member);
        if ($run_update) {
            echo "<script>alert('Data Updated Successfully')</script>";
            echo "<script>window.open('Home.php','_self')</script>";
        }
        else{
            echo "<script>alert('Error')</script>";
        }
        
    }
}
?>


  
</html>
