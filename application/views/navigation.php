<html>
<head>
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery-1.8.0.js"></script>
<script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.autocomplete.css" />
        <link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" />
		<!--<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/tabs.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/form.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/nivo-style.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/nivo-slider.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/themes/default/default.css" type="text/css" media="screen" />
<script type="text/javascript">

$().ready(function(){
	
$("#txtsearch").autocomplete("c_front/cakeSearch", {
	        width: 260,
	        matchContains: true,
            selectFirst: false
    });

 
});

</script>
</head>
<body>


<?php ?>
<nav>
	<ul>
		<li>
			<?php echo anchor(base_url() . 'c_front/index', 'Home'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'c_front/cakes', 'Cakes'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'c_front/articles', 'Articles'); ?>
		</li>
		<li>
			<a>Orders</a>
		</li>
		<li>
			<?php echo anchor(base_url() . 'c_front/moreinfo', 'More Info.'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'c_front/ArticleCreator', 'Editor'); ?>
		</li>
	</ul>
	

<form autocomplete="off" action="<?php echo base_url() ?>c_front/getCakesInfo" method="POST">

<input type="search" id="txtsearch" name="txtsearch" placeholder="Search for Cakes" required size="70"/>

<button id="btnsearch" name="btnsearch" class="button" style="color:#06F;background-color:#999; ">SEARCH</button>

</form>
</nav>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
echo @$message;
?>
</body>
</html>