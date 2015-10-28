<?php 

session_start();
date_default_timezone_set("America/New_York");

$farm_number = rand(10,20);
$cave_number = rand(5,10);
$house_number = rand(2,5);
$casino_number = rand(-50,50);

$timestamp = date("F jS, Y g:i a T");

if(!isset($_SESSION['activity'])) {
	$_SESSION['activity'] = array();
}
if(!isset($_SESSION['total_gold_value'])){
	$_SESSION['total_gold_value'] = 0;
}

if($_POST['action'] == "entered_farm") {
	$_SESSION['gold_submitted'] = $farm_number;
	$_SESSION['date_time_stamp'] = $timestamp;
	$_SESSION['activity'][] = "<p class='gold-earned'>You have entered a <strong>farm</strong> and earned " . $_SESSION['gold_submitted'] . " gold coins. <span>({$timestamp})</span><p>";
	$_SESSION['total_gold_value'] += $farm_number;
}
if($_POST['action'] == "entered_cave") {
	$_SESSION['gold_submitted'] = $cave_number;
	$_SESSION['activity'][] = "<p class='gold-earned'>You have entered a <strong>cave</strong> and earned " . $_SESSION['gold_submitted'] . " gold coins. <span>({$timestamp})</span><p>";
	$_SESSION['total_gold_value'] += $cave_number;
}
if($_POST['action'] == "entered_house") {
	$_SESSION['gold_submitted'] = $house_number;
	$_SESSION['activity'][] = "<p class='gold-earned'>You have entered a <strong>house</strong> and earned " . $_SESSION['gold_submitted'] . " gold coins. <span>({$timestamp})</span><p>";
	$_SESSION['total_gold_value'] += $house_number;
}
if($_POST['action'] == "entered_casino") {
	$_SESSION['gold_submitted'] = $casino_number;
	if($_SESSION['gold_submitted'] > 0) {
		$_SESSION['activity'][] = "<p class='gold-earned'>You have entered a <strong>casino</strong> and earned " . $_SESSION['gold_submitted'] . " gold coins. <span>({$timestamp})</span><p>";
	} else {
		$_SESSION['activity'][] = "<p class='gold-lost'>You have entered a <strong>casino</strong> and lost " . $_SESSION['gold_submitted'] . " gold coins. ...Ouch. <span>({$timestamp})</span><p>";
	}
	$_SESSION['total_gold_value'] += $casino_number;
}
elseif($_POST['action'] == "reset") {
	$this->session->unset_userdata;
	session_destroy();
}	

header('Location: index.php');
exit();

?>