<?php require('core/init.php'); ?>

<?php
//Create Topic Object
$topic = new Topic;

//Create User Object
$user = new User;

//Create Validator Object
  $validate = new Validator;

// Check to see if the form was submitted.  Then get post data and put into the data array.  Md5 encrypts passwords.

if(isset($_POST['register'])){
	//Create Data Array
	$data = array();
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] = md5($_POST['password']);
	$data['password2'] = md5($_POST['password2']);
	$data['about'] = $_POST['about'];
	$data['last_activity'] = date("Y-m-d H:i:s");
	/*
	//Upload Avatar Image
	if($user->uploadAvatar()){
		$data['avatar'] = $_FILES["avatar"]["name"];
	}else{
		$data['avatar'] = 'noimage.png';
	}
	
	//Register User
	if($user->register($data)){
		redirect('index.php', 'You are registered and can now log in', 'success');
	} else {
		redirect('index.php', 'Something went wrong with registration', 'error');
	}
}*/

//Get Template & Assign Vars
$template = new Template('templates/register.php');

//Assign Vars

//Display template
echo $template;