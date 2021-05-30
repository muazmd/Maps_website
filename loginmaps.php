<?php
session_start();
$error=''; 
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}else{
		$username=$_POST['username'];
		$user = md5($username);
		$password=$_POST['password'];
		$pass = md5($password);		
		$con = mysqli_connect("den1.mysql5.gear.host","mynewmapsdb","Nt6XF!38iz!A","mynewmapsdb");
		$sql="select * from user where password='".$pass."' and username='".$user."'";
		$result=mysqli_query($con,$sql);
		$rows=mysqli_num_rows($result);//count the rows
		if ($rows == 1) { //username is matching with the password
			$_SESSION['login_user']=$user; 
			$res = mysqli_fetch_array($result);			
			if ($res['role'] ==1){		
				$_SESSION['role']= "admin";
				header("location: index2.php"); 
			}else if ($res['role'] ==2){
				$_SESSION['role']= "user";
				header("location: Maps.php"); 
			}else
				print_r($res);
				//header("location: error.php");
		} else {
			$error = "Username or Password is invalid";
		}
		mysqli_close($con); 
	}
}
?>