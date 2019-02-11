<?php

require ('../dbcon.php'); //include database file to make connection to DB
	$id = $_REQUEST['sid'];
	$qry = "DELETE FROM `student` WHERE id = '$id';";
	// echo $qry;
	$run = mysqli_query( $con, $qry);

	if($run == true)
	{
		?>
		<script type="text/javascript">
			alert('Data Deleted Successfully');
			window.open('deletestudent.php','_self');
		</script>
		<?php
	}


?>
