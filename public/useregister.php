<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "lr_db";

$Email = $_POST['Email'];
$User = $_POST['User'];
$Password = $_POST['Password'];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO users (Email, User, Password) VALUES ('$Email', '$User', '$Password')";

if($conn->query($sql)=== TRUE){
    echo "Registro exitoso";
}else{
    echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();

?>