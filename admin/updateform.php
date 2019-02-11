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
include('../dbcon.php');

 $sid = $_GET['sid'];
 $sql = "SELECT * FROM student WHERE id = '$sid' ";
 $run = mysqli_query($con,$sql);
 $data = mysqli_fetch_assoc($run);

?>
<h4 style="color:#173e50; text-align: center">Update the details of student</h4>
<style type="text/css">
	body{
		background-color: #bde2df; 
	}
	table{
		margin-top: 50px;
		/*border: 1px solid grey;*/
		border-radius: 4px;
	 	color: #1e1e29;
	}
	input[type=submit]{
		background-color: #173e50;
		color:white;
	}
</style>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table align="center" border="1"  style="width: 70%; margin-top: 40px;">
		<tr>
			<td>Roll No</td> 
			<td> <input type="text" name="rollno" value="<?php echo $data['rollno']?>" required=""> </td>
		</tr>
		<tr>
			<td>Full Name</td> 
			<td> <input type="text" name="name" value="<?php echo $data['name']?>" required=""> </td>
		</tr>
		<tr>
			<td>City</td> 
			<td> <input type="text" name="city" value="<?php echo $data['city']?>" required=""> </td>
		</tr>
		<tr>
			<td>Parents contact No</td> 
			<td> <input  type="text" name="pcon" value="<?php echo $data['pcont']?>" required=""> </td>
		</tr>
		<tr>
			<td>Standard</td> 
			<td> <input type="number" name="std" value="<?php echo $data['standard']?>" required=""> </td>
		</tr>
		<tr>
			<td>Image</td> 
			<td> <input type="file" name="simg" required="" > </td>
		</tr>
		<tr>
			<td colspan="2" align="center"> 
				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
				<input type="submit" name="submit" value="Submit"> 
			</td>
		</tr>
		
	</table>
	
</form>
</body>
</html>
