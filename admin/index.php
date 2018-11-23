<?php
include "header.php";
//$db=mysqli_connect("localhost","root","","travels");
//$sql = "SELECT * FROM add_package";
//$res = mysqli_query($db, $sql);
//$i=count($res);
$con = new PDO ("mysql:host=localhost;dbname=travels","root","");
$select3=$con->prepare("SELECT * FROM booking");
$select3->setFetchMode(PDO::FETCH_ASSOC);
$select3->execute();
$l=0;
while($p=$select3->fetch()) {
    $p['id'];
    $l++;
}
$select=$con->prepare("SELECT * FROM add_package");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
$i=0;
while($p=$select->fetch()) {
    $p['id'];
    $i++;
}
$select1=$con->prepare("SELECT * FROM add_category");
$select1->setFetchMode(PDO::FETCH_ASSOC);
$select1->execute();
$j=0;
while($p=$select1->fetch()) {
    $p['id'];
    $j++;
}
$select2=$con->prepare("SELECT * FROM add_images");
$select2->setFetchMode(PDO::FETCH_ASSOC);
$select2->execute();
$k=0;
while($p=$select2->fetch()) {
    $p['id'];
    $k++;
}

?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $l;?></div>
                        <div>Total Boking</div>
                    </div>
                </div>
            </div>
            <a href="show_all_booking_list.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $i;?></div>
                        <div>Total Tour Packages</div>
                    </div>
                </div>
            </div>
            <a href="manage_tour_packages.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $j;?></div>
                        <div>Total Category</div>
                    </div>
                </div>
            </div>
            <a href="manage_category.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $k;?></div>
                        <div>Total Images</div>
                    </div>
                </div>
            </div>
            <a href="manage_gallary.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
    <?php
    include "footer.php"
    ?>
