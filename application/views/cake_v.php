<html>
<head>
<title><?php echo $title; ?></title>	
        <link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/cakes.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/tabs.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/form.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/nivo-style.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/nivo-slider.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/themes/default/default.css" type="text/css" media="screen" />
	
</head>
<body>
	<section class="current-body">
		<section class="main">
<?php
include ('navigation.php');
foreach ($cakes as $cake) {

}
?>
<section class="tile-area">
	<?php
	   print '
											
							<section class="main-page-tiles" style="margin-right:4.5%">
									
							 <section class="cake-image"><img src=';
								echo base_url().'images/small/IMG_8080_s.jpg>';
								print '</img>
								</section>
								<section class="cake-title">' ?>
									<?php print $cake -> cakeName; ?>
								<?php print '</section>
								<section class="cake-description">';
									?>
									<?php Print $cake -> description; ?>
								<?php print '</section> 
								<section class="cake-footer">'?>
								    <?php Print $cake -> cakesPrice; ?>
									<?php print '<button class="awesome " style="float:right" style=" bottom:0">Buy</button><br />
								</section>
							
					</section>';
	?>
	

	</section>
	</section>
	</section>
</body>	
		
</html>


