<?php echo "
<div class='main box block'>";
if($_GET['a'] == 'bad'){
		echo "<p name='errortag' id='errortag' style='color:red'>Bad username or password</p>";
	}
echo "<h1>Login</h1>
	<form id='newaccount' name='newaccount' method='post' action='res/accounthandler.php'>
		<p>Username: <input type ='text' name='username' id='username' value='"; 
		if(isset($_GET['u'])){
		$username = $_GET['u'];
			echo  $username;
		}
		echo "'/> </p>
		
		<p>Password: <input type='password' name='password' id='password'/> </p>
		<input type='submit' value='Login' name='login' id='login'/>
	</form>
	</div>";
?>
	
