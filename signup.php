<!doctype html>
<?php 
session_start();
include ("../include/db.php");
$package = $_GET['id'];

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Gym | TUT Project</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <style>

*{
   box-sizing: border-box;
   font-family: "Merriweather Sans", sans-serif;
}

body{
   background-color: #B0DBEE;
   
   #form{
      color: white;
      background-color: #009EDF;
      border-radius: 5px;
      
      width: 400px;
      padding: 40px;
      margin: 150px auto;
      
      -webkit-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      
      p{
         font-size: 0.9em;
      }
      
      button{
         width: 100%;
         text-align: center;
         color: grey;
         margin-top: 20px;
         border: 1px solid rgba(0,0,0,0.4);
      }
      
      .form-group{
         margin: 15px auto;
           
         label{
            font-weight: bold;
            font-size: 0.9em;
         }
         
         .input-group{
            border-radius: 5px;
            -webkit-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.35);
            -moz-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.35);
            box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.35);
            
            .input-group-addon{
               border: none;
               border-right: 1px solid rgba(0,0,0,0.2);
            }
            
            input{
               padding-left: 10px;
            }
            
            i{
               color: #009EDE;
            }
         }
         
         input{
            padding: 3px;
            width: 100%;
            border: none;
            border-radius: 0 5px 5px 0;
         }
      }
   }
}

    </style>
    

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
	
	<style type="text/css" xml:space="preserve">
		BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
		A{font-family: Arial,Verdana,Helvetica, sans-serif;}
		B { font-family : Arial, Helvetica, sans-serif; font-size : 12px;   font-weight : bold;}
		.error_strings{ font-family:Verdana; font-size:14px; color:red; background-color:;}
		</style><script language="JavaScript" src="js/gen_validatorv4.js"
			type="text/javascript" xml:space="preserve"></script>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<br>

<form action="" method="Post" id="form" class="user" name="myform" id="myform" >
<img class="mb-4" src="../images/icons8-gym-50.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
   <p>Sign up once and watch our free things /  <a href="login.php"> Click here to log in</a></p>

   <div class="form-group">
      <label for="name">Selected Package</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i>            </div>
         <input type="text" name="package" disabled id="name" value=<?php echo $package?> placeholder="Enter Your Name"/>
         </div>
      </div>
   
   <div class="form-group">
      <label for="email">Your Email</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true">            </i></div>
         <input type="email" name="email" id="email" placeholder="Enter Your Email"/>
         </div>
		  <div id='myform_email_errorloc' class="error_strings"></div>
      </div>
   </div>
   
   <div class="form-group">
      <label for="username">Name</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i>            </div>
         <input type="text" name="lname" id="username" placeholder="Enter Your Name"/>
         </div>
		  <div id='myform_lname_errorloc' class="error_strings"></div>
      </div>
   </div>

   <div class="form-group">
      <label for="username">Surname</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i>            </div>
         <input type="text" name="surname" id="username" placeholder="Enter Your Surname"/>
         </div>
		  <div id='myform_surname_errorloc' class="error_strings"></div>
      </div>
   </div>
   
   <div class="form-group">
      <label for="password">Contact Number</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i>            </div>
         <input type="text" name="cnumber" id="password" placeholder="Enter Your Contact Number"/>
		 </div>
		 <div id='myform_cnumber_errorloc' class="error_strings"></div>
      </div>
   </div>

   <div class="form-group">
      <label for="password">Current body weight</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i>            </div>
         <input type="text" name="bweight" id="password" placeholder="Enter Your body weight"/>
         </div>
		  <div id='myform_bweight_errorloc' class="error_strings"></div>
      </div>
   </div>

   <div class="form-group">
      <label for="password">Your Age</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i>            </div>
         <input type="text" name="age" id="password" placeholder="Enter Your age"/>
         </div>
		  <div id='myform_age_errorloc' class="error_strings"></div>
      </div>
   </div>
   
   <div class="form-group">
      <label for="password-confirm">Enter Your Password</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i>            </div>
         <input type="text" name="userpassword" id="password-confirm" placeholder="Enter Your Password"/>
         </div>
		  <div id='myform_userpassword_errorloc' class="error_strings"></div>
      </div>
   </div>
   
   <button type="submit"  name="register"class="btn btn-info">Register</button>
   <a href="index.php">
                <button type="button" class="btn btn-info">Cancel</button>
   </a>
              </form><script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
	
	
	frmvalidator.addValidation("userpassword","req","Please enter your password");
	frmvalidator.addValidation("userpassword","maxlen=10",	"Max length for password is 10");
    frmvalidator.addValidation("userpassword","minlen=6",	"Min length for password is 6");

    frmvalidator.addValidation("cnumber","req","Please enter your Contact Number");
    frmvalidator.addValidation("cnumber","numeric","Contact number must contains numbers only");
	 frmvalidator.addValidation("cnumber","maxlen=10",	"Max length for Contact number is 10 digits");
    frmvalidator.addValidation("cnumber","minlen=10",	"Max length for Contact number is 10 digits");
	
	
	  frmvalidator.addValidation("email","req","Please enter your Email Address");
    frmvalidator.addValidation("email","maxlen=100",  "Max length for Email Address is 100 Characters");
	
	
	
	
	frmvalidator.addValidation("age","req","Please enter your age");
	frmvalidator.addValidation("age","numeric","Age must contains numbers only");
	
	frmvalidator.addValidation("bweight","req","Please enter your weight");
	frmvalidator.addValidation("bweight","numeric","Weight must contains numbers only");
	
	frmvalidator.addValidation("lname","req","Please enter your name");
	
	frmvalidator.addValidation("surname","req","Please enter your surname");


	
	


	
  
  
//]]></script>



    
  </body>

      <?php 
       if(isset($_POST['register']))
       {
         $name = $_POST['lname'];
         $email = $_POST['email'];
         $surname=$_POST['surname'];
         $cnumber = $_POST['cnumber'];
         $password = $_POST['userpassword'];
         $bweight = $_POST['bweight'];
         $surname = $_POST['surname'];
         $age = $_POST['age'];



         $select_user="SELECT * FROM users WHERE user_email='$email'";
         $run_user=mysqli_query($con, $select_user);
         $row_count=mysqli_num_rows($run_user);
         if ($row_count==1) {

            echo "<script>alert('User exist, Please log in ...')</script>";
         }
         else {
            # code...
         
         $insert_tran = "insert into users(user_name,user_surname,user_email,user_pass,user_contact,user_weight,package,user_age) 
         values('$name','$surname','$email','$password','$cnumber','$bweight','$package','$age')";
			$run_tran = mysqli_query($con, $insert_tran);

         if($run_tran)
         {
            echo "<script>alert('profile successfully added,User you username and password to login ...')</script>";
            //header('location: Home.php');
         }
         else
         {
            echo "<script>alert('error')</script>";

         }
         
       }
      }
      ?>


</html>


