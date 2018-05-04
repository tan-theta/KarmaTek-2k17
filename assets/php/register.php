<?php

$link = mysqli_connect("localhost", "tanmo4rd_admin", "Tanmoy@97", "tanmo4rd_registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$DOB = mysqli_real_escape_string($link, $_POST['DOB']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$institution = mysqli_real_escape_string($link, $_POST['institution']);
$year = mysqli_real_escape_string($link, $_POST['year']);
$event = mysqli_real_escape_string($link, $_POST['eve']);
$payment = mysqli_real_escape_string($link, $_POST['payment']);
 
// attempt insert query execution
$sql = "INSERT INTO registration (name,DOB,email,phone,institution,year,event,payment) VALUES ('$name', '$DOB', '$email', '$phone', '$institution', '$year', '$event', '$payment')";
if(mysqli_query($link, $sql)){
    echo 'Successfully registered';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>