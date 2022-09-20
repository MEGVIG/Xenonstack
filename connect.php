<?php 
 $servername="localhost";
 $username="root";
 $password="";
 //connection to mysql
 $conn=mysqli_connect($servername,$username,$password);
 if(!$conn)
 {
	 die("Connection Failed".mysql_error());
 }
 
 //Create database
 $sql="CREATE DATABASE info( Email varchar(20), Password varchar(20), cPassword varchar(20)";//change name to change database
 
 if( mysqli_query($conn,$sql) )
 {
	 echo ("Database create successfully");
 }
 else
 {
	 echo ("Error Creating Database".mysqli_error());
 }
 mysqli_close($conn);
 ?>
