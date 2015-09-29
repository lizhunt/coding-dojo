<?php 

session_start();
// $_SESSION = array();

$computer_number = rand(1,100);

if(!isset($_SESSION['computer_number'])) {
	$_SESSION['computer_number'] = $computer_number;
}
if($_POST['action'] == "guess_field") {
	$_SESSION['user_number'] = $_POST['user_number'];
}
elseif($_POST['action'] == "reset") {
	session_unset();
	session_destroy();
	$_SESSION['computer_number'] = $computer_number;
}
else {
	$_SESSION['computer_number'] = $computer_number;
}
// $_SESSION['user_number'] = $user_number;

header('Location: index.php');
exit();

?>