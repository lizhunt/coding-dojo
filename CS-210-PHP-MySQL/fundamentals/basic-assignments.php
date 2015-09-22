<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coding Dojo | CS-210: PHP &amp; MySQL | 2. Fundamentals — Basic Assignments</title>
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
	<h1>PHP Fundamentals — Basic Assignments</h1>

	<!-- Basic Assignment IV -->
	<div class="row">
		<h2>Basic Assignment IV</h2>
		<h3>Get Min and Max</h3>
		<p>Create a function get_max_and_min() that takes an array of numbers and, then, returns both the minimum and the maximum number from the given array as an associative array. Do not use the PHP function max() or min() to get this to work. See if you can do this using arrays and for loops.</p>
		<h4>Answer:</h4>
<pre>
<code>
	$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02); 

	function get_max_and_min($array) {

		$min = 9999999;
		$max = 0;

		foreach($array as $value){
		    if($min &gt; $value) {
		        $min = $value;
		        $array[] = $min;

		    }
		    if($max &lt; $value) {
		    	$max = $value;
		    	$array[] = $max;
		    }
		}

		$new_array = array("min" =&gt; $min, "max" => $max);
		return $new_array;	

	}

	$output = get_max_and_min(); 
	var_dump($output); 
</code>
</pre>
		<?php

			$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02); 

			function get_max_and_min($array) {

				$min = 9999999;
				$max = 0;

				foreach($array as $value){
				    if($min > $value) {
				        $min = $value;
				        $array[] = $min;
				    }
				    if($max < $value) {
				    	$max = $value;
				    	$array[] = $max;
				    }
				}

				$array = array("min" => $min, "max" => $max);
				return $array;	


			}

			$output = get_max_and_min($sample); 
			var_dump($output); 
			//$output should be equal to array('max' => 332, 'min' => 1.02);

		?>
	</div>

	<!-- Basic Assignment III -->
	<div class="row">
		<h2>Basic Assignment III</h2>
		<h3>Coin Throw</h3>
		<p>You're going to create a program that simulates throwing a coin 5,000 times. Your program should display how many times the head/tail appears.</p>
		<p>Sample output should be like the following:</p>
		<p><strong>Starting the program</strong></p>
		<p>Attempt #1: Throwing a coin... It's a head! ... Got 1 head(s) so far and 0 tail(s) so far</p>
		<p>Attempt #2: Throwing a coin... It's a head! ... Got 2 head(s) so far and 0 tail(s) so far</p>
		<p>Attempt #3: Throwing a coin... It's a tail! ... Got 2 head(s) so far and 1 tail(s) so far</p>
		<p>Attempt #4: Throwing a coin... It's a head! ... Got 3 head(s) so far and 1 tail(s) so far</p>
		<p>........</p>
		<p>Attempt #5000: Throwing a coin... It's a head! ... Got 2412 head(s) so far and 2588 tail(s) so far</p>
		<p><strong>Ending the program - thank you!</strong><p>
		<h4>Answer:</h4>
<pre>
<code>
	// 1. Define variables to count heads and tails values
	$heads_count = 0;
	$tails_count = 0;


	// 2. Tell the user the program is starting
	echo "&lt;p class='darker'&gt;&lt;strong&gt;Starting the program&lt;/strong&gt;&lt;/p&gt;";

	// 3. Set up a loop to run the program 5,000 times
	for($i=1; $i&lt;=5000; $i++) {

		// 4. Set the value to a random number between 1 and 2
		$value = rand(1,2);
		
		// 5. If the random value is 1, then increment our $heads_count variable and return the $result "heads"
		if($value === 1){
			$heads_count = $heads_count + 1;
			$result = "heads";	
		}
		// 6. If the random value is 2, then increment our $tails_count variable and return the $result "tails" 
		if($value === 2){
			$tails_count = $tails_count + 1;
			$result = "tails";
		}

		// 7. Print out the results of the toss for as long as the loop argument is true
		echo "&lt;p&gt;Attempt #" . $i . ": Tossing a coin ... and it's &lt;span class='darker'&gt;{$result}&lt;/span&gt;! You've tossed &lt;span class='darker'&gt;{$heads_count} heads&lt;/span&gt; and &lt;span class='darker'&gt;{$tails_count} tails&lt;/span&gt; so far.&lt;/p&gt;";

	}

	// 8. Tell the user the program has ended, thanks for playing
	echo "&lt;p class='darker'&gt;&lt;strong&gt;Ending the program. Thanks for playing!&lt;/strong&gt;&lt;/p&gt;";	
</code>
</pre>
	</div>

	<!-- Basic Assignment II -->
	<div class="row">
		<h2>Basic Assignment II</h2>
		<h3>States Arrays</h3>
		<p>You have an array called $states that has the following information:</p>
<pre>
<code>
	$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
</code>
</pre>	
		<p>Display a dropdown menu in HTML (using select tag and option tag) that displays the different states. Create this dropdown menu using for loops. Create another identical dropdown menu but, this time, use foreach statement.</p>
		<p>Once you're done with above exercise, insert three new states in the array $states: 'NJ', 'NY', 'DE'. Display a new dropdown menu with the eight (8) states.</p>	
		<p>Your output should have three dropdown menus.</p>
		<h4>Answer:</h4>
		
		<?php

			// Define a variable that stores an array of American states

			$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

			// Define a function to that creates a <select> menu and iterates through the $states array, rendering each state inside the <option> tag	

			function print_dropdown_menu($state_list) {

				echo "<select>";

				foreach($state_list as $value) {
					echo "<option>{$value}</option>";
				}

				echo "</select>";

			}

			// Use a for loop to display the menu a few time —— not sure why a for loop is even needed in this excercise, so I did it differently that what was requested
			
			for($i=0; $i<=1; $i++) {
				$var = print_dropdown_menu($states);
				echo $var;
			}	

			// Update the $states by adding some new states to the array

			array_push($states, 'NJ', 'NY', 'DE');

			// Print our dropdown menu one more time with the updated values

			print_dropdown_menu($states);


		?>

	</div>

	<!-- Basic Assignment I -->
	<div class="row">
		<h2>Basic Assignment I</h2>
		<h3>Score and Grade</h3>
		<p><span class="darker">int rand(int $min, int $max)</span> is a function in PHP that returns a random integer between $min and $max. For example:</p>
<pre>
<code>
	$number = rand(5,15); 
	echo $number; //displays a random integer between 5-15.
</code>
</pre>
		<p>For more information about the rand function, please see <a href="http://php.net/manual/en/function.rand.php">http://php.net/manual/en/function.rand.php</a></p>
		<p class="darker">This is what you'll do:</p>
		<ol>
			<li>Use a rand() function to generate a random number between 50-100.</li>
			<li>Store the value returned from the above random function to a variable called $score</li>
			<li>Display the following grade depending on the score:
				<ul>
					<li>Score below 70: display the score in h1 tag and display in h2 tag their grade: D
					<li>Score between 70-80: display the score in h1 tag and display in h2 tag their grade: C
					<li>Score between 80-90: display the score in h1 tag and display in h2 tag their grade: B; if someone got 80, give them a B
					<li>Score between 90-100: display the score in h1 tag and display in h2 tag their grade: A; if someone got 90, give them an A
				</ul>
			</li>
		</ol>				
		<p>For example, the output of your code would be something like below:</p>
		<p class="darker">Your Score: 81/100.<br />
		Your grade is B.</p>

		<p><span class="darker">IMPORTANT:</span> After you make this work, use a for loop to generate your score/grade 100 times. In other words, after you run your PHP script, it should display the score and grade 100 times.</p>

		<h4>Answer:</h4>
<pre>
<code>
	// Define a variable as an empty array to store scores once we loop through them
	
	$score = array();

	// Define a function that determines scoring range and the grade associated with it
	
	function grades($score) {

		foreach($score as $value) {

			if($value &gt;= 90 &amp;&amp; $value &lt;= 100) {
				echo "&lt;h3&gt;Your Score: {$value}&lt;/h3&gt;&lt;h4&gt;Your Grade: A&lt;/h4&gt;";
			}
			if($value &gt;= 80 &amp;&amp; $value &lt;= 89) {
				echo "&lt;h3&gt;Your Score: {$value}&lt;/h3&gt;&lt;h4&gt;Your Grade: B&lt;/h4&gt;";
			}
			if($value &gt;= 70 &amp;&amp; $value &lt;= 79) {
				echo "&lt;h3&gt;Your Score: {$value}&lt;/h3&gt;&lt;h4&gt;Your Grade: C&lt;/h4&gt;";
			}
			if($value &lt;= 69) {
				echo "&lt;h3&gt;Your Score: {$value}&lt;/h3&gt;&lt;h4&gt;Your Grade: D&lt;/h4&gt;";
			}


		}

	}

	// Run a loop 100 times that does the following:
	// 1. Defines a variable that generates random numbers
	// 2. Stores those random numbers in our previously empty $score array
	// 3. Calls our grades() function in a new variable to determine the value of the score and assign it a grade
	// 4. Inrement the loop the new $score_listing variable by tying it to the $i variable from the loop
	
	for($i = 0; $i &lt;= 100; $i++) {
		
		$number = rand(50,100);
		$score = array($number);
		$score_listing = grades($score);
	    echo $score_listing[$i];
		
	}
</code>
</pre>
	</div>	

</body>
</html>