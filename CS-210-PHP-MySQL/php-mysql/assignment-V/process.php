<?php 
session_start();

require_once('new-connection.php');

if(isset($_POST['action']) && $_POST['action'] == 'register') {

	register_user($_POST); 

} elseif(isset($_POST['action']) && $_POST['action'] == 'login') {
	
	login_user($_POST); 

} elseif(isset($_POST['action']) && $_POST['action'] == 'post_message') {

	post_message($_POST); 

} elseif(isset($_POST['action']) && $_POST['action'] == 'post_comment') {

	post_comment($_POST); 

}
else {

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
	
	/// ---- END VALIDATION CHECKS ---- ///

	if(count($_SESSION['errors']) > 0) { // If there are errors, throw them (should already be on the form's page)

		header('location: register-login.php');
		die();

	} else { // Otherwise, if it's succssful, insert the data into the database

		global $connection;

		$first_name = mysqli_real_escape_string($connection, $post['first_name']);
		$last_name = mysqli_real_escape_string($connection, $post['last_name']);
		$email = mysqli_real_escape_string($connection, $post['email']);
		$password = mysqli_real_escape_string($connection, $post['password']);
		$salt = bin2hex(openssl_random_pseudo_bytes(22));
		$encrypted_password = md5($password . '' . $salt);

		$query = "INSERT INTO users (first_name, last_name, email, password, salt, created_at, updated_at)
				  VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$encrypted_password}', '{$salt}', NOW(), NOW())";
		
		run_mysql_query($query);

		$_SESSION['success_message'] = "Thanks for registering! Now that you're official, <strong>sign in to The Wall</strong>.";
		header('location: register-login.php');
		
		die();

	}

}

// Function for logging in an existing user
function login_user($post) {

	global $connection;

	$email = mysqli_real_escape_string($connection, $post['email']);
 	$password = mysqli_real_escape_string($connection, $post['password']);
 	$user_query = "SELECT * FROM users WHERE users.email = '{$email}'";
 	$result = mysqli_query($connection, $user_query);
 	$user = mysqli_fetch_assoc($result);

 	// var_dump($user);

 	if(!empty($user)) {
		
		$encrypted_password = md5($password . '' . $user['salt']);
		
		if($user['password'] == $encrypted_password) {

			$_SESSION['user_id'] = $user['id'];
			$_SESSION['first_name'] = $user['first_name'];
			$_SESSION['last_name'] = $user['last_name'];
	   		
	   		header('location: index.php');
	  	
	  	} else { //invalid password!
		
	  		$_SESSION['errors'][] = "Sorry, that password didn't work. Try again?";
	  		
	  		header('location: register-login.php');
			die();

		} 
	 
	 } else {
	  		
	  		$_SESSION['errors'][] = "Sorry, that email didn't work. Try again?";
	  		
	  		header('location: register-login.php');
			die();

	 }	  

}

// If there are errors when trying to post a message, throw them; otherwise, post the message
function post_message($post) {

	/// ---- BEGIN VALIDATION CHECKS ---- ///

	$_SESSION['errors'] = array();

	if(empty($post['message'])) { // Throw an error is the message field is blank
		$_SESSION['errors'][] = "Oops! Looks like you forgot to <strong>type out your mesage</strong>.";
	}

	/// ---- END VALIDATION CHECKS ---- ///

	if(count($_SESSION['errors']) > 0) { // If there are errors, throw them (should already be on the form's page)

		header('location: index.php');
		die();

	} else { // Otherwise, if it's succssful, insert the data into the database

		$query = "INSERT INTO messages (user_id, message, created_at, updated_at)
			      VALUES ('{$_SESSION['user_id']}', '{$post['message']}', NOW(), NOW())";	      		      

		run_mysql_query($query);

		$_SESSION['success_message'] = "Thanks for posting your message!";
		
		header('location: index.php');
		die();

	}

	  
}

// If there are errors when trying to post a comment on a message, throw them; otherwise, post the comment
function post_comment($post) {

	/// ---- BEGIN VALIDATION CHECKS ---- ///

	$_SESSION['errors'] = array();

	if(empty($post['comment'])) { // Throw an error is the message field is blank
		$_SESSION['errors'][] = "Oops! Looks like you forgot to <strong>type out your comment</strong>.";
	}

	/// ---- END VALIDATION CHECKS ---- ///

	if(count($_SESSION['errors']) > 0) { // If there are errors, throw them (should already be on the form's page)

		header('location: index.php');
		die();

	} else { // Otherwise, if it's succssful, insert the data into the database

		$query = "INSERT INTO comments (user_id, message_id, comment, created_at, updated_at)
			      VALUES ('{$_SESSION['user_id']}', '{$post['comment_message_id']}', '{$post['comment']}', NOW(), NOW())";

		run_mysql_query($query);

		$_SESSION['success_message'] = "Thanks for posting your comment!";
		
		header('location: index.php');
		die();

	}
	  
}	

?>