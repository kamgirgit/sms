<?php
session_start();

 if(isset($_SESSION['uid']) )
	 {
	 	// echo $_SESSION['uid'];  // it is used to print value of variable set as session as uid = id of admin.

	 } else{
 	header('location: ../login.php');
 } 

?>
<?php
require('header.php');
include('titlehead.php');
?>
<style type="text/css">
	body{
		background-color: #cdefff; 
	}
</style>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table align="center" border="1"  style="width: 70%; margin-top: 40px;">
		<tr>
			<td>Roll No</td> 
			<td> <input type="text" name="rollno" placeholder="Enter roll no" required=""> </td>
		</tr>
		<tr>
			<td>Full Name</td> 
			<td> <input type="text" name="name" placeholder="Enter Full Name" required=""> </td>
		</tr>
		<tr>
			<td>City</td> 
			<td> <input type="text" name="city" placeholder="Enter your city" required=""> </td>
		</tr>
		<tr>
			<td>Parents contact No</td> 
			<td> <input  type="text" name="pcon" placeholder="Enter the contact no of parents" required=""> </td>
		</tr>
		<tr>
			<td>Standard</td> 
			<td> <input type="number" name="std" placeholder="Enter Standard" required=""> </td>
		</tr>
		<tr>
			<td>Image</td> 
			<td> <input type="file" name="simg" required="" > </td>
		</tr>
		<tr>
			<td colspan="2" align="center"> <input type="submit" name="submit" value="Submit"> </td>
		</tr>
		
	</table>
	
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	require ('../dbcon.php'); //include database file to make connection to DB

	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$pcon = $_POST['pcon'];
	$std = $_POST['std'];
	$imagename = $_FILES['simg'] ['name'];   // storing file name  here file is image
	$tempname = $_FILES['simg'] ['tmp_name'];  // storing temporary name
    
    move_uploaded_file($tempname, "../dataimg/$imagename");
 
	$qry = "INSERT INTO student (rollno,name,city, pcont, standard, image ) VALUES ( '$rollno','$name','$city','$pcon','$std', '$imagename')";
	// echo $qry;
	$run = mysqli_query( $con, $qry);

	if($run == true)
	{
		?>
		<script type="text/javascript">
			alert('Data inserted successfully');
		</script>
		<?php
	} else{
		echo" query not fire ";
	}
}

?>