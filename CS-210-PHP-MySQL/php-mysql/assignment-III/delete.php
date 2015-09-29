<?php

session_start();
session_unset();
session_destroy();
$_SESSION = array();

echo "The form was cleared and the session was destroyed.";

?>	
