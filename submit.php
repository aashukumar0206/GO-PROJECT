<?php

// put your data form 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// echo $name .$email . $password ;

// connection between form and database
$conn = mysqli_connect("localhost", "root","","go");

// $pass = password_hash($password, PASSWORD_DEFAULT);

// inserting data in database
$sql = "INSERT INTO `database`(`NAME`, `EMAIL`, `PASSWORD`) VALUES ('$name','$email','$password')";

$query = mysqli_query($conn , $sql);


if($query){
    // echo"registration success";
header("location: login.php?reg=1");
}else{
    echo "something went wrong try again";
}



?>