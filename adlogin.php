<?php session_start(); ?>
<!DOCTYPE html> 
<html>
<head>
	<title> Login Form </title>
	<link rel="stylesheet" href="adminstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
  
	<div class="loginBox">
	
	<img src="user.png" class="user">

		<h2> <b>Log In Admin</b></h2>
		
		<form method="post" id="submit" action="">
			<p>Email</p>
			<input type="text" name="email" id="name" placeholder="Enter Your User Email"></br>
			<p> Password </p>
			<input type="password" name="password" id="name" placeholder="Enter Password" ></br>
            <input type="submit" name="submit" class="btn btn-primary" value="Login"></br></br>

			<a>Don't have an account.. ?  </a> <a href="Registration.php" class="btn btn-primary">Register here..</a></br>
			<a>Back to home.. ?   </a><br><a href="Homepage.php" class="btn btn-primary" >...Click here</a>
			
		</form>
	</div>
</body>
</html>

<?php
include("connection.php");
if(isset($_POST['submit']))
{
     $email= $_POST['email'];
     $password= MD5($_POST['password']);

     $sql="select * from admin where email='$email' and password='$password'";
     
            $r=mysqli_query($con, $sql);
            
            if(mysqli_num_rows($r)>0)
            {
                $_SESSION['email']=$email;
                $_SESSION['admin_login_status']="loged in";
                header("Location:Admin/adminhome.php");
            }
            
            else
            {
                echo "<p style='color: red;'>Incorrect email or Password</p>";
            }
  
}
?>

