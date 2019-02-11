<?php
// we can do session destroy to achive logout functionality by 2 methods of php [session_destroy] or unset method

session_start();  /*we have to apply or include session_start(); method everywhere where we want to use functionalities of session..like here we are using destroy functionality..  */

session_destroy();
?>

<script type="text/javascript">
	alert("Logout Successfully :)");
	window.open('../login.php','_self');
</script>
 <?php

?>
