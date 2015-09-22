<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coding Dojo | CS-210: PHP &amp; MySQL | 2. Fundamentals — Intermediate Assignments</title>
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
	</style>
</head>	
<body>
	<h1>PHP Fundamentals — Intermediate Assignments</h1>
	<div class="row">
		<h2>Multiplication Table</h2>
		<p>Create a program that displays a multiplication table that looks like the table below.</p>
		<p><strong>Note: Do not put values to arrays.</strong></p>
		<h3>Static HTML Table</h3>
		<table>
		  <tr>
		  	<th></th>
		    <th>1</th>
		    <th>2</th>
		    <th>3</th>
		    <th>4</th>
		    <th>5</th>
		    <th>6</th>
		    <th>7</th>
		    <th>8</th>
		    <th>9</th>
		  </tr>
		  <tr>
		    <td class="row-start">1</td>
		    <td>1</td>
		    <td>2</td>
		    <td>3</td>
		    <td>4</td>
		    <td>5</td>
		    <td>6</td>
		    <td>7</td>
		    <td>8</td>
		    <td>9</td>
		  </tr>
		  <tr>
		    <td class="row-start">2</td>
		    <td>2</td>
		    <td>4</td>
		    <td>6</td>
		    <td>8</td>
		    <td>10</td>
		    <td>12</td>
		    <td>14</td>
		    <td>16</td>
		    <td>18</td>
		  </tr>
		  <tr>
		    <td class="row-start">3</td>
		    <td>3</td>
		    <td>6</td>
		    <td>9</td>
		    <td>12</td>
		    <td>15</td>
		    <td>18</td>
		    <td>21</td>
		    <td>24</td>
		    <td>27</td>
		  </tr>
		  <tr>
		    <td class="row-start">4</td>
		    <td>4</td>
		    <td>8</td>
		    <td>12</td>
		    <td>16</td>
		    <td>20</td>
		    <td>24</td>
		    <td>28</td>
		    <td>32</td>
		    <td>36</td>
		  </tr>
		  <tr>
		    <td class="row-start">5</td>
		    <td>5</td>
		    <td>10</td>
		    <td>15</td>
		    <td>20</td>
		    <td>25</td>
		    <td>30</td>
		    <td>35</td>
		    <td>40</td>
		    <td>45</td>
		  </tr>
		  <tr>
		    <td class="row-start">6</td>
		    <td>6</td>
		    <td>12</td>
		    <td>18</td>
		    <td>24</td>
		    <td>30</td>
		    <td>36</td>
		    <td>42</td>
		    <td>48</td>
		    <td>54</td>
		  </tr>
		  <tr>
		    <td class="row-start">7</td>
		    <td>7</td>
		    <td>14</td>
		    <td>21</td>
		    <td>28</td>
		    <td>35</td>
		    <td>42</td>
		    <td>49</td>
		    <td>56</td>
		    <td>63</td>
		  </tr>
		  <tr>
		    <td class="row-start">8</td>
		    <td>8</td>
		    <td>16</td>
		    <td>24</td>
		    <td>32</td>
		    <td>40</td>
		    <td>48</td>
		    <td>56</td>
		    <td>64</td>
		    <td>72</td>
		  </tr>
		  <tr>
		    <td class="row-start">9</td>
		    <td>9</td>
		    <td>18</td>
		    <td>27</td>
		    <td>36</td>
		    <td>45</td>
		    <td>54</td>
		    <td>63</td>
		    <td>72</td>
		    <td>81</td>
		  </tr>
		</table>
		<p>Display every other row in different background color (make one row in light grey color, the other row in white color). Make the font of the first row larger and make it bold. Similar style for the first column: make the font larger and make it bold.</p>	
		<h3>Table Created With PHP, HTML and CSS</h3>
		<table>
			<tr>
				<td></td>	
			<?php for($i=1; $i<=9; $i++) { ?>
		    	<td class="row-start"><? echo $i ?></td>
			<?php } ?>
			</tr>   
			<!-- Begin Main Loop -->	
			<?php for($i=1; $i<=9; $i++) { ?>
		    	<tr>
		    		<td class="row-start"><? echo $i ?></td>
				<?php for($j=1; $j<=9; $j++) { ?>
		    		<td><?php echo $i * $j ?></td>
				<?php } ?>
		    	</tr>
			<?php } ?>
		</table>
	</div>	
	<div class="row">
		<h2>Draw Stars, Part I</h2>
		<p>Create a function called draw_stars() that takes an array of numbers and echo out  *.</p>
		<h4>Answer:</h4>
		<?php

		$x = array(4,6,1,3,5,7,25);

		function draw_stars($array) {

			$star = "*";

			foreach($array as $value) {
				
				echo $value . ": ";
				
				for($i=0; $i < $value; $i++) {
					echo $star;
				}

				echo "<br />";	

			}

			echo $array;

		}

		draw_stars($x);

		?>
		<h2>Draw Stars, Part I</h2>
		<p>Modify the function above. Allow an array, that contains integers and strings, to be passed to the draw_stars() function. When a string is passed, instead of  displaying *, display the first letter of the string.</p>
		<h4>Answer:</h4>

		<?php

		$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

		// Create a function that takes an array and echos stars for integer values and the first letter of string values

		function draw_stars_and_more($array) {

			$star = "*";

			foreach($array as $value) {
				
				echo $value . ": ";
				
				if(is_int($value)) {
					for($i=0; $i < $value; $i++) {
						echo $star;
					}	
				}
				if(is_string($value)) {

					$value = strtolower($value);
					$length = strlen($value);

					// $first_letter = 
					
					// foreach($length as $letters) {
						for($i=0; $i < $length; $i++) {
							echo $value[0];
						}	
					// }
				}	

				echo "<br />";	

			}

			echo $array;

		}

		draw_stars_and_more($x);

		?>
	</div>		
</body>
</html>