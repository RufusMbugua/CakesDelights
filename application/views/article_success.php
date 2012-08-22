
<html>
<head>
	<script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" />
	<title><?php echo $hed;?></title>
	<script type="text/javascript">
	
		var fade_out = function() {
          $("#mydiv").fadeOut().empty();
         }
         setTimeout(fade_out, 5000);	
	</script>
	
	<script type="text/javascript">

	function validate(form){     	   
    if (!form.body.value){
     alert ("Enter Content");
        form.body.focus();
        return false;
    }
    else if(form.body.value=='<br>'){
    	alert ("Still Working:Click Again to Complete");
    	form.body.focus();
        return false;
    	
    }
    else{
    return true;	
    	
    }
   }
    </script>
	

	
</head>	

<body>
	<header>
	<?php $this->load->view('navigation'); ?>
   </header>
  <section class="content">
<div id="mydiv" style="background-color:#999">
<?php
echo $content;
?>
</div>
<form id="articlecreator" action="<?php echo base_url() ?>c_front/setArticles" method="post" onsubmit="return validate(this)">
Title: <br/>
<input name="title"  id="title" type="text" required="true" size="40"/><p>
Body: <br/>
<script src="<?php echo base_url();?>js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	new nicEditor({iconsPath : '<?php echo base_url();?>img/nicEditorIcons.gif'}).panelInstance('area1');
	new nicEditor({fullPanel : true}).panelInstance('area2');
	new nicEditor({iconsPath : '<?php echo base_url();?>img/nicEditorIcons.gif'}).panelInstance('area3');
	new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	new nicEditor({maxHeight : 100}).panelInstance('area5');
});
</script>
<textarea cols="80" id="area1" name="body"  id="body" rows="10" ></textarea><br/>

Tags:
<input type="text" name="tags" id="tags" size="50"/ required="true"><p>


<input type="submit" name="post" value="POST"/>


</form>


	
</section>	
</body>

</html>