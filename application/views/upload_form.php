<html>
	<head>
		<title>Upload Form</title>
		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/tabs.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/form.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/nivo-style.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/nivo-slider.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/themes/default/default.css" type="text/css" media="screen" />

		<!-- Attach JavaScript files -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>

		<script src="<?php echo base_url(); ?>js/jquery.nivo.slider.pack.js" type="text/javascript"></script>

	</head>
	<body>
		<section class="current-body">
			<section class="main">
				<section class="content">
					<section class="upload">
						<h2>Upload an Image</h2>
						<?php echo $error; ?>

						<?php echo form_open_multipart('upload/do_upload'); ?>

						<input type="file" name="userfile" size="20" />

						<br />
						<br />

						<input type="submit" value="Upload Image" class="awesome large"/>

						</form>
					</section>
				</section>
			</section>
		</section>
	</body>
</html>