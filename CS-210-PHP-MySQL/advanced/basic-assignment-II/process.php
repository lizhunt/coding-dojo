<?php 

session_start();
$_SESSION = array();

$computer_number = rand(1,100);
$user_number = $_POST['user_number'];

$_SESSION['computer_number'] = $computer_number;
$_SESSION['user_number'] = $user_number;	

header('Location: index.php');
exit();

?>