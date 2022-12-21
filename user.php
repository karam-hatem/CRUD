<?php 
include 'config.php';

if(isset($_POST['submit'])){

   $Full_Name=$_POST['Full_Name'] ;
   $Address=$_POST['Address'];
   $Salary=$_POST['Salary'];

   $sql="INSERT INTO employees (id ,full_name, user_address ,salary)
    values(NULL , '$Full_Name','$Address','$Salary')";

   $result=mysqli_query($con,$sql,);

   if($result){
    // echo "data successfully";
    header('location:display.php');
   }else
   {
     echo (mysqli_connect_errno($con));
   }   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

<div class="container my-5" >
<form method="POST">

  <div class="mb-3">
    <label>Full_Name</label>
    <input type="text" class="form-control"
     placeholder="Enter your Full_Name" name="Full_Name" autocomplete="off">
  </div>

  <div class="mb-3">
    <label>Address</label>
    <input type="text" class="form-control"
     placeholder="Enter your Address " name="Address" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Salary</label>
    <input type="text" class="form-control"
     placeholder="Enter your Salary" name="Salary" autocomplete="off">
  </div>

  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>

 
</body>
</html>