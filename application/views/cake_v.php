<html>
<head>
<title><?php echo $title;?></title>	
        <link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" />
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
	
</head>
<body>
	
<?php
include('navigation.php');
foreach ($cakes as $cake){

       
}

?>
<p>&nbsp;</p>	
<fieldset align="center">
<legend align="left"><b><u><?php Print $cake->cakeName; ?> Details</u></b></legend>	
<p>&nbsp;</p>	
<fieldset align="left">
<legend><b>Cake Price</b></legend>	
<input type="text" disabled="disabled" value="<?php Print $cake->cakesPrice ;?>"/>
	
</fieldset>
<fieldset align="left">
	<legend><b>Cake Description</b></legend>
	<textarea disabled="disabled" cols="40" rows="5">
		
	<?php Print $cake->description;?>	
	</textarea>
	
	
</fieldset>
	
</fieldset>
	
	
</body>	
		
</html>


