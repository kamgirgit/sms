<?php
session_start();
 if(isset($_SESSION['uid']) )
	 {
	 	// echo $_SESSION['uid'];  // it is used to print value of variable set as session as uid = id of admin.
	 	?>
	 	 <!-- To display the user name in panel  like welcome kamran  -->
	 	<div class="welcome">
	 		<!-- <h4> Welcome <?php //secho //$uname; ?></h4> -->
	 	</div>  
	 	<?php

	 } else{
 	header('location: ../login.php');
 } 

?>
<?php
require('header.php');
?>

<style type="text/css">
body{
	background-color:#1d4456;
    }
    .welcome{
    	margin-left:10px;
    	border: 1px solid yellow;
    	text-align: center;
    }	
</style>



<div class="admintitle">
<h1>Welcome to Admin Dashboard</h1>
<h4> <a href="logout.php" >Logout</a> </h4>
</div>

<div class="dashboard">
	<table  style="width:50%;" align="center">
		<tr>
			<td>1</td> <td> <a href="addstudent.php">Insert Student Details</a></td>
		</tr>
		<tr>
			<td>2</td> <td> <a href="updatestudent.php">Update Student Details</a></td>
		</tr>
		<tr>
			<td>3</td> <td> <a href="deletestudent.php">Delete Student Details</a></td>
		</tr>
	</table>
</div>

</body>
</html>
