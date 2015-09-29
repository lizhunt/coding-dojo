<?php 
session_start();
require_once('new-connection.php');

$query = "INSERT INTO quotes (quote, source, created_at, updated_at)
          VALUES('{$_POST['quote']}','{$_POST['source']}',NOW(),NOW())";

if(empty($_POST['name']) && empty($_POST['source'])) {
	$_SESSION['message'] = "<div class='message fail'><p>Please enter your name and/or a quote.</p></div>";
	header('Location: index.php');
	exit();
} elseif(run_mysql_query($query)) {
	$_SESSION['message'] = "<div class='message win'><p>Thanks for submitting to QuotingDojo!</p></div>";
	header('Location: quotes.php');
	exit();
}	

?>