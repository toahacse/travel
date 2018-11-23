<?php
include "header.php";
?>
        <?php
        $db=mysqli_connect("localhost","root","","travels");
        $mass=" ";
        if(isset($_POST['ok'])) {
            $category_Name =    $_POST['category_Name'];
            $tour_name =        $_POST['tour_name'];
            $tour_coust =       $_POST['tour_coust'];
            $duration =         $_POST['duration'];
            $location =         $_POST['location'];
            $tour_discription = $_POST['tour_discription'];
            $publication_Status = $_POST['publication_Status'];

            $sql = "SELECT * FROM add_package WHERE category_Name='$category_Name' AND location='$location'";
            $res = mysqli_query($db,$sql);
            if (mysqli_num_rows($res) > 0) {
                $mass="<h3 class='text-danger text-center'>"."Package Already Save!!"."</h3>";
            } else {
                $fileName=$_FILES['img']['name'];
                $directory='images/';
                $imageUrl=$directory.$fileName;
                $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
                $check=getimagesize($_FILES['img']['tmp_name']);
                if($check) {
                    if (file_exists($imageUrl)) {
                        $mass="<h3 class='text-danger text-center'>"."This image alredy Exist"."</h3>";
                    } else {
                        move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
                        $query = "INSERT INTO add_package(category_Name,tour_name,tour_coust,duration,location,img,tour_discription,publication_Status)
                          VALUES ('$category_Name','$tour_name','$tour_coust','$duration','$location','$imageUrl','$tour_discription','$publication_Status')";
                        if (mysqli_query($db, $query)) {
                            $mass = "<h3 class='text-success text-center'>" . "Package Save Successfully" . "</h3>";
                    }
                }
                }
                    else{
                        $mass="<h3 class='text-danger text-center'>"."Please chose a image file"."</h3>";
                }
                }

                }
        ?>

    <div class="row">
        <div class="col-md-offset-1 col-md-8" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Add Tour Package</h3>
                </div>
                <div class="panel-body">
                    <?php echo $mass;?>
                    <form action="" method="POST" enctype="multipart/form-data">
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
                               <option>Select-Category</option>
                <?php while($p=$select->fetch()){?>
                    <option><?php echo $p['category_Name']?></option>
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
                            <input type="text" class="form-control" name="tour_name" required id="formGroupExampleInput" placeholder="Tour Name"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Tour Cost:</label>
                            <input type="number" class="form-control" name="tour_coust" required id="formGroupExampleInput2" placeholder="TK"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Duration:</label>
                            <input type="number" class="form-control" name="duration" required id="formGroupExampleInput2" placeholder="Days"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Location:</label>
                            <input type="text" class="form-control" name="location" required id="formGroupExampleInput" placeholder="Location"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Image:</label>
                            <input type="file" class="form-control" name="img" required id="formGroupExampleInput"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Tour Discription:</label>
                            <textarea class="form-control" name="tour_discription" cols="20" rows="5">

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" name="publication_Status" value="1">Published
                            <input type="radio" name="publication_Status" value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Save Package Info" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php"
?>