<?php
$error=''; 
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else{
		$username=$_POST['username'];
		$user = md5($username);
		$password=$_POST['password'];
		$pass = md5($password);		
		$role = $_POST['role'];
		$con = mysqli_connect("den1.mysql5.gear.host","mynewmapsdb","Nt6XF!38iz!A","mynewmapsdb");
		$sql="INSERT INTO  user (username,password, role) VALUES ('$user','$pass','$role')";
        $result=mysqli_query($con,$sql);
        header("location: index.php");}}


?>


<html>

<head>
<title>Login for Maps</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/f5f92436ce.js" crossorigin="anonymous"> </script>
<style>
	#header{
     height: 85px;
     background-color:  #1c3969;
	 margin-bottom: 10px;
   }
  #header img{
    width: 150px;
    position: absolute;
    left: 14px;
    top: 10px;
  }
  body{
	  background: #171A21
  }
  label{
	  color:lightblue;
  }
</style>
</head>
	<body>
	<div id="header">
        <img id="logo" src="maps.jpg" >
	 </div>
	 <div class="container"> 
	 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<table class="table table-borderless">
		
			<th> <label> Sign UP </label></th>  
			<tr>
		<td><label>UserName : <i class="fas fa-user-circle"></i></label></td>
		<td>	<input id="name" name="username" class="form-control" placeholder="username" type="text"> </td>
	</tr>
			
	<tr>
		<td>
			<label>Password :<i class="fas fa-lock"></i></label></td>

		<td>	<input id="password" name="password" class="form-control" placeholder="**********" type="password">
	</td></tr>
	<tr>
		<td>
			<label>Role :<i class="fas fa-lock"></i></label></td>

		<td>	<input id="role" name="role" class="form-control" placeholder="Enter 1 for Admin and 2 for user" type="password">
	</td></tr>
	<tr><td>	<input name="submit" type="submit" class="btn btn-outline-info" value="Sign UP ">
	<td><A Href="index.php">Already have an account?? Login in </A></td>
	</td></tr>
			</table>
		</form>
		
	

	 </div>
	
	
	</body>
</html>