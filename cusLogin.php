<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<title> Login Form </title>
	<link rel="stylesheet" href="cusstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>

  
	<div class="loginBox">
	
	<img src="user.png" class="user">

		<h2>Customer Log In</h2>
		
		<form method="post" id="submit" action="">
			<p>Email</p>
			<input type="text" name= "email" placeholder="Enter Your email ">
			<p> Password </p>
			<input type="password" name="password" placeholder="Enter Password" required></br>
			<input type="submit" name="submit" value="Sign In"></br>
			<a herf="#">Forget Password </a></br>
			<a>Don't have an account.. ?  </a> <a href="Registration.php" class="btn btn-primary">Register here..</a></br>
			<a>Back to home.. ?   </a><br> <a href="Homepage.php" class="btn btn-primary">...Click here</a>
			
		</form>
	</div>
</body>
</html>

<?php
include("connection.php");
if(isset($_POST['submit']))
{
     $email= $_POST['email'];
     $password= $_POST['password'];

     $sql="select * from customerinfo where email='$email' and password='$password'";
     
            $r=mysqli_query($con, $sql);
            
            if(mysqli_num_rows($r)>0)
            {
                $_SESSION['email']=$email;
                $_SESSION['admin_login_status']="loged in";
                header("Location:Customer/cushome.php");
            }
            
            else
            {
                echo "<p style='color: red;'>Incorrect email or Password</p>";
            }
  
}
?>
