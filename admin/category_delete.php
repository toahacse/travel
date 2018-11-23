<?php
$id=$_GET['id'];
try{
    $con=new PDO("mysql::host=localehost;dbname=travels","root","");
        $delete=$con->prepare("DELETE FROM add_category WHERE id='$id'");
        $delete->execute();
        header("location:manage_category.php");
    }
catch(PDOException $e){
    echo "Error". $e->getMessage();
}