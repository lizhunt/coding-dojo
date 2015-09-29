<?php 

session_start();
	
$errors = array();


if(isset($_POST['email'])) {
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors[] = "<p class='error'>The email address you provided isn't valid. Try again?</p>";
	} elseif(empty($_POST['email'])) {
		$errors[] = "<p class='error'>Please enter an email address.</p>";
	}
}
if(isset($_POST['first_name'])) {
	if(is_numeric($_POST['first_name'])) {
		$errors[] = "<p class='error'>Please enter a first name without numbers or symbols. Learn more about <a href='#'>why we require this</a>.</p>";
	} elseif(empty($_POST['first_name'])) {
		$errors[] = "<p class='error'>Please enter your first name.</p>";
	}
}
if(isset($_POST['last_name'])) {
	if(is_numeric($_POST['last_name'])) {
		$errors[] = "<p class='error'>Please enter a last name without numbers or symbols. Learn more about <a href='#'>why we require this</a>.</p>";
	} elseif(empty($_POST['last_name'])) {
		$errors[] = "<p class='error'>Please enter your last name.</p>";
	}
}
if(isset($_POST['password'])) {
	if(strlen($_POST['password']) < 6) {
		$errors[] = "<p class='error'>Please enter a password greater than 6 characters. See our tips on password security <a href='#'>here</a>.</p>";
	} elseif(empty($_POST['password'])) {
		$errors[] = "<p class='error'>Please enter a password.</p>";
	} 
}
if(isset($_POST['confirm_password'])) {	
	if(strlen($_POST['confirm_password']) != strlen($_POST['password'])) {
		$errors[] = "<p class='error'>Your password lengths don't match.</p>";
	} elseif(empty($_POST['confirm_password'])) {
		$errors[] = "<p class='error'>Please confirm your password.</p>";
	}
}

if(isset($_POST['profile_picture'])) {

	// Code Snippet from http://www.w3schools.com/php/php_file_upload.asp

	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES['profile_picture']['name']);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
   	$check = getimagesize($_FILES['profile_picture']['tmp_name']);
	

   	// Check if image file is a actual image or fake image

   	if($check !== FALSE) {
       	$errors[] = "<p>Your file is an image: " . $check['mime'] . ".</p>";
       	$uploadOk = 1;
	} else {
	    $errors[] = "<p class='error'>The file you uploaded isn't an image. Try again?</p>";
	    $uploadOk = 0;
	}

}

if(!empty($errors)) {
	$_SESSION['errors'] = $errors;
	header('Location: index.php');
	exit();
} else {
	$_SESSION['success'] = "Thanks for registering with MyFaceSpace!";
	header('Location: thank-you.php');
	exit();
}

?>