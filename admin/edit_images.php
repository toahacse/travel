<?php
include "header.php";
?>
<?php
$id=$_GET['id'];
$db=mysqli_connect("localhost","root","","travels");
$mass=" ";
if(isset($_POST['ok'])) {
    $publication_Status=$_POST['publication_Status'];
    $fileName=$_FILES['img']['name'];
    $directory='gallary/';
    $imageUrl=$directory.$fileName;
    if($fileName){
        move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
        $query="UPDATE add_images SET img='$imageUrl',publication_Status='$publication_Status' WHERE id='$id'";
        if(mysqli_query($db,$query)){
            $mass="<h3 class='text-success text-center'>"."Images Update Successfuly"."</h3>";
        }
    }else{
        $query="UPDATE add_images SET publication_Status='$publication_Status' WHERE id='$id'";
        if(mysqli_query($db,$query)){
            $mass="<h3 class='text-success text-center'>"."Images Update Successfuly"."</h3>";
        }
    }
}
?>

    <div class="row">
        <div class="col-md-offset-1 col-md-8" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Add Images</h3>
                </div>
                <div class="panel-body">
                    <?php echo $mass;?>

                <?php
                try{

                    $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
                    $select=$con->prepare("SELECT * FROM add_images WHERE id='$id'");
                    $select->setFetchMode(PDO::FETCH_ASSOC);
                    $select->execute();
                    $p = $select->fetch();
                    ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Image:</label>
                                            <input type="file" value="<?php echo $p['img'];?> " name="img"/>
                                            <img src="<?php echo $p['img'];?> " height="50px" width="100px;" />
                                        </div>
                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" name="publication_Status" <?php if($p['publication_Status'] == 1){ echo 'checked';}?>  value="1">Published
                            <input type="radio" name="publication_Status"  <?php if($p['publication_Status'] == 0){ echo 'checked';}?>  value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Update Images Info" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                    <?php
                }
                catch(PDOException $e)
                {echo "error" . $e->getMessage();
                }
?>
<?php
include "footer.php"
?>