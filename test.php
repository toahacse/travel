<?php
//try{
//    $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
//    $select=$con->prepare("SELECT * FROM add_package");
//    $select->setFetchMode(PDO::FETCH_ASSOC);
//    $p=$select->execute();
//    echo $p['tour_name'];
//}
//catch(PDOException $e)
//{echo "error" . $e->getMessage();
//}
//?>

<?php //$db=mysqli_connect("localhost","root","","travels");
//$sql = "SELECT * FROM add_package";
//$res = mysqli_query($db, $sql);
//while ($res=mysqli_fetch_array($res)){
//$h=$res['id'];
//echo count($h);
//}
//?>
<?php

//$id=$_GET['id'];
try {
    $con = new PDO ("mysql:host=localhost;dbname=travels", "root", "");
    $select = $con->prepare("SELECT * FROM add_package WHERE id=1");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    $p=$select->fetch();
    echo $p['location'];
}
                    catch(PDOException $e)
                {echo "error" . $e->getMessage();
                }
?>
