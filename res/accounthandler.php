<?php
//print_R($_POST);
if(isset($_POST['submitform'])){
	$username =$_POST['username'];
	$password = $_POST['password'];
	if(file_exists('useraccounts/'.$username.'.txt')){
		header('Refresh: 2; URL=../index.php?p=create&a=exists');
	}
	else{
		$myfile = fopen('useraccounts/'.$username.'.txt', 'w') or die('unable to open file');
		$txt = $password;
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "Yay you have created an account! Redirecting...";
		header('Refresh: 2; URL=../index.php');
	}
}
if(isset($_POST['login']) && !preg_match('/[A-Za-z0-9]\w+/',$_POST['username'])){
	$username =$_POST['username'];
	$password = $_POST['password'];
	
	if(file_exists('useraccounts/'.$username.'.txt')){
		$myfile = fopen('useraccounts/'.$username.'.txt', 'r') or die('does not exist');
		$userpassword = fgets($myfile);
		fclose($myfile);
		if($password == $userpassword){
			echo "Yay you have logged in! Redirecting...";
			header('Refresh: 2; URL=../index.php');
		}
		else{
			header('Refresh: 2; URL=../index.php?p=create&a=bad');
		}
	}
	else{
		header('Refresh: 2; URL=../index.php?p=create&a=bad');
	}
	
}
?>