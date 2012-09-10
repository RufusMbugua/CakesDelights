<html>
<head>
<script src="<?php echo base_url() ?>js/jquery-1.8.0.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>js/nicEdit.js" type="text/javascript"></script>
<title><?php echo $title;?></title>

<script type="text/javascript">
$(document).ready(function(){
$("#area1").append("0");
$("#submit").click(function(){

var nicE = new nicEditors.findEditor('area1');
text = nicE.getContent();
if(text && text !="<br>" && text!=0){
	return true;
}

else{
	alert("No Content!");
	return false;
	}

});


});

</script>


<script type="text/javascript">
bkLib.onDomLoaded(function() {
	new nicEditor({iconsPath : '<?php echo base_url() ?>img/nicEditorIcons.gif'}).panelInstance('area1');
	new nicEditor({fullPanel : true}).panelInstance('area2');
	new nicEditor({iconsPath : '<?php echo base_url() ?>img/nicEditorIcons.gif'}).panelInstance('area3');
	new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	new nicEditor({maxHeight : 100}).panelInstance('area5');
});
</script>

<script type="text/javascript">
	
		var fade_out = function() {
          $("#mydiv").fadeOut().empty();
         }
         setTimeout(fade_out, 5000);	
</script>

</head>


<body>
<header>

<?php $this->load->view('navigation');?>
</header>
<div id="mydiv" style="background-color:#999">
<?php
echo $content;
?>
</div>	
<section class="content">
<form name="articlecreator" action="<?php echo base_url() ?>c_front/setArticles" method="POST">
<fieldset>
<legend align="left"><strong><u><h2>ARTICLE EDITOR</h2></u></strong></legend>
<fieldset style="width:53%">
<legend align="left"><strong>TITLE</strong></legend>
<input name="title" type="text" id="title" size="100" required="true"/><p>
</fieldset>
<p>
<fieldset style="width:53%">
<legend align="left"><strong>CONTENT</strong></legend>
<textarea id="area1" name="body" rows="20" cols="100">


</textarea>
</fieldset>
<p>
<fieldset style="width:53%">
<legend align="left"><strong>TAGS</strong></legend>
<input type="text" id="tags" name="tags" size="100" required="true"/><p>
</fieldset>
<p>
<button id="submit" name="submit">POST</button>

</fieldset>
</form>
</section>

</body>
</html>