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
		background-color: #daefb7; 
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
 <table align="center">
	<form action="deletestudent.php" method="post">
		<tr>
			<th>Enter Standard</th> 
			<td><input type="number" name="standard" placeholder="Enter standard" required="" /></td>
		</tr>
		<tr>
			<th>Enter Student Name</th> 
			<td><input type="text" name="stuname" placeholder="Enter Student Name" required="" /> </td>
		</tr>
		<tr align="center">
			<td colspan="2"> <input type="submit" name="submit" value="Search">  </td>
		</tr>
	</form>
</table>


<table align="center" width="80%" border="1" style="margin-top: 20px;">
	<tr style="background-color: #000; color:#fff">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Roll No</th>
		<th>Edit</th>

	</tr>

<?php
 if(isset($_POST['submit'])){
 	require('../dbcon.php');
 	$standard = $_POST['standard'];
 	$name     = $_POST['stuname'];
 	$sql = " SELECT * FROM student WHERE standard ='$standard' AND name LIKE '%$name%' ";
 	$run = mysqli_query($con,$sql);
 	if(mysqli_num_rows($run)<1)
 	{
 		echo "<tr><td colspan='5'><h4 style='color:red' > No records found </h4> </td></tr>";
 	} else{
 			$count=0;
 		while($data=mysqli_fetch_assoc($run))
 		{
 			$count++;
 			?>
			 	<tr style="text-align: center;">
					<td><?php echo $count; ?> </td>
					<td> <img src="../dataimg/<?php echo $data['image']; ?>" style='max-width: 100px;' > </td>
					<td> <?php echo $data['name']; ?> </td>
					<td> <?php echo $data['rollno']; ?> </td>
					<td> <a href="deleteform.php?sid=<?php echo $data['id']; ?> ">Delete</a> </td>
					
				</tr>


 			<?php
 		}
 	} 
 }

?>
</table>
