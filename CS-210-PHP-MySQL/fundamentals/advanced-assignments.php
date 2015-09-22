<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coding Dojo | CS-210: PHP &amp; MySQL | 2. Fundamentals — Advanced Assignments</title>
		<style>
		body {
			background: #eee;
			color: #333;
			font-size: 13px;
		}
		h1, h2, h3, h4 {
			font-family: Georgia, sans-serif;
			font-weight: normal;
		}
		h1 {
			font-size: 3em;
			text-align: center;
			margin-bottom: 2em;
		}
		p, li {
			color: #999;
			font-family: Verdana, Arial, sans-serif;
			line-height: 1.35em;
		}
		button {
			cursor: pointer;
		}
		pre {
			background-color: #fff;
			border: 1px dashed #ccc;
			font-weight: bold;
			margin: 0;
			overflow: auto;
			padding: 0;
			text-align: left;
			width: 99%;
			word-wrap: break-word;
		}
		code {
			margin: 0;
		}
		select {
			margin-right: 10px;
		}
		table {
			margin-bottom: 20px;
		}
		table, th, td {
		    border: 1px solid #999;
		    border-collapse: collapse;
		    font-family: Verdana, sans-serif;
		}
		tr:nth-child(5n) {
			color: #fff;
			background-color: #333;
		}	
		th, td {
		    padding: 10px;
		}
		th, td.row-start {
			font-weight: bold;
		}	

		/* Layout */
		.row {
			border-bottom: 1px solid #ccc;
			margin: 0 auto 20px auto;
			padding: 0 10px 40px 10px;
			width: 960px;
		}
		.column {
			display: inline-block;
			vertical-align: middle;
		}
		.clearfix,
		.clearfix:after {
			clear: both;
			zoom: 1;
		}
		.uppercase {
			text-transform: uppercase;
		}

		/* Main */
		.row.first {
			padding: 20px 10px 80px 10px;
		}
		.row.last {
			border-bottom: 0;
			padding: 20px 10px 120px 10px;
		}	
		.row img {
			display: block;
			margin: 0 auto 10px auto;
		}
		.darker {
			color: #333;
		}

		/* Checkerboard Assignment */
		#checkerboard {
			background-color: red;
			margin-bottom: 20px;
			overflow: hidden;
			height: 400px;
			width: 400px;
		}
		.checkerboard-row,
		.square {
			margin: 0;
			padding: 0;
		}	
		.checkerboard-row {
			clear: both;
		}
		.square {
			float: left;
			height: 50px;
			width: 50px;
		}
		.checkerboard-row:nth-child(odd) .square:nth-child(even),
		.checkerboard-row:nth-child(even) .square:nth-child(odd) {
			background-color: black;
		}
	</style>
</head>	
<body>
	<h1>PHP Fundamentals — Advanced Assignments</h1>
	<!-- Advanced Assignment II -->	
	<div class="row">
		<h2>Advanced Assignment II</h2>
		<h3>Checkerboard</h3>
		<p>Write a program that generates an HTML page that looks like a checkerboard using divs.</p>
		<!-- Static HTML -->
		<!-- <div id="checkerboard">
			<div class="checkerboard-row">
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
			</div>
			<div class="checkerboard-row">
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
			</div>
			<div class="checkerboard-row">
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
			</div>
			<div class="checkerboard-row">
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
			</div>
			<div class="checkerboard-row">
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
			</div>
			<div class="checkerboard-row">
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
			</div>
			<div class="checkerboard-row">
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
			</div>
			<div class="checkerboard-row">
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
			</div>	
		</div>	 -->
		<!-- Dynamic Checkerboard -->
		<div id="checkerboard">
			<?php for($i=0; $i<=8; $i++) { ?>
				<div class="checkerboard-row">
				<?php for($j=0; $j<=7; $j++) { ?>	
					<div class="square"></div>
				<?php } ?>
				</div>
			<?php } ?>
		</div>	
	</div>
	<!-- Advanced Assignment I -->	
	<div class="row">
		<h2>Advanced Assignment I</h2>
		<h3>HTML Table</h3>
		<p>Create a program that outputs a beautiful HTML table like this:</p>
		<table>
			<tr>
				<th>User #</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Full Name</th>
				<th>Full name in uppercase</th>
				<th>Length of full name (without spaces)</th>
			</tr>
			<tr>
				<td class="row-start">1</td>
				<td>Michael</td>
				<td>Choi</td>
				<td>Michael Choi</td>
				<td>MICHAEL CHOI</td>
				<td>11</td>
			</tr>
			<tr>
				<td class="row-start">2</td>
				<td>John</td>
				<td>Supsupin</td>
				<td>John Supsupin</td>
				<td>JOHN SUPSUPIN</td>
				<td>12</td>
			</tr>
			<tr>
				<td class="row-start">3</td>
				<td>Mark</td>
				<td>Guillen</td>
				<td>Mark Guillen</td>
				<td>MARK GUILLEN</td>
				<td>11</td>
			</tr>
		</table>
		<p>Make sure that the length of the name comes out to be 11, 12, 11. Hint: You may need to use a PHP function called trim().</p>
		<p>Also, add 10 more entries to $users array. For every 5th row, highlight the row so that it shows black background with white font color.</p>	
		<h4>Answer:</h4>
		<table>
			<?php

			$users = array( 
				array('first_name' => 'Michael', 'last_name' => 'Choi'),
				array('first_name' => 'John', 'last_name' => 'Supsupin'),
				array('first_name' => 'Mark', 'last_name' => 'Guillen'),
				array('first_name' => 'KB', 'last_name' => 'Tonel'),
				array('first_name' => 'JoAnna', 'last_name' => 'Gavigan'),
				array('first_name' => 'Jesse', 'last_name' => 'Corn'),
				array('first_name' => 'Kim', 'last_name' => 'Sullivan'),
				array('first_name' => 'Brittany', 'last_name' => 'Gonzalez'),
				array('first_name' => 'Torin', 'last_name' => 'Cone'),
				array('first_name' => 'Ralph', 'last_name' => 'Lazaro'),
				array('first_name' => 'Tim', 'last_name' => 'Van De Walle'),
				array('first_name' => 'Rob', 'last_name' => 'Tandy'),
				array('first_name' => 'Will', 'last_name' => 'Dages'),
				array('first_name' => 'Cameron', 'last_name' => 'Wardzala')
			);
			
			?>
			<tr>
				<th>User #</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Full Name</th>
				<th>Full name in uppercase</th>
				<th>Length of full name (without spaces)</th>
			</tr>
			<?php for($i=0; $i < count($users); $i++) { 

				$first_name = $users[$i]["first_name"];
				$last_name = $users[$i]["last_name"];
			
			?>
			<tr>
		    	<td class="row-start"><? echo $i + 1; ?></td>
		    	<td><?php echo $first_name ?></td>
		    	<td><?php echo $last_name ?></td>
		    	<td><?php echo $first_name . " " . $last_name ?></td>
		    	<td class="uppercase"><?php echo $first_name . " " . $last_name ?></td>
		    	<td><?php echo strlen($first_name) + strlen($last_name)?></td>
		    </tr>		
			<?php } ?>
		</table>
		
	</div>		
</body>
</html>