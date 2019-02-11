 <!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<style type="text/css">
	body{
		font-family: 'Source Sans Pro', sans-serif;
	}
	.h3 a{
		color: #50a253;
	}
	.search-form{
		width: 40%;
		margin: auto;
		border: 1px solid #ced4da;
		border-radius: 5px;
		padding: 25px 20px ;
	}
	.mine{
		background-color: black;
		border:transparent;
		border-radius:5px;
	}

</style>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="login.php" class="btn btn-primary float-right  mt-3 mine"> Admin Login </a>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-12 mt-4">
				<h2 class="text-center"> Welcome to Student Management System</h2>
			</div>
			<div class="col-md-12 mt-4">
				<div class="search-form">
					<form method="post" action="index.php">
					  <h4  class="text-center"> Student Information</h4>	
					  <div class="form-group">
					  	<label>Select class</label>
					  	<select name="std" required="" class="form-control">
						    <option value="1">1st</option>
							<option value="2">2nd</option>
							<option value="3">3rd</option>
							<option value="4">4th</option>
							<option value="5">5th</option>
							<option value="6">6th</option>
						</select>
					  </div>	
					  <div class="form-group">
					    <label>Roll number</label>
					    <input type="text" class="form-control" name="rollno" placeholder="Enter your roll number">
					  </div>
					  <input type="submit" class="btn btn-primary d-block mx-auto" name="submit" value="Show Info">
					</form>
				</div>
			</div>

		</div>
	</div>
	<!-- <h3 class="h3" align="right" style="margin-right:20px; "><a href="login.php" > Admin Login </a> </h3>
	<h1 align="center" style="color:grey"> Welcome to Student Management System</h1>
	<form method="post" action="index.php">
	<table style="width: 40%;" align="center" border="1">
		<tr>
			<td colspan="2" align="center"> Student Information</td>
		</tr>
		<tr>
			<td align="left"> Choose standard</td> 
			<td>
				<select name="std" required=""> 
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
					<option value="5">5th</option>
					<option value="6">6th</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align="left">Enter Roll no </td> 
			<td> <input type="text" name="rollno" required=""> </td>
		</tr>
		<tr>
			<td colspan="2" align="center"> <input type="submit" name="submit" value="Show Info"> </td>
		</tr>
	</table>
	</form> -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
if(isset($_POST['submit']))
{ 
	$standard = $_POST['std'];
	$rollno = $_POST['rollno'];
	include('dbcon.php');
	include('function.php');
	showdetails($standard,$rollno);

}


?>





