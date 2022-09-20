<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Email = mysqli_real_escape_string($link, $_REQUEST['email']);
$Password = mysqli_real_escape_string($link, $_REQUEST['password']);
$cPassword = mysqli_real_escape_string($link, $_REQUEST['cpassword']);
 
// attempt insert query execution
$sql = "INSERT INTO persons (email, password, cPassword) VALUES ('$Email', '$Password', '$cPassword')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
