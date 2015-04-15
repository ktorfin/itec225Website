<?php
session_start();
 echo '<!doctype html>
<html>
	<head>';
if($_GET["p"] == 'info' ) {
echo '<title>Information</title>';
}
elseif($_GET["p"] == 'create' ) {
echo '<title>Create Account</title>';
}
elseif($_GET["p"] == 'login' ) {
echo '<title>Login</title>';
}
elseif($_GET["p"] == 'about' ) {
echo '<title>About</title>';
}
else{
echo '<title>Home</title>';
}
   	echo'<!-- We need this to make the page scale to different device screen sizes -->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
    	<!-- Include PocketGrid -->
    	<link rel="stylesheet" href="res/pocketgrid.css"/>
	<link rel="stylesheet" href="res/index.css"/>
	<link rel="stylesheet" href="res/bootstrap-3.3.4-dist/css/bootstrap.css"/>
	</head>
  <body> 
	<div class="block-group">
	  <div class="header box block">
		<div class ="alignleft">				
		<a href="index.php">		
		<h1>ScheduleWizard</h1>
		</a>
		</div>
		<ul class="alignright" id="navlist">
			<a href="index.php"><li>Home</li></a>
			<a href="index.php?p=info"><li>How it Works</li></a>
			<a href="index.php?p=create"><li>Create Account</li></a>';
			if(isset($_SESSION['username'])){
				echo '<a href="res/signout.php"><li>Sign Out</li></a>';
			}
			else{
				echo '<a href="index.php?p=login"><li>Sign In</li></a>';
			}
			echo' <a href="index.php?p=about"><li>About Us</li></a>
		</ul>
		<div style="clear: both;"></div>
	</div>';

if($_GET["p"] == 'info' ) {
include 'res/infotext.php';
}
elseif($_GET["p"] == 'create' ) {
include 'res/createtext.php';
}
elseif($_GET["p"] == 'login' ) {
include 'res/logintext.php';
}
elseif($_GET["p"] == 'about' ) {
include 'res/abouttext.php';
}
else{
echo '<div class="main box block">ScheduleWizard is the world\'s #1 scheduling system. Scheduling for groups under 50 people is free.
	</div>
	<div class="serverpic box block"><img src="img/server.jpg" height="300" width="350">
	</div>
	<div class="quote box block"><h1>"This program is <br><b>literally</b><br> how I run the country"<br> - Barack Obama</h1>
	</div>
	

';
}

echo ' <div class="footer box block">Copyright &#169; 2015 Team Delta</div>
	</div>
 </body>
</html>';

?>
