<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travel Agency a Travel Agency Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Travel Agency Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme files-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //custom-theme files-->

    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- googlefonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- //googlefonts -->

</head>
<body>

<!-- banner -->


<!-- Top-Bar -->
<div class="top">
    <div class="container">


        <div class="col-md-6 top-middle">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="col-md-6 top-left">
            <ul>
                <li><i class="fa fa-mobile" aria-hidden="true"></i> 01861-870408</li>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Muradpor,Chittagong,Bangladesh. </li>
            </ul>
        </div>
        <div class="clearfix"></div>

    </div>
</div>
<div class="top-bar">
    <div class="container">
        <div class="header">
            <?php include 'navber.php';?>
        </div>
    </div>
</div>
<!-- //Top-Bar -->
<!-- w3-banner -->
<div class="banner-1">

</div>
<div class="w3ls-section wthree-pricing" id="pricing">
    <div class="container">
        <div class="wthree_head_section">
            <?php
            $id=$_GET['id'];
            try{
            $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
            $select=$con->prepare("SELECT * FROM add_package WHERE publication_Status=1 AND category_Name ='$id' ORDER BY id DESC");
            $select->setFetchMode(PDO::FETCH_ASSOC);
            $select->execute();
            ?>
            <h3 class="w3l_header">Tour <span>Packages</span></h3>
        </div>
        <div class="pricing-grids-info">
            <?php while($p=$select->fetch()){?>

            <div class="pricing-grid grid-one">
                <div class="w3ls-top">
                    <a href="Details.php?id=<?php echo $p['id'];?>">
                        <img src="admin/<?php echo $p['img']?>" height="200px" alt="">
                    </a>
                </div>
                <div class="w3ls-bottom">
                    <ul class="count">
                        <h3><?php echo $p['location']?></h3>
                        <li><?php echo $p['duration']?> Days</li>
                        <li><?php echo $p['tour_name']?></li>
                    </ul>
                    <h4> <?php echo $p['tour_coust']?><span class="sup">TK</span> </h4>
                    <div class="more">
                        <a href="booking.php?id=<?php echo $p['id'];?>">Book Now</a>
                    </div>
                </div>
            </div>
            <?php }
            }
            catch(PDOException $e)
                {echo "error" . $e->getMessage();
                }
                ?>
            <div class="clearfix"> </div>
            <!--End-slider-script-->
        </div>
    </div>
</div>

<!-- footer -->

<?php include "footer.php"?>
<!-- //footer -->
<!--            --><?php
//            $id=$_GET['id'];
//            try{
//            $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
//            $select=$con->prepare("SELECT * FROM add_package WHERE publication_Status=1 AND category_Name ='$id' ORDER BY id DESC");
//            $select->setFetchMode(PDO::FETCH_ASSOC);
//            $select->execute();
//            ?>
            <!-- bootstrap-modal-pop-up -->
<!--<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                --><?php //while($p=$select->fetch()){?>
<!--                    --><?php //echo $p['location']?>
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <img src="admin/--><?php //echo $p['img']?><!--" height="230px" />-->
<!--                <p>--><?php //echo $p['tour_discription']?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--            --><?php //}
//            }
//            catch(PDOException $e)
//                {echo "error" . $e->getMessage();
//                }
//                ?>
<!-- //bootstrap-modal-pop-up -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js -->
<!-- //here starts scrolling icon -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling script -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //scrolling script -->
</body>
</html>