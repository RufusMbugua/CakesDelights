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
						<form>
							<input type="search" placeholder="Search" onkeypress="showText()"/>
						</form>
						
					</section>
					<?php 
					$count=1;
					print '
					<section class="tile-area">';
					foreach ($cakes as $key => $value) {				 
				    if($count%3==0){
					print '
						<section class="right-align">
							<section class="main-page-tiles" style="margin-right:0">
								<section class="cake-image"></section>
								<section class="cake-title">' ?>
									<?php print $value['cakesTitle'];?>
								<?php print '</section>
								<section class="cake-description">';?>
									<?php print $value['description'];?>
								<?php print '</section> 
								<section class="cake-footer">'?>
								    <?php print $value['tags'];
								    echo $count;?>
									<?php print '<button class="awesome " style="float:right" style=" bottom:0">Buy</button><br />
								</section>
							</section>

						</section> 

					</section>
					
					<section class="tile-area">';
				    }
					elseif ($count%3==1){
						
				    print '
											
							<section class="main-page-tiles" style="margin-right:4.5%">
								<section class="cake-image"></section>
								<section class="cake-title">' ?>
									<?php print $value['cakesTitle'];?>
								<?php print '</section>
								<section class="cake-description">';?>
									<?php print $value['description'];?>
								<?php print '</section> 
								<section class="cake-footer">'?>
								    <?php print $value['tags'];
								    echo $count; ?>
									<?php print '<button class="awesome " style="float:right" style=" bottom:0">Buy</button><br />
								</section>
							
					</section>';
					}
					elseif ($count%3==2){
						
				    print '
											
							<section class="main-page-tiles" >
								<section class="cake-image"></section>
								<section class="cake-title">' ?>
									<?php print $value['cakesTitle'];?>
								<?php print '</section>
								<section class="cake-description">';?>
									<?php print $value['description'];?>
								<?php print '</section> 
								<section class="cake-footer">'?>
								    <?php print $value['tags'];
								    echo $count; ?>
									<?php print '<button class="awesome " style="float:right" style=" bottom:0">Buy</button><br />
								</section>
							
					</section>';
					}
					
					$count++;
				 }
					
				
				 
				 ?>
					<script>
					function showText(){
						alert('Typed');
					};
						
					</script>
					
					<section class="paginate"></section>

				</section>
				<footer>

				</footer>

			</section>
		</section>
		  <script src="http://code.jquery.com/jquery-latest.js"></script>
	</body>
</html>