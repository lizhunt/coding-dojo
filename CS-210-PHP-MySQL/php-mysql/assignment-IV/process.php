<?php 
session_start();
require_once('new-connection.php');

// $query = "INSERT INTO emails (email, created_at, updated_at)
//           VALUES('{$_POST['email']}', NOW(), NOW())";

if(isset($_POST['action']) && $_POST['action'] == 'register') {

	register_user($_POST); // Use the actual $_POST variable here with the register_user function detailed below

} elseif(isset($_POST['action']) && $_POST['action'] == 'login') {
	
	login_user($_POST); // Use the actual $_POST variable here with the login_user function detailed below

} else {

	session_destroy();
	header('location: register-login.php');
	die();

}

// Function for registering a new user
function register_user($post) {

	/// ---- BEGIN VALIDATION CHECKS ---- ///
	
	$_SESSION['errors'] = array();
	
	if(empty($post['first_name'])) { // Throw an error is the first_name field is blank
		$_SESSION['errors'][] = "Oops! Your <strong>first name</strong> can't be blank!";
	}
	if(empty($post['last_name'])) { // Throw an error is the first_name field is blank
		$_SESSION['errors'][] = "Oops! Your <strong>last name</strong> can't be blank!";
	}
	if(empty($post['password'])) {
		$_SESSION['errors'][] = "You'll need to <strong>enter a password</strong> to secure your account.";
	}
	if($post['password'] !== $post['confirm_password']) { // Throw an error if the passwords don't match
		$_SESSION['errors'][] = "Hmm, it looks like your <strong>passwords don't match up</strong> — and they should!";
	}
	if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
		$_SESSION['errors'][] = "It looks like <strong>you haven't entered a valid email address</strong>. Try again?";
	}
	
	/// ---- END OF VALIDATION CHECKS ---- ///

	if(count($_SESSION['errors']) > 0) { // If there are errors, throw them (should already be on the form's page)

		header('location: register-login.php');
		die();

	} else { // Otherwise, if it's succssful, insert the data into the database
		$query = "INSERT INTO users (first_name, last_name, password, email, created_at, updated_at)
				  VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['password']}', '{$post['email']}', NOW(), NOW())";
		
		run_mysql_query($query);
		$_SESSION['success_message'] = "Well, look at that! A user was successfully registered!";
		header('location: register-login.php');
		die();

	}

}
function login_user($post) {

	$query = "SELECT * FROM users WHERE users.password = '{$post['password']}' 
			  AND users.email = '{$post['email']}'";

	$user = fetch($query);	// Grab user with above credentials
	
	if(count($user) > 0) {

		$_SESSION['user_id'] = $user[0]['id'];
		$_SESSION['first_name'] = $user[0]['first_name'];
		$_SESSION['logged_in'] = TRUE;

		header('location: index.php');

		//var_dump($user);

	} else {
		
		$_SESSION['errors'][] = "Sorry! We can't seem to find a user with those credentials. ";
		header('location: register-login.php');
		die();
	}	  

	// echo $query;
	// die();		  

}	

?>