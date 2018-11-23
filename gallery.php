<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Travel Agency a Travel Agency Category Flat Bootstrap Responsive Website Template | Gallery :: w3layouts</title>
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
<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
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

	<div class="banner-bottom gallery">
		<div class="container">
		<div class="wthree_head_section">
				<h2 class="w3l_header">Our <span>Gallery</span></h2>
				<p>A travel agency is a private retailer or public service that provides travel and tourism related services to the public on behalf of suppliers such as activities.</p>
			</div>
			<div class="w3ls_gallery_grids">
                <?php
                try{

                $con = new PDO ("mysql:host=localhost;dbname=travels","root","");
                $select=$con->prepare("SELECT * FROM add_images WHERE publication_Status=1 ORDER BY id DESC LIMIT 12");
                $select->setFetchMode(PDO::FETCH_ASSOC);
                $select->execute();
                ?>
                <?php while($p=$select->fetch()){?>
				<div class="col-md-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="admin/<?php echo $p['img']?>" />
							<div class="agile_gallery_grid1">
								<img src="admin/<?php echo $p['img']?>" alt=" "  height="300px" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Travel</h3>
									<p> Transport</p>
								</div>
							</div>
						</a>
					</div>
<!--					<div class="agile_gallery_grid">-->
<!--						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g2.jpg">-->
<!--							<div class="agile_gallery_grid1">-->
<!--								<img src="--><?php //echo $p['img']?><!--" alt=" " class="img-responsive" />-->
<!--								<div class="w3layouts_gallery_grid1_pos">-->
<!--									<h3>Travel</h3>-->
<!--									<p> Transport</p>-->
<!--								</div>-->
<!--							</div>-->
<!--						</a>-->
<!--					</div>-->
<!--					<div class="agile_gallery_grid">-->
<!--						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g3.jpg">-->
<!--							<div class="agile_gallery_grid1">-->
<!--								<img src="--><?php //echo $p['img']?><!--" alt=" " class="img-responsive" />-->
<!--								<div class="w3layouts_gallery_grid1_pos">-->
<!--									<h3>Travel</h3>-->
<!--									<p> Transport</p>-->
<!--								</div>-->
<!--							</div>-->
<!--						</a>-->
<!--					</div>-->
				</div><?php }
                    echo "</table>";
                }
                catch(PDOException $e)
                {echo "error" . $e->getMessage();
                }
                ?>


				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //gallery -->

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
<!-- simpleLightbox -->
		<script src="js/simpleLightbox.js"></script>	<script>
		$('.w3_agile_gallery_grid a').simpleLightbox();
	</script>
<!-- //simpleLightbox -->

</body>
</html>