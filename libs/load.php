<?php

function load_template($name){
     include __DIR__."/../_template/$name.php";
}


function signup($user,$pass,$email,$phone){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photogram";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`) 
VALUES ('$user', '$pass', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

} 
?>