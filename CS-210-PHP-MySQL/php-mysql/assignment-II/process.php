<?php 
session_start();
require_once('new-connection.php');

$query = "INSERT INTO emails (email, created_at, updated_at)
          VALUES('{$_POST['email']}', NOW(), NOW())";

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$_SESSION['message'] = "<div class='message fail'><p>The email <strong>" . $_POST['email'] . "</strong> is not a well-formed and/or valid address. Please enter a different email, or try again.</p></div>";
	header('Location: home.php');
	exit();
} elseif(run_mysql_query($query)) {
	$_SESSION['message'] = "<div class='message win'><p>The email <strong>" . $_POST['email'] . "</strong> is a well-formed and/or valid address!</p></div>";
	header('Location: success.php');
	exit();
}	

?>