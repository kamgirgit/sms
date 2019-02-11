<?php
require ('../dbcon.php'); //include database file to make connection to DB

	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$pcon = $_POST['pcon'];
	$std = $_POST['std'];
	$id = $_POST['sid'];
	$imagename = $_FILES['simg'] ['name'];   // storing file name  here file is image
	$tempname = $_FILES['simg'] ['tmp_name'];  // storing temporary name
    
    move_uploaded_file($tempname, "../dataimg/$imagename");
 
	$qry = "UPDATE student SET rollno = '$rollno', name = '$name', city = '$city', pcont = '$pcon', standard = '$std', image = '$imagename' WHERE id = $id ";
	// echo $qry;
	$run = mysqli_query( $con, $qry);

	if($run == true)
	{
		?>
		<script type="text/javascript">
			alert('Data Updated Successfully');
			window.open('updateform.php?sid= <?php echo $id;?>','_self');
		</script>
		<?php
	}


?>