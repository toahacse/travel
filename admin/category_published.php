<?php
//session_start();
try{
    $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
        $id=$_GET['id'];
        $classroom=0;
        $insert=$con->prepare("UPDATE add_category SET publication_Status= :classroom WHERE id='$id'");
        $insert->bindparam(':classroom',$classroom);
        $insert->execute();
         header("location:manage_category.php");
    }
catch(PDOException $e)
{echo "error" . $e->getMessage();
}
?>