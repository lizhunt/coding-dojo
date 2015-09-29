<?php
function testFunction() {
	if(isset($_SESSION['action']) && $_SESSION['action'] == 'reset') {
		session_destroy();
	} else {
		echo "Session should be destroyed.";
	}		
}
?>