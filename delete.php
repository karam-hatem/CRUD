<?php 
include 'config.php';
if(isset($_GET['delteteid'])){
    $id=$_GET['delteteid'];

    $sql="delete from employees  where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo " deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}



?>