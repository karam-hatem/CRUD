<?php 
$hostname="localhost";
$dbname="crud";
$dbuser="root";
$dpuserpassword="";

$con = mysqli_connect($hostname,$dbuser,$dpuserpassword,$dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
    echo "You are connected to the database successfully";
    echo (mysqli_connect_errno());
}

?>
