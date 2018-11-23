<?php
include "header.php";
?>
    <div class="row">
        <div class="col-md-offset-1 col-md-10" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Booking List</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <?php
                        try{

                            $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
                            $select=$con->prepare("SELECT * FROM booking");
                            $select->setFetchMode(PDO::FETCH_ASSOC);
                            $select->execute();
                            $i=1;
                            ?>
                            <tr class="bg-primary">
                                <th>SL</th>
                                <th>Name</th>
                                <th>Phone No</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Number Of People</th>
                                <th>Total Tk</th>
                                <th>Payment Type</th>
                            </tr>
                            <?php while($p=$select->fetch()){?>
                                <tr><td><?php echo $i++ ?></td>
                                    <td><?php echo $p['name']?></td>
                                    <td><?php echo $p['phoneNo']?></td>
                                    <td><?php echo $p['email']?></td>
                                    <td><?php echo $p['address']?></td>
                                    <td><?php echo $p['people']?></td>
                                    <td><?php echo $p['total']?></td>
                                    <td><?php echo $p['payment_type']?></td>
                                </tr>
                            <?php }
                            echo "</table>";
                            echo "</d iv>";
                        }

                        catch(PDOException $e)
                        {echo "error" . $e->getMessage();
                        }
                        ?>


                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php"
?>