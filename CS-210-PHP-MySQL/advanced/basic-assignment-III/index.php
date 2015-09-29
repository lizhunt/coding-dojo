<?php session_start();?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | Advanced, Basic Assignment III</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    	<div class="row first">
    		<h1>Make Money!</h1>
            <h2>Your Gold: <span>
            <?php 
                if(!isset($_SESSION['total_gold_value'])) {
                    echo 0;
                } else {
                    echo $_SESSION['total_gold_value'];
                }    
            ?>
            </span></h2>
        </div>
        <div class="row text-align-center">    
            <!-- Farm -->
            <div id="farm" class="block text-align-center">
                <h3>Farm</h3>
                <p>(earns 10-20 gold pieces)</p>
        		<form action="process.php" method="post">
        			<input type="hidden" name="action" value="entered_farm">
        			<button type='submit'>Find Gold!</button>
        		</form>
            </div>
            <!-- Cave -->
            <div id="cave" class="block text-align-center">
                <h3>Cave</h3>
                <p>(earns 5-10 gold pieces)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="action" value="entered_cave">
                    <button type='submit'>Find Gold!</button>
                </form>
            </div>
            <!-- House -->
            <div id="house" class="block text-align-center">
                <h3>House</h3>
                <p>(earns 2-5 gold pieces)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="action" value="entered_house">
                    <button type='submit'>Find Gold!</button>
                </form>
            </div>
            <!-- Casino -->
            <div id="casino" class="block last text-align-center">
                <h3>Casino</h3>
                <p>(earns or takes 0-50 gold pieces)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="action" value="entered_casino">
                    <button type='submit'>Find Gold!</button>
                </form>
            </div>
    	</div>
        <div class="row clearfix">
            <p>Activities:</p>
            <div id="activities">
                <?php
                    if(!isset($_SESSION['activity'])) {
                        echo "<p>Click a button above to start playing!</p>";
                    } else {
                        foreach($_SESSION['activity'] as $value) {
                            echo $value;
                        }
                    } 
                ?>
            </div>
            <form action='process.php' method='post'>
                <input type='hidden' name='action' value='reset'>
                <button class="float-right" type='submit'>Reset Game</button>
            </form>    
        </div>	
    </body>
</html>
