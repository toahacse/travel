<?php
include "header.php";
?>
<?php
$db=mysqli_connect("localhost","root","","travels");
$mass=" ";
if(isset($_POST['ok'])) {
    $publication_Status=$_POST['publication_Status'];
    $fileName=$_FILES['img']['name'];
    $directory='gallary/';
    $imageUrl=$directory.$fileName;
    $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
    $check=getimagesize($_FILES['img']['tmp_name']);
if($check) {
    if (file_exists($imageUrl)) {
        $mass="<h3 class='text-danger text-center'>"."This image alredy Exist"."</h3>";
    } else {
        move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
        $query = "INSERT INTO add_images(img,publication_Status)
                          VALUES ('$imageUrl','$publication_Status')";
        if (mysqli_query($db, $query)) {
            $mass = "<h3 class='text-success text-center'>" . "Image Save Successfully" . "</h3>";
        }
    }
}
else{
    $mass="<h3 class='text-danger text-center'>"."Please chose a image file"."</h3>";
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
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="categoryName">Image:</label>
            <input type="file" class="form-control" name="img" required id="formGroupExampleInput"/>
        </div>
        <div class="form-group">
            <label>Publication Status: </label>
            <input type="radio" required name="publication_Status" value="1">Published
            <input type="radio" required name="publication_Status" value="0">Unpublished
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success btn-block" name="ok" value="Save Images Info" />
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
<?php
include "footer.php"
?>