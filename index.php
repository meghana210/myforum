<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="mainContentArea">
	<div id="contentBox">
      <?php include ("menu/menu.php");?>
        
        <div id="blueBox"> 
         <!-- <div id="header"></div>-->
          
            <div class="pageContent">
             <form action="logincheck.php" method="POST">
<p><label>User Name : </label>
<input id="username" type="text" name="username" placeholder="username" /></p>
<p><label>Password  : </label>
<input id="password" type="password" name="password" placeholder="password" /></p>
<input id="register" type="submit" name="submit" value="Login" />
</form>
            </div>
            
	</div>
</div>


</body></html>