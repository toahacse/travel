<?php
include "header.php";
?>
    <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Manage Category Info</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <?php
                        try{
                            $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
                            $select=$con->prepare("SELECT * FROM add_package");
                            $select->setFetchMode(PDO::FETCH_ASSOC);
                            $select->execute();
                            $i=1;
                            ?>
                            <tr class="bg-primary">
                                <th>SL</th>
                                <th>Category Name</th>
                                <th>Tour Name</th>
                                <th>Tour Cost</th>
                                <th>Duration</th>
                                <th>Location</th>
                                <th>Image</th>
                                <th>Tour Discription</th>
                                <th>Publication Status</th>
                                <th style="padding-left: 30px; padding-right: 30px;">Action</th>
                            </tr>
                            <?php while($p=$select->fetch()){?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $p['category_Name']?></td>
                                    <td><?php echo $p['tour_name']?></td>
                                    <td><?php echo $p['tour_coust']?>-Tk</td>
                                    <td><?php echo $p['duration']?>-Days</td>
                                    <td><?php echo $p['location']?></td>
                                    <td><img src="<?php echo $p['img']?>" height="60px" width="80px;"/></td>
                                    <td><?php echo $p['tour_discription']?></td>
                                    <td><?php echo $p['publication_Status']== 1 ? 'Published' : 'Unpublished'?></td>
                                    <td>
                                        <?php if($p['publication_Status'] == 1){?>
                                            <a href="packages_published.php?id=<?php echo $p['id'];?>" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        <?php }else{?>
                                            <a href="packages_unpublished.php?id=<?php echo $p['id'];?>" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        <?php }?>
                                        <a href="edit_packages.php?id=<?php echo $p['id'];?>" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a id="delete" href="packages_delete.php?id=<?php echo $p['id'];?>" onclick="return confirm('Are You Sure Delete this!!');" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            <?php }
                            echo "</table>";
                        }
                        catch(PDOException $e)
                        {echo "error" . $e->getMessage();
                        }
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
<!--<script src="assests/jquery/jquery.js"></script>-->
<!--    <script>-->
<!--   $(document).ready(function () {-->
<!--       $('#delete').onclick(function () {-->
<!--           alert ("test");-->
<!--           });-->
<!--   });-->
<!--    </script>-->
<?php
include "footer.php"
?>