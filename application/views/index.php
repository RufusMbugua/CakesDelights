<?php

ob_start();
$sessionEmail = $this -> session -> userdata('email');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $title
			?></title>
		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url()?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/tabs.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/form.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/form-layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/fonts.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/inline.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/jquery-ui-1.8.18.custom.css"/>
		<!-- Attach JavaScript files -->
		<script src="<?php echo base_url()?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery.orbit.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery.validate.js" type="text/javascript" ></script>
		<script src="<?php echo base_url()?>js/testing.js" type="text/javascript" ></script>
		<!--script to form client side validation functions-->
		<!-- Run the TAB plugin -->
		<script type="text/javascript">
			$(function() {
				// Fast and dirty
				$('article.tabs section > h2').click(function() {
					$('article.tabs section').removeClass('ON');
					$(this).closest('section').addClass('ON');
				});
			});

		</script>
		<script type="text/javascript">
			$(function() {

				$('#externalFortified_B1').click(function() {
					document.location('formview.php?page=1');

				});
			});

		</script>
		<script type="text/javascript">
			// Place all JavaScript code here

			$(document).ready(function() {

				$("#showFancyModal").click(function() {
					$("#profile-fancy").addClass("show");
					return false;
				});

				$("#closeFancy").click(function() {
					$("#profile-fancy").removeClass("show");
					return false;
				});
			});

		</script>
	</head>
	<body>
		<section class="current-body">
			<section class="container">
				<section class="menu-main">
					<nav id="pageheader">
						<ul>
							<?php echo anchor('#','Home')
							?>
							<?php echo anchor('#','Portfolio')
							?>
							<?php echo anchor('#','Serving Guide')
							?>
							<?php echo anchor('#','Order')
							?>
							<?php echo anchor('#','Contacts')
							?>
							<?php //echo anchor('','')?>
						</ul>
					</nav>
				</section><!-- End of Menu-->
				<section class="content">
					<section class="image-wrapper">
						<div id="featured" >
							<div class="content" style=""></div>
							<img src="<? echo base_url() ?>img/orbit_images/bus1.png" data-caption="#htmlCaption" />
							<img src="<? echo base_url() ?>img/orbit_images/bus2.png" data-caption="#htmlCaption2" />
							<p></p>
						
						<!-- Captions for Orbit -->
						<span class="orbit-caption" id="htmlCaption"><strong>Our destinations are scenic</span>
						<span class="orbit-caption" id="htmlCaption2"><strong>Try our new fleet of buses </span>
						</div>
					</section>
				</section><!-- End of content -->
				</br>
			</section><!-- End of Container-->
		</section>
	</body>
</html>
<?php ob_end_flush();?> 