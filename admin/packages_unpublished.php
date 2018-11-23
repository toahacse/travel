<?php
//session_start();
try{
    $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
    $id=$_GET['id'];
    $classroom=1;
    $insert=$con->prepare("UPDATE add_package SET publication_Status= :classroom WHERE id='$id'");
    $insert->bindparam(':classroom',$classroom);
    $insert->execute();
    header("location:manage_tour_packages.php");
}
catch(PDOException $e)
{echo "error" . $e->getMessage();
}
?>