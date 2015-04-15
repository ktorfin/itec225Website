<?php
//print_R($_POST);
if(isset($_POST['submitform'])){
	$username =$_POST['username'];
	$password = $_POST['password'];
	//checks to see if the username already exists and redirects back to the create 
	//page to let them know it does
	if(file_exists('useraccounts/'.$username.'.txt')){
		header('Refresh: 2; URL=../index.php?p=create&a=exists');
	}
	//if file doesnt exit, create a new one and write password to it
	//redirects to the index
	else{
		if(preg_match('/[A-Za-z0-9]\w+/',$_POST['username']))
		{
			$myfile = fopen('useraccounts/'.$username.'.txt', 'w') or die('unable to open file');
			$txt = $password;
			fwrite($myfile, $txt);
			fclose($myfile);
			echo "Yay you have created an account! Redirecting...";
			header('Refresh: 2; URL=../index.php?p=login&u='.$username.'');
		}
		else{
			header('Refresh: 2; URL=../index.php?p=create&a=bad');
		}
	}
}
//checks if the username being 
if(isset($_POST['login']) && preg_match('/[A-Za-z0-9]\w+/',$_POST['username'])){
	$username =$_POST['username'];
	$password = $_POST['password'];
	if(file_exists('useraccounts/'.$username.'.txt')){
		$myfile = fopen('useraccounts/'.$username.'.txt', 'r') or die('does not exist');
		$userpassword = fgets($myfile);
		fclose($myfile);
		if($password == $userpassword){
			session_start();
			$_SESSION['username'] = $username;
			echo "Yay you have logged in! Redirecting...";
			header('Refresh: 2; URL=../index.php');
		}
		else{
			header('Refresh: 2; URL=../index.php?p=login&a=bad');
		}
	}
	else{
		header('Refresh: 2; URL=../index.php?p=login&a=bad');
	}
	
}
?>