<?php
// connection building
 $con = mysqli_connect('localhost', 'root', '', 'sms');
 if($con == false){
 	echo "<h3 style='color:red'>Connection is not build :(  Go and fix it </h3>";
 } 
?>