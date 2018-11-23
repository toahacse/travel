<?php
include "header.php"
?>
<?php
$db=mysqli_connect("localhost","root","","travels");
$id= $_GET['id'];
$mass=" ";
if(isset($_POST['ok'])) {
    $category_Name = $_POST['category_Name'];
    $publication_Status = $_POST['publication_Status'];
        $query="UPDATE add_category SET category_Name='$category_Name',publication_Status='$publication_Status' WHERE id='$id'";
        if(mysqli_query($db,$query)){
            $mass="<h3 class='text-success text-center'>"."Category Update Successfuly"."</h3>";
    }
}

?>
    <div class="row">
        <div class="col-md-offset-1 col-md-8" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Add Category</h3>
                </div>
                <div class="panel-body">
                    <?php echo $mass;
                    ?>
<?php
try{

    $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
    $select=$con->prepare("SELECT * FROM add_category WHERE id='$id'");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    $p = $select->fetch();
    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="categoryName">Category Name:</label>
                            <input type="text" class="form-control" value="<?php echo $p['category_Name']?>" name="category_Name" required id="formGroupExampleInput" placeholder="Category Name"/>
                        </div>
                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" name="publication_Status" <?php if($p['publication_Status'] == 1){ echo 'checked';}?>  value="1">Published
                            <input type="radio" name="publication_Status"  <?php if($p['publication_Status'] == 0){ echo 'checked';}?>  value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Update Category Info" />
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