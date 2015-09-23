<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | Advanced, Basic Assignment II</title>
        <link rel="stylesheet" href="style.css">
        <!-- <link rel="author" href="humans.txt"> -->
    </head>
    <body>
    	<div class="row first text-align-center">
    		<h1>Welcome to the Great Numbers Game!</h1>
    		<h2>I'm thinking of a number between 1 and 100.</h2>
    		<!-- <h3>Take a guess!</h3> -->
    		<?php 
    			if(isset($_SESSION['user_number']) && $_SESSION['user_number'] < $_SESSION['computer_number']) {
    				echo "<p>You were thinking of the number <strong>" . $_SESSION['user_number'] . "</strong>. That's ...</p>
    				<div class='box low'><h4>Too low!</h4></div>";
    			} elseif(isset($_SESSION['user_number']) && $_SESSION['user_number'] > $_SESSION['computer_number']) {
    				echo "<p>You were thinking of the number <strong>" . $_SESSION['user_number'] . "</strong>. That's ...</p>
    				<div class='box high'><h4>Too high!</h4></div>";
    			} else {
    				echo "<p>You were thinking of the number <strong>" . $_SESSION['user_number'] . "</strong>.</p>
    				<div class='box exact'><h4> " . $_SESSION['computer_number'] . " was the number!</h4>
    				<button type='submit'>Play again!</button></div>";
    			}
				
    		?>
    		<form action="process.php" method="post">
    			<!-- <input type="hidden" name="action" value="guess_field"> -->
    			<input type="text" name="user_number">
    			<button type='submit'>Submit</button>
    		</form>
    		<?php var_dump($_SESSION); ?> 
    	</div>	
    </body>
</html>
