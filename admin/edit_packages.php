<?php
include "header.php";
?>
<?php
$id=$_GET['id'];
$db=mysqli_connect("localhost","root","","travels");
$mass=" ";
if(isset($_POST['ok'])) {
        $category_Name = $_POST['category_Name'];
        $tour_name = $_POST['tour_name'];
        $tour_coust = $_POST['tour_coust'];
        $duration = $_POST['duration'];
        $location = $_POST['location'];
        $tour_discription = $_POST['tour_discription'];
        $publication_Status = $_POST['publication_Status'];
        $fileName=$_FILES['img']['name'];
        $directory='images/';
        $imageUrl=$directory.$fileName;
        $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
        if($fileName){
            move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
            $query="UPDATE add_package SET category_Name='$category_Name',tour_name='$tour_name',tour_coust='$tour_coust',duration='$duration',
                location='$location',img='$imageUrl',tour_discription='$tour_discription',publication_Status='$publication_Status' WHERE id='$id'";
            if(mysqli_query($db,$query)){
                $mass="<h3 class='text-success text-center'>"."Package Update Successfuly"."</h3>";
            }
        }else{
                $query="UPDATE add_package SET category_Name='$category_Name',tour_name='$tour_name',tour_coust='$tour_coust',duration='$duration',
                location='$location',tour_discription='$tour_discription',publication_Status='$publication_Status' WHERE id='$id'";
                if(mysqli_query($db,$query)){
                    $mass="<h3 class='text-success text-center'>"."Package Update Successfuly"."</h3>";
                }
        }
}
?>

    <div class="row">
        <div class="col-md-offset-1 col-md-8" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Update Tour Package</h3>
                </div>
                <div class="panel-body">
                    <?php echo $mass;?>
                    <form action="" method="POST" enctype="multipart/form-data">
                    <?php
                    try{
                        $id=$_GET['id'];
                        $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
                        $select=$con->prepare("SELECT * FROM add_package WHERE id='$id'");
                        $select->setFetchMode(PDO::FETCH_ASSOC);
                        $select->execute();
                        $p = $select->fetch();
                        ?>
                        <div class="form-group">
                            <label for="categoryName">Category Name:</label>
                            <?php
                            try{

                            $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
                            $select=$con->prepare("SELECT * FROM add_category WHERE publication_Status=1");
                            $select->setFetchMode(PDO::FETCH_ASSOC);
                            $select->execute();
                            ?>
                            <select name="category_Name" class="form-control">
                                <option><?php echo $p['category_Name'];?></option>
                                <?php while($k=$select->fetch()){?>
                                    <option><?php echo $k['category_Name']?></option>
                                <?php }
                                }
                                catch(PDOException $e)
                                {echo "error" . $e->getMessage();
                                }
                                ?>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="categoryName">Tour Name:</label>
                            <input type="text" class="form-control"  name="tour_name" value="<?php echo $p['tour_name']?>"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Tour Cost:</label>
                            <input type="number" class="form-control" value="<?php echo $p['tour_coust'];?>" name="tour_coust" />
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Duration:</label>
                            <input type="number" class="form-control" value="<?php echo $p['duration'];?>" name="duration"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Location:</label>
                            <input type="text" class="form-control" value="<?php echo $p['location'];?>" name="location" />
                        </div>
                        <div class="form-group">
                            <label>Image:</label>
                            <input type="file" value="<?php echo $p['img'];?> " name="img"/>
                            <img src="<?php echo $p['img'];?> " height="50px" width="100px;" />
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Tour Discription:</label>
                            <textarea class="form-control" name="tour_discription" rows="5">
                                <?php echo $p['tour_discription'];?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" name="publication_Status" <?php if($p['publication_Status'] == 1){ echo 'checked';}?>  value="1">Published
                            <input type="radio" name="publication_Status"  <?php if($p['publication_Status'] == 0){ echo 'checked';}?>  value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Update Package Info" />
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