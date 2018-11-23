<?php
$id=$_GET['id'];
try{
    $con=new PDO("mysql::host=localehost;dbname=travels","root","");
    $delete=$con->prepare("DELETE FROM add_package WHERE id='$id'");
    $delete->execute();
    header("location:manage_tour_packages.php");
}
catch(PDOException $e){
    echo "Error". $e->getMessage();
}