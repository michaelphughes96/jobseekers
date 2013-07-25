<?php
	include "core/init.php";

if(empty($_POST) === false){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) === true || empty($password) === true){
	$errors[] = "you need to enter a username and password";
	} 	elseif(user_exists($username) === false){
	$errors[] = "The username you have entered it not valid";
	} 	elseif(user_active($username === false)){
	$errors[] = "You have not activated your account yet. Check your e-mail";
	}	else{
	$login = login($username, $password);
	if($login === false){
	$errors[] = "That username and password combination is incorrect";
	}	else{
	$_SESSION['user_id'] = $login;
	header('Location: index.php');
// set user session
//redirect the username
		}
}
		print_r($errors);
}

?>