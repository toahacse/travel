<?php
$id=$_GET['id'];
try{
    $con=new PDO("mysql::host=localehost;dbname=travels","root","");
    $select=$con->prepare("SELECT * FROM add_images WHERE id='$id'");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    while($p=$select->fetch()){
        $i=$p['img'];
        unlink($i);
    }
    $delete=$con->prepare("DELETE FROM add_images WHERE id='$id'");
    $delete->execute();
    header("location:manage_gallary.php");
}
catch(PDOException $e){
    echo "Error". $e->getMessage();
}
?>