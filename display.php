<?php 
include 'config.php';

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
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light"> Add user<a>
           </button>
           <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full_Name</th>
      <th scope="col">Address</th>
      <th scope="col">Salary</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php 
$sql="Select * from employees";
$result=mysqli_query($con , $sql);
if($result){
   while( $row=mysqli_fetch_assoc($result)){

    $id=$row['id'];
    $full_name=$row['full_name'];
    $user_address=$row['user_address'];
    $salary=$row['salary'];
    echo ' <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$full_name.'</td>
    <td>'.$user_address.'</td>
    <td>'.$salary.'</td>
    <td>
    <button class="btn btn-primary"> <a href="update.php? updateid='.$id.'" class="text-light">Update</a> </button>

    <button class="btn btn-danger"> <a href="delete.php? delteteid='.$id.'" class="text-light"  >Delete</a> </button>
    </td>
  </tr>';
   }
   
} 

?>
    
</body>
</html>