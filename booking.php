<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Travel Agency a Travel Agency Category Flat Bootstrap Responsive Website Template | Booking :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travel Agency Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>	
		
<!-- For Testimonials slider -->
<!-- //For Testimonials slider -->
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
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/bookingstyle.css" rel="stylesheet" type="text/css" media="all"/>
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
<!-- main-section -->
	<div class="head agile">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="wthree_head_section" style="margin-bottom: -5px;">
                    <h3 class="w3l_header">Booking <span>Form</span></h3>
                </div>
            </div>
            <div class="panel-body">

                <form action="order.php" method="post">

                <div class="form-group row" style="margin-top: 40px;">
                        <label class="col-md-2 col-md-offset-1">Name:</label>
                    <div class="col-md-8 ">
                        <input type="text" required class="form-control" name="name" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-md-offset-1">Phone No:</label>
                    <div class="col-md-8 ">
                        <input type="number" required class="form-control" name="phoneNo" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-md-offset-1">Email:</label>
                    <div class="col-md-8 ">
                        <input type="email" required class="form-control" name="email" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-md-offset-1">Address:</label>
                    <div class="col-md-8 ">
                        <textarea required cols="20" rows="3" name="address" class="form-control">
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-md-offset-1">Number Of People:</label>
                    <div class="col-md-8 ">
                        <input type="number" required min="0" class="form-control" name="people" />
                    </div>
                </div>
                    <?php
                    $id=$_GET['id'];
                    try{
                    $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
                    $select=$con->prepare("SELECT * FROM add_package WHERE id='$id'");
                    $select->setFetchMode(PDO::FETCH_ASSOC);
                    $select->execute();
                    $p=$select->fetch();
                    ?>
                <div class="form-group row">
                    <label class="col-md-2 col-md-offset-1">From:</label>
                    <div class="col-md-3">
                        <input type="text" value="Chittagong" readonly name="from" class="form-control" />
                    </div>
                    <div class="col-md-1">To:</div>
                    <div class="col-md-3">
                        <input type="text" value="<?php echo $p['location'];?>"  readonly name="to" class="form-control" />
                    </div>

                </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-md-offset-1">Taka:</label>
                        <div class="col-md-8 ">
                            <input type="text" value="<?php echo $p['tour_coust'];?>" readonly class="form-control" name="taka" />
                        </div>
                    </div>
                    <?php }
                    catch(PDOException $e)
                    {echo "error" . $e->getMessage();
                    }
                    ?>
                <div class="form-group row">
                    <div class="col-md-8 col-md-offset-3 ">
                        <input type="submit" name="Book" class="btn btn-info btn-block" value="Submit" />
                    </div>
                </div>
                </form>
            </div>
        </div>

		<div class="clear"></div>
	</div>	
<!-- //main-section -->
<!-- footer -->

<?php include "footer.php"?>
<!-- //footer -->

<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Travel Agency
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
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
<!-- //Calendar -->
											<script src="js/jquery-ui.js"></script>
											  <script>
													  $(function() {
														$( "#datepicker,#datepicker1" ).datepicker();
													  });
											  </script>
								<!-- //Calendar -->
<!--script-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	
<!--script-->
</body>
</html>