<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<!-- 
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST["name"];
  $course = $_POST["course"];
    $number = $_POST["number"];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'dcac';

    // connectin to database with our form 
    $conn = mysqli_connect($servername , $username, $password , $database);


    if(!$conn){
      die('sorry we failed to connect ' .mysqli_connect_error()) ;
    }else{
      // echo 'connection was successfully';
      
    }
      // inserting the data in datatbase 
      $sql = "INSERT INTO `students` (`NAME`, `COURSE`, `PHONE`) VALUES ('$name' , '$course' , '$number')";
      $result = mysqli_query($conn, $sql);
      
      if($result){
        echo 'the record has been updated succesfully thank you so much ' ;
      }else{
        echo 'sorry the record not inserted in database';
  
}

}
?> -->

<div class="container mt-4">
    <h2>Please LOG IN Here :-</h2>

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

</div>

<form action="/LEARNPHP/form.php" method="POST">
  <input type="text" name="name" id="name" for="name">
  <input type="text" name="course" id="course" for="course">
  <input type="number" name="number" id="number" for="number">
 <button type="submit">submit</button>
 </form>


</body>
</html>