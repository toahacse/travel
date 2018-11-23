<?php
include "header.php"
?>
<?php
$db=mysqli_connect("localhost","root","","travels");
$mass=" ";
if(isset($_POST['ok'])) {
    $category_Name         =  $_POST['category_Name'];
    $publication_Status    = $_POST['publication_Status'];

    $sql = "SELECT * FROM add_category WHERE category_Name='$category_Name'";
    $res = mysqli_query($db, $sql);

    if (mysqli_num_rows($res) > 0) {
        $mass="<h3 class='text-danger text-center'>"."Category Already Save!!"."</h3>";
    } else {
        $query="INSERT INTO add_category(category_Name,publication_Status) VALUES ('$category_Name','$publication_Status')";
        if(mysqli_query($db,$query)){
            $mass="<h3 class='text-success text-center'>"."Category Save Successfully"."</h3>";
        }
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
                    <?php echo $mass;?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="categoryName">Category Name:</label>
                            <input type="text" class="form-control" name="category_Name" required id="formGroupExampleInput" placeholder="Category Name"/>
                        </div>
                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" name="publication_Status" value="1">Published
                            <input type="radio" name="publication_Status" value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Save Category Info" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php"
?>