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
<!-- //banner -->
<!-- about -->
<!-- main-textgrids -->
<div class="main-textgrids">
    <div class="container">
        <div class="wthree_head_section">
            <h3 class="w3l_header">Tour <span>Details</span></h3>
        </div>
        <?php
        $id=$_GET['id'];
        $db=mysqli_connect("localhost","root","","travels");
        $sql = "SELECT * FROM add_package WHERE id=$id";
        $res = mysqli_query($db, $sql);
        $res=mysqli_fetch_array($res);?>
                <div class="panel panel-default col-md-8 col-md-offset-2">
                    <div class="panel-heading" style="margin-top: 10px;">
                            <img src="admin/<?php echo $res['img']?>" height="300px" alt="">
                    </div>
                    <div class="panel-body">
                        <ul class="count">
                            <h3 class="text-center" style="margin-bottom: 25px;">Location: <span style="color:#9f191f; font-size: 30px;"><?php echo $res['location']?></span></h3>
                            <p class="text-center" style="font-size: 20px; margin-bottom: 40px;">
                                <span style="color: #CC0000;font-size: 30px; ">Discription: </span><?php echo $res['tour_discription']?>
                            </p>
                            <h3 class="text-center" style="margin-bottom: 15px;"><span style="color: #0f0f0f;"><b>Duration: </b></span><span style="color: red; font-size: 40px;"><?php echo $res['duration']?></span> Days</h3>
                            <h3 class="text-center" style="margin-bottom: 15px;"><span style="color: #0f0f0f;"><b>Tour_Name: </b></span><?php echo $res['tour_name']?></h3>
                        </ul>
                        <h3 class="text-center" style="margin-bottom: 15px;"><span style="color: #0f0f0f;"><b>Tour_Coust:</b></span> <span style="color: red; font-size: 30px;"><?php echo $res['tour_coust']?></span><span class="sup"> TK</span> </h3>
                        <div class="more text-center">
                            <a href="booking.php?id=<?php echo $id;?>">Book Now</a>
                        </div>
                    </div>
                </div>

        </div>
</div>



<?php include "footer.php"?>
<!-- //footer -->

<!-- bootstrap-modal-pop-up -->
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