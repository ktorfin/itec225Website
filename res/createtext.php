<?php 
echo "	 
 <div class='main box block'>";
	if($_GET['a'] == 'exists'){
		echo "<p name='errortag' id='errortag' style='color:red'>This account already exists</p>";
	}
	if($_GET['a'] == 'bad'){
		echo "<p name='errortag' id='errortag' style='color:red'>You cannot create an account with those characters</p>";
	}
	echo"<h1>Create Account</h1>
	<form id='newaccount' name='newaccount' method='post' action='res/accounthandler.php'>
		<p>Username: <input type ='text' name='username' id='username'/> </p>
		
		<p>Password: <input type='password' name='password' id='password'/> </p>
		<input type='submit' value='Create Account' name='submitform' id='submitform'/>
	</form>
</div>";
?>
	
