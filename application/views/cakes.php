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
		<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.tagsinput.css"/>		<!-- Attach JavaScript files -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" ></script>
		<script src="<?php echo base_url();?>js/jquery.orbit.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>js/jquery.tagsinput.js" type="text/javascript"></script>
		
		<script type="text/javascript">
		$().ready(function(){
		   $('.tags').tagsInput( {'interactive':false});
		   //alert('ready');
		});
		
			
		</script>
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
							<input type="search" placeholder="Search"/>
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
								<section class="cake-footer" style="float:left">';?>
								
								<?php print '<div class="tagsinput" style="width:relative;height:auto">
								<input type="text" id="tags'.$count.'" class="tags"  value="'.$value['tags'].'"/>
								</div>';?>
								 
								    <!--?php echo $count;?-->
									<?php print '<button class="awesome " style="float:right;bottom:0">Buy</button><br />
								
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
								   <?php print '<div class="tagsinput" style="width:auto;height:auto">
								<input type="text" id="tags'.$count.'" class="tags" value="'.$value['tags'].'"/>
								</div>';?>
								   <!--?php echo $count; ?-->
									<?php print '<button class="awesome" style="float:right;bottom:0">Buy</button><br />
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
								<section class="cake-description">'?>
									<?php print $value['description'];?>
								<?php print '</section> 
								<section class="cake-footer">'?>
								    <?php print '<div class="tagsinput" style="width:auto;height:auto">
								<input type="text" id="tags'.$count.'" class="tags" value="'.$value['tags'].'"/>
								</div>';?>
								   <!--?php echo $count; ?-->
									<?php print '<button class="awesome" style="float:right;bottom:0">Buy</button><br />
								</section>
							
					</section>';
					}
					
					$count++;
				 }
					
				
				 
				 ?>
					
					
					<section class="paginate"></section>

				</section>
				<footer>

				</footer>

			</section>
		</section>
	</body>
</html>