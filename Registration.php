<!doctype html>
<html>
<head>
	
	
	<link rel="stylesheet"  href="regstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	</head>
	<body>
	
	<div class="Register">
	<h2> Register here </h2>
<form method="post" id="Register" action="">

<label>Name: </label><br>
<input type ="text" name="name" id="name" placeholder="Enter your Name"><br><br>


<label> Mobile Number: </label><br>
<select id="Phone">
<option>+880</option>

</select>
<input type="Number" name="phone" id="num" placeholder="Enter Mobile Number"><br><br>
<label> Email: </label><br>
<input type="Email" name="email" id="name" placeholder="Enter Email" required ><br><br>
<label> Password: </label><br>
<input type="Password" name="password" id="name" placeholder="Enter Password" required><br><br>
<label> Re-enter Password: </label><br>
<input type="Password" name="password" id="name" placeholder="Enter Password"><br><br>
<label for="gender">Gender:</label>
<div class="col-75">
<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
</div>
<input type="Submit" value="Submit" name="submit" id="Submit"></br></br>
<a>Back to home...?</a> <a href="Homepage.php" class="btn btn-outline-warning">....Click here</a>

</form>
</div>
</body>
</html>

<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	//customer id generation
	$num=rand(10,100);
	//echo $num;
	$cus_id="s-".$num;
	$query ="insert into customerinfo values('$cus_id', '$name','$email', '$phone',  '$gender', '$password')";
	if (mysqli_query($con, $query))
	{
		echo"<p style='color: white;'>Successfully done!</p>";
		
	}
	else
	{
		echo"<p style='color: red;'> Error! </p>".mysqli_error($con);
	}
	
}
?>






