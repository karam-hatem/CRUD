<?php 
include 'config.php';
$id=$_GET['updateid'];


$sql= "Select * from employees where id=$id";  //بترجع جميع بيانات الشخص يلي بدي أعمل تعديل على بياناته
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);  //برجع جميع البيانات داخل array
$full_name=$row['full_name'];
$user_address=$row['user_address'];
$salary=$row['salary'];

if(isset($_POST['submit']))
{

   $full_name=$_POST['Full_Name'] ;
   $user_address=$_POST['Address'];
   $salary=$_POST['Salary'];

   $sql="UPDATE employees SET id=$id, Full_Name= '$full_name',Address='$user_address',Salary='$salary'
   where id=$id";

   $result=mysqli_query($con,$sql,);

   if($result){
    // echo "update successfully";
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
     placeholder="Enter your Full_Name" name="Full_Name" autocomplete="off" value=<?php echo $full_name;?>>
  </div>

  <div class="mb-3">
    <label>Address</label>
    <input type="text" class="form-control"
     placeholder="Enter your Address " name="Address" autocomplete="off" value=<?php echo $user_address;?>>
  </div>
  <div class="mb-3">
    <label>Salary</label>
    <input type="text" class="form-control"
     placeholder="Enter your Salary" name="Salary" autocomplete="off" value=<?php echo $salary;?>>
  </div>

  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

</div>

 
</body>
</html>