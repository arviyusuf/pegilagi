<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Globe Trotting a Travel Agency Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Globe Trotting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>pegilagi/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>pegilagi/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url();?>pegilagi/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="logo">
				<a href="index.html">Globe <span>Trotting</span></a>
			</div>
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="stroke">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="events.html">News & Events</a></li>
							<li><a href="short-codes.html">Short Codes</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="mail.html">Mail Us</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-info">
								<h3>" Excepteur sint occaecat cupidatat non proident, 
									sunt in culpa qui officia deserunt</h3>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3>" Sed ut perspiciatis unde omnis iste natus error sit 
									voluptatem accusantium doloremque</h3>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3>" At vero eos et accusamus et iusto odio 
									dignissimos ducimus qui blanditiis</h3>
							</div>
						</li>
					</ul>
				</div>
			</section>
				<!--FlexSlider-->
					<link rel="stylesheet" href="<?php echo base_url();?>pegilagi/css/flexslider.css" type="text/css" media="screen" />
					<script defer src="<?php echo base_url();?>pegilagi/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
			<!--End-slider-script-->
		</div>
	</div>
<!-- banner -->
<!-- banner-input -->
	<div class="banner-input">
		<div class="container">
			<form>
				<input type="text" value="City, Region or Country" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'City, Region or Country';}" required="">
				<select id="country" onchange="change_country(this.value)" class="frm-field required">
					<option value="null">Traveller 1</option>
					<option value="null">Traveller 2</option>         
					<option value="AX">Traveller 3</option>
					<option value="AX">Traveller 4</option>
					<option value="AX">Traveller 5</option>
					<option value="AX">Traveller 6</option>
				</select>
				<input class="date" id="datepicker" type="text" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">
				<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
				<input type="submit" value=" " >
				<div class="clearfix"> </div>
			</form>
				<!---strat-date-piker---->
					<link rel="stylesheet" href="<?php echo base_url();?>pegilagi/css/jquery-ui.css" />
					<script src="<?php echo base_url();?>pegilagi/js/jquery-ui.js"></script>
					  <script>
							  $(function() {
								$( "#datepicker" ).datepicker();
							  });
					  </script>
				<!---/End-date-piker---->
		</div>
	</div>
<!-- //banner-input -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="col-md-3 banner-bottom-grid">
					<img src="images/8.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-3 banner-bottom-grid">
					<img src="images/10.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-3 banner-bottom-grid">
					<img src="images/9.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-3 banner-bottom-grid">
					<img src="images/11.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="container">
			<h2>Latest Blog</h2>
			<p class="iusto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
				praesentium voluptatum deleniti atque corrupti quos dolores.</p>
			<div class="banner-bottom1-grids">
				<div class="col-md-4 banner-bottom1-grid">
					<div class="banner-bottom1-grid1">
						<a href="<?php echo base_url();?>pegilagi/single.html"><img src="images/1.jpg" alt=" " class="img-responsive" /></a>
						<div class="banner-bottom1-grid1-left">
							<a href="<?php echo base_url();?>pegilagi/single.html">omnis dolor repellendus</a>
						</div>
						<div class="banner-bottom1-grid1-right">
							<ul>
								<li><a href="<?php echo base_url();?>pegilagi/#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> 50</a></li>
								<li><a href="<?php echo base_url();?>pegilagi/#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 150</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom1-grid">
					<div class="banner-bottom1-grid1">
						<a href="<?php echo base_url();?>pegilagi/single.html"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
						<div class="banner-bottom1-grid1-left">
							<a href="<?php echo base_url();?>pegilagi/single.html">omnis dolor repellendus</a>
						</div>
						<div class="banner-bottom1-grid1-right">
							<ul>
								<li><a href="<?php echo base_url();?>pegilagi/#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> 50</a></li>
								<li><a href="<?php echo base_url();?>pegilagi/#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 150</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom1-grid">
					<div class="banner-bottom1-grid1">
						<a href="<?php echo base_url();?>pegilagi/single.html"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
						<div class="banner-bottom1-grid1-left">
							<a href="<?php echo base_url();?>pegilagi/single.html">omnis dolor repellendus</a>
						</div>
						<div class="banner-bottom1-grid1-right">
							<ul>
								<li><a href="<?php echo base_url();?>pegilagi/#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> 50</a></li>
								<li><a href="<?php echo base_url();?>pegilagi/#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 150</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom1 -->
<!-- latest-posts -->
	<div class="latest-posts">
		<div class="container"> 
			<h3>Latest News</h3>
			<p class="iusto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
				praesentium voluptatum deleniti atque corrupti quos dolores.</p>
			<div class="latest-posts-grids">
				<div class="col-md-3 latest-posts-grid">
					<div class="latest-posts-grid1">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<div class="latest-posts-grid11">
							<h5><a href="<?php echo base_url();?>pegilagi/single.html">corrupti quos dolores</a></h5>
							<h4>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
								praesentium</h4>
							<div class="latest-posts-grid11-left">
								<p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>25/01/2016</p>
							</div>
							<div class="latest-posts-grid11-right">
								<a href="<?php echo base_url();?>pegilagi/#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 3 Comments</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 latest-posts-grid">
					<div class="latest-posts-grid1">
						<img src="images/5.jpg" alt=" " class="img-responsive" />
						<div class="latest-posts-grid11">
							<h5><a href="<?php echo base_url();?>pegilagi/single.html">accusamus iusto odio</a></h5>
							<h4>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
								praesentium</h4>
							<div class="latest-posts-grid11-left">
								<p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>30/01/2016</p>
							</div>
							<div class="latest-posts-grid11-right">
								<a href="<?php echo base_url();?>pegilagi/#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 3 Comments</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 latest-posts-grid">
					<div class="latest-posts-grid1">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<div class="latest-posts-grid11">
							<h5><a href="<?php echo base_url();?>pegilagi/single.html">blanditiis prae ducimus</a></h5>
							<h4>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
								praesentium</h4>
							<div class="latest-posts-grid11-left">
								<p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>5/02/2016</p>
							</div>
							<div class="latest-posts-grid11-right">
								<a href="<?php echo base_url();?>pegilagi/#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 3 Comments</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 latest-posts-grid">
					<div class="latest-posts-grid1">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<div class="latest-posts-grid11">
							<h5><a href="<?php echo base_url();?>pegilagi/single.html">odio dignissimos iusto</a></h5>
							<h4>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
								praesentium</h4>
							<div class="latest-posts-grid11-left">
								<p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>9/02/2016</p>
							</div>
							<div class="latest-posts-grid11-right">
								<a href="<?php echo base_url();?>pegilagi/#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 3 Comments</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix">  </div>
			</div>
		</div>
	</div>
<!-- //latest-posts -->
<!-- subscribe -->
	<div class="subscribe">
		<div class="container">
			<div class="subscribe-left">
				<h1>Subscribe Now</h1>
				<p class="iusto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
			</div>
			<div class="subscribe-right">
				<p>But I must explain to you how all this mistaken idea of denouncing 
					pleasure and praising pain was born and I will give you a complete account 
					of the system, and expound the actual teachings of the great explorer of 
					the truth.On the other hand, we denounce with righteous indignation.</p>
			</div>
			<div class="clearfix"> </div>
			<div class="subscribe-pos">
				<form>
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" >
				</form>
			</div>
		</div>
	</div>
<!-- //subscribe -->
<!-- twitter-comment -->
	<div class="twitter-comment">
		<div class="container">
			<div class="twitter-comment-twi">
				<span></span>
			</div>
			<p>MS <a href="<?php echo base_url();?>pegilagi/mailto:info@example.com">@sowjo</a> The <a href="<?php echo base_url();?>pegilagi/mailto:info@example.com">@monostr</a>
				Bundle - 1 week Only <a href="<?php echo base_url();?>pegilagi/#">http//iuh/27Haweth.</a> Don't Pay Its Your $60.00 duration 2016-2030.
				<span>26-01-2016 <a href="<?php echo base_url();?>pegilagi/mailto:info@example.com">@sowjo.</a></span></p>
		</div>
	</div>
<!-- //twitter-comment -->
<!-- contact-us -->
	<div class="contact-us">
		<div class="container">
			<h3>Contact Us</h3>
			<div class="contact-us-grids">
				<div class="col-md-4 contact-us-grid">
					<i class="glyphicon glyphicon-flag" aria-hidden="true"></i>
					<h4>About Us</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
						accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
						ab illo inventore veritatis et quasi architecto.</p>
				</div>
				<div class="col-md-3 contact-us-grid">
					<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
					<h4>Address</h4>
					<p>Modo Center Address<span>+1(999)-908-0000</span>
						123 Newyork City USA.<span>Support to: <a href="<?php echo base_url();?>pegilagi/mailto:info@example.com">info@example.com</a></span></p>
				</div>
				<div class="col-md-5 contact-us-grid">
					<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
					<h4>Get In Touch</h4>
					<form>
						<input type="text" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}" required="">
						<input type="email" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Subscribe" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //contact-us -->
<!-- footer -->
	<div class="footer">
		<div class="container"> 
			<div class="footer-bottom-left">
				<p>&copy 2016 Globe Trotting. All rights reserved | Design by <a href="<?php echo base_url();?>pegilagi/http://w3layouts.com/">W3layouts.</a></p>
			</div>
			<div class="footer-bottom-right">
				<ul>
					<li><a href="<?php echo base_url();?>pegilagi/#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
					<li><a href="<?php echo base_url();?>pegilagi/#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
					<li><a href="<?php echo base_url();?>pegilagi/#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- scroll_top_btn -->
		<script type="text/javascript" src="<?php echo base_url();?>pegilagi/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>pegilagi/js/easing.js"></script>
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="<?php echo base_url();?>pegilagi/#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<!--end scroll_top_btn -->
<!-- for bootstrap working -->
	<script src="<?php echo base_url();?>pegilagi/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>