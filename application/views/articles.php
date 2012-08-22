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
		<!-- Attach JavaScript files -->
		<script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
		<script src="js/jquery.orbit.js" type="text/javascript"></script>
		<title><?php echo $title
			?></title>
	</head>
	<body>

		<section class="current-body">
			<section class="main">
				<header>
					<?php $this->load->view('navigation'); ?>
				</header>
				<section class="content">

					<section class="within">
						<section class="sidebar">


						</section>
						<section class="tile-area-x2">

							<section class="search" style="top:0">
								<input type="search" placeholder="Search"/>
							</section>
							<section class="first-row" style="margin-bottom: 50px">
								<section class="article-tiles" style="margin-right:4.5%">

								</section>

								<section class="right-align">
									<section class="article-tiles" style="margin-right:0">

									</section>

								</section>

							</section>

							<section class="second-row" style="margin-bottom: 50px">
								<section class="article-tiles" style="margin-right:4.5%">

								</section>

								<section class="right-align">
									<section class="article-tiles" style="margin-right:0">

									</section>

								</section>

							</section>

							<section class="third-row">

								<section class="article-tiles" style="margin-right:4.5%">

								</section>

								<section class="right-align">
									<section class="article-tiles" style="margin-right:0">
										
										<?php
										
										$this -> load -> model('models_cakesDelights/M_Articles');
		$this -> M_Articles -> getArticlesInformation();
		$this -> articles = $this -> M_Articles ->articles;
										
										foreach ($this -> articles as $key => $value) {
												
											
											print $value['title']."<br/>";
											//print $value['dates']."&nbsp;";
											//print $value['author']."<br/>";
											//print $value['articleBody']."<br/>";
											
											
										}
										
										
										
										?>
										
										
										
										
									</section>

								</section>
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