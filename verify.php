<?php

// put your data form 
$email = $_POST['email'];
$password = $_POST['password'];

// connection between form and database
$conn = mysqli_connect("localhost", "root","","go");

// $pass = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM `database` WHERE EMAIL = '$email' and PASSWORD = '$password'";

$query = mysqli_query($conn,$sql);

if($query){
    if($row = mysqli_fetch_array($query)){


session_start();
$_SESSION['USERID'] = $row['ID'];
$_SESSION['USERNAME'] = $row['EMAIL'];

header("location: fifthindex.php");

    }else{
          echo "<script> alert('ERROR: please create your ID')</script>  ";
        //   header("location: login.php");
          
          
        }
}



?>