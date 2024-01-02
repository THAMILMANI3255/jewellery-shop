<?php error_reporting(0); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Jewellery Shop Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Joyas Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Tangerine:400,700|Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //start-smoth-scrolling -->
</head>
<body>
	<!--start-home-->
	<div id="home" class="header">
		<div class="header-bottom">
			<div class="container">
				<div class="logo">
					<a href="index.php"><h1>Jewellery Shop Management<span></span></h1></a>
				</div>
				<span class="menu"></span>
				<div class="top-menu">
					<ul>
					<nav>
					 <?php
			if($_SESSION['aid']!='')
			{
			?>

						<li><a href="supplier_register.php">Add Supplier</a></li>
						<li><a href="product_table.php">Add Product</a></li>
						<li><a href="stock.php">Stock</a></li>
						<li><a href="vieworder.php">View Order</a></li>
						<li><a href="add_employee_salary.php">Add Employee </a></li>
						<li><a href="viewemployee.php">View Employee </a></li>
            <li><a href="logout.php">Logout</a></li>
            
			<?php
			}
			else if($_SESSION['uid']!='')
			{
			?>
<li><a href="stock.php">Place order</a></li>
<li><a href="vieworder.php">View Order</a></li>
            <li><a href="logout.php">Logout</a></li>
			<?php
			}
			else
			{
			?>
						<li><a href="admin_login.php">Admin Login</a></li>
						<li><a href="customer_login.php">Customer Login</a></li> 
						<li><a href="customer_register.php">CUSTOMER REGISTER</a></li> 
			<?php
			}
			?>
			
					</nav>
					</ul>
				</div>
				<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
				<div class="clearfix"></div>
			</div>
		</div>

	<?php
$fn1=basename($_SERVER['SCRIPT_FILENAME']);
$fn2=explode(".","$fn1");
$links=$fn2[0];
?>

<?php if($links=='index' || $links=='') { 
?>
	<div class="banner">
		<div class="container">	
		<ul id="flexiselDemo3">
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#goofy">
								   <img src="images/s1.jpg"/>
								</a> 
								<div class="lightbox-target" id="goofy">
									  <img src="images/s1.jpg"/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#goofy">
								  <img src="images/s4.jpg"/>
								</a> 
								<div class="lightbox-target" id="goofy">
									  <img src="images/s4.jpg"/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
								<a class="lightbox" href="#goofy">
								    <img src="images/s5.jpg"/>
								</a> 
								<div class="lightbox-target" id="goofy">
									<img src="images/s5.jpg"/>
								   <a class="lightbox-close" href="#"> </a>
									
									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#goofy">
								  <img src="images/s3.jpg"/>
								</a> 
								<div class="lightbox-target" id="goofy">
									  <img src="images/s3.jpg"/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#goofy">
								    <img src="images/s1.jpg"/>
								</a> 
								<div class="lightbox-target" id="goofy">
									<img src="images/s1.jpg"/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
								<a class="lightbox" href="#goofy">
								    <img src="images/s5.jpg"/>
								</a> 
								<div class="lightbox-target" id="goofy">
									<img src="images/s5.jpg"/>
								   <a class="lightbox-close" href="#"> </a>
									
									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#goofy">
								  <img src="images/s4.jpg"/>
								</a> 
								<div class="lightbox-target" id="goofy">
									  <img src="images/s4.jpg"/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#goofy">
								   <img src="images/s3.jpg"/>
								</a> 
								<div class="lightbox-target" id="goofy">
									<img src="images/s3.jpg"/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				
	     	</ul>
			</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems:3,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems:3
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems:3
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems:3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>  
			<?php
			}
			?> 
		</div>
		<!---728x90--->