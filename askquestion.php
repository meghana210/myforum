<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<script type="text/javascript" src="tinymce/js/jquery.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="tinymce/plugin/tinymce/init-tinymce.js"></script>
	</head>
	<?php
	include("menu/menu.php");

	?>
	<div id="blueBox">
<form>	
  Tittle:<br>
  <input type="textarea" name=" "><br>
  Topic:<br>
  <input type="textarea" name=""><br>
  detail:<br>
 	<textarea class="tinymce"></textarea>
 	<br> <br>
  <input type="button" value="submit" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'your answer.php';" /
</form>
</html>