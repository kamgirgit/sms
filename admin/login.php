<?php
session_start();
if(isset($_SESSION['uid']) )
{
	header('location:admin/admindash.php');
}

?>



<!DOCTYPE html>
<html>
<head>
	<title> Admin Login</title>
</head>
<style type="text/css">
	body{
		background-color:#0e2631;
	}
	 h1{
		color:white;
	}
	table td{
		color:#eeeff5;
	} 
	table td input{
		    border-radius: 3px;
            outline: none;
     }	
</style>
<body>
<h1 align="center">Admin Login</h1>
<form action="login.php" method="post">
	<table align="center">
		<tr>
			<td>Username </td> <td> <input type="text" name="uname" required=""></td>
		</tr>
		<tr>
			<td>Password </td> <td> <input type="password" name="pass" required=""></td>
		</tr>
		<tr>
			<td colspan="2" align="center"> <input type="submit" name="login" value="Login"> </td>  
		</tr>


	</table>

</form>
</body>
</html>

<?php
 include('dbcon.php');
 if(isset($_POST['login']))
 {
 	$username = $_POST['uname'];
 	$password = $_POST['pass'];
 	$qry = "SELECT * FROM `admin` WHERE username= '$username' AND password='$password'";
 	$run = mysqli_query($con,$qry);
 	$row = mysqli_num_rows($run);
    // echo $row;	
 	if($row <1)
	 	{
	 		?>
	 		<script type="text/javascript">
	 			alert('Username or password not match !!');
	 			window.open('login.php', '_self');
	 		</script>
	 		<?php
	 		
	 	} 
	  else
		 {
		 	$data = mysqli_fetch_assoc($run);
		 	$id = $data['id'];
		 	// session_start();  // here we start the session by command session_start();
		 	$_SESSION['uid'] = $id;
		 	$uname = $data['username'];
		 	?>
			 	<script type="text/javascript">
		          alert("Login Successfull :)");
		 	      // header('location:admin/admindash.php');
		          window.open('admin/admindash.php','_self');
	            </script> 

		 	 <?php
		 }	

 }

 ?>


