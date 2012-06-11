<html>
	<head>
		<link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" />
		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/tabs.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/form.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/cakes.css"/>
		<!-- Attach JavaScript files -->
		<script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
		<script src="js/jquery.orbit.js" type="text/javascript"></script>
		<title><?php echo $title; ?></title>
	</head>
	<body>

		<section class="current-body">
			<section class="main">
				<header>
					<?php $this->load->view('navigation'); ?>
				</header>
				<section class="content">
					<section class="search">
						<input type="search" placeholder="Search"/>
					</section>
					<?php foreach ($cakes as $key => $value) {?>
					<?php print '<section class="tile-area">
						<section class="right-align">
							<section class="main-page-tiles" style="margin-right:0">
								<section class="cake-image"></section>
								<section class="cake-title"><br />' ?>
									<?php print $value['cakesTitle'].'<br/>';?>
								<?php print '</section>
								<section class="cake-description">';?>
									<?php print $value['description'].'<br/>';?>
								<?php print '</section> 
								<section class="cake-footer">'?>
								    <?php print $value['tags'].'<br/>';?>
									<?php print '<button class="awesome blue" style="float:right" style=" bottom:0">Buy</button><br />
								</section>
							</section>

						</section> 

					</section>';
					
				 }?>
					
					<section class="tile-area">

						<section class="main-page-tiles" style="margin-right:4.5%">

						</section>
						<section class="main-page-tiles">

						</section>
						<section class="right-align">
							<section class="main-page-tiles" style="margin-right:0">

							</section>

						</section>

					</section>
					<section class="paginate"></section>

				</section>
				<footer>

				</footer>

			</section>
		</section>
	</body>
</html>