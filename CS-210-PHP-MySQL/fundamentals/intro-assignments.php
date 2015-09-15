<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coding Dojo | CS-210: PHP &amp; MySQL | 1. Overview</title>
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
		p {
			color: #999;
			font-family: Verdana, Arial, sans-serif;
			line-height: 1.25em;
		}
		button {
			cursor: pointer;
		}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		pre {
			background-color: #fff;
			border: 1px dotted #ccc;
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
	<h1>1. PHP Overview &mdash; Fundamentals</h1>

	<!-- Intro VII Assignment -->
	<div class="row">
		<h2>Intro Assignment VII</h2>
		<h3>Understanding Foreach</h3>
		<p>Let's say that $x = [1,3,5,7]</p>
		<p>1. What would be the output of the following codes? Try to guess the output of the code before running it!</p>
<pre>
<code>
	$x = array(1,3,5,7);
	foreach($x as $key => $value)
	{
	  echo $key . " - " . $value ."<br />";
	}
</code>
</pre>
		<p class="darker">Answer:</p>
		<p>0 = 1<br/>1 = 3<br/>2 = 5<br/>3 = 7<br /></p>	
<!-- -->
		<p class="darker"><strong>2. What would be the output of the following codes? Try to guess the output of the codes before running it!</strong></p>
<pre>
<code>
	$x = array(1,3,5,7);
	foreach($x as $value)
	{
	  echo $value ."<br />";
	}
</code>
</pre>
		<p class="darker">Answer:</p>
		<p>1<br/>3<br/>5<br/>7<br /></p>
<!-- -->
		<p class="darker"><strong>Let's now say that $x = [ "hi" => "Dojo", "awesome" => "game" ]</strong></p>
		<p class="darker"><strong>3. What would be the output of the following codes? Try to guess the output of the code before running it!</strong></p>
<pre>
<code>
	$x = array("hi" => "Dojo", "awesome" => "game");
	foreach($x as $key => $value)
	{
	  echo $key . " - " . $value ."<br />";
	}
</code>
</pre>
		<p class="darker">Answer:</p>
		<p>hi = Dojo<br/>awesome = game<br/></p>	
<!-- -->
		<p class="darker"><strong>4. What would be the output of the following codes? Try to guess the output of the code before running it!</strong></p>
<pre>
<code>
	$x = array("hi" => "Dojo", "awesome" => "game");
	foreach($x as $key => $value)
	{
	  echo $value ."<br />";
	}
</code>
</pre>
		<p class="darker">Answer:</p>
		<p>Dojo<br/>game<br/></p>
<!-- -->
		<p class="darker"><strong>5. What would be the output of the following codes? Try to guess the output of the code before running it!</strong></p>
<pre>
<code>
	$x = array("hi" => "Dojo", "awesome" => "game");
	foreach($x as $key => $value)
	{
	  echo $key ."<br />";
	}
</code>
</pre>
		<p class="darker">Answer:</p>
		<p>hi<br/>awesome<br/></p>
<!-- -->
		<p class="darker"><strong>6. Okay. Now let's make it a little bit harder. What would be the output of the following codes?</strong></p>
<pre>
<code>
	$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
	foreach($x as $key => $value)
	{
	  echo "Key is {$key}<br />";
	  echo "var_dumping value";
	  var_dump($value);
	}
</code>
</pre>
		<p class="darker">Answer:</p>
		<?php
			$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
			foreach($x as $key => $value)
			{
			  echo "<p>Key is {$key}<br />";
			  echo "var_dumping value</p>";
			  var_dump($value);
			}
		?>
<!-- -->
		<p class="darker"><strong>7. Now what about this? Again guess the output before running the codes.</strong></p>
<pre>
<code>
	$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
	foreach($x as $value)
	{
	  echo "var_dumping value";
	  var_dump($value);
	}
</code>
</pre>
		<p class="darker">Answer:</p>
		<p>
			<?php
				$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
				foreach($x as $value)
				{
				  echo "<p>var_dumping value</p>";
				  var_dump($value);
				}
			?>
		</p>	
<!-- -->
	<p class="darker"><strong>8. Okay. Now let's make it a even harder. What would be the output of the following codes?</strong></p>
<pre>
<code>
	$x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
	foreach($x as $key => $value)
	{
	  echo "key is {$key}<br />";
	  foreach($value as $key2=>$value2)
	  {
	    echo $key2 ." - " . $value2."<br />";
	  }
	}
</code>
</pre>
		<p class="darker">Answer:</p>
		<p>key is 0<br />
		hi = Dojo<br />
		game = awesome	
		</p>
		<p>key is 1<br />
		dude = fun<br />
		play = what?<br />	
		</p>
		<p>key is 2<br />
		no = way<br/>
		i am = confused<br />	
		</p>	
<!-- -->
		<p class="darker"><strong>9. Now what about this?</strong></p>
<pre>
<code>
	$x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
	foreach($x as $y)
	{
	  foreach($y as $key=>$value)
	  {
	    echo $key ." - " . $value."<br />";
	  }
	}
</code>	
</pre>
		<p class="darker">Answer:</p>
		<p>
		hi = Dojo<br />
		game = awesome<br />
		dude = fun<br />
		play = what?<br />	
		no = way<br/>
		i am = confused<br />	
		</p>		
	</div>

	<!-- Intro VI Assignment -->
	<div class="row">
		<h2>Intro Assignment VI</h2>
		<h3>Display Odd and Even Messages with Loops</h3>
		<p>Create a program that counts from 1 to 2000. As it loops through each number, have your program generate the number and a message telling whether it's odd or even.</p>
<pre>
<code>
	$num = 0; 
	for($i = 1; $i <= 2000; $i++) { 
		if($i % 2 === 0) {
			$even = $num + $i;
			echo "The number is" . " " . $even . " — this is an even number. ";
		} else {
			$odd = $num + $i;
			echo "The number is" . " " . $odd . " — this is an odd number. ";
		}
	}
</code>
</pre>		
	</div>

	<!-- Intro V Assignment -->
	<div class="row">
		<h2>Intro Assignment V</h2>
		<h3>Display Array Values Without Loops</h3>
		<p>Create an array that inclusively contains all odd numbers between 1 to 20,000. Use the var_dump() function at the end to display the array values without using loops.</p>
		<p>
<pre>
<code>
	$numbers = array(); 
	for($i = 0; $i <= 20000; $i++) { 
		if($i % 2 != 0) {
			$numbers[] = $i;
		}
	}
	var_dump($numbers);
</code>
</pre>		
	</div>	

	<!-- Intro IV Assignment -->
	<div class="row">
		<h2>Intro Assignment IV</h2>
		<h3>Print Average of Values in an Array</h3>
		<p>Create a program that prints the average of the values in the array called "numbers". Array "numbers" should have the following values: 1, 2, 5, 10, 255, 3.</p>
		<h4>PHP Code Answer</h4>
<pre>
<code>
	$numbers = array(1,2,5,10,255,3); 
	$average = ceil(array_sum($numbers)/count($numbers));
	echo $average;
</code>
</pre>
	</div>

	<!-- Intro III Assignment -->
	<div class="row">
		<h2>Intro Assignment III</h2>
		<h3>Print Sum of Values in an Array</h3>
		<p>Create a program that prints the sum of all the values in the array "numbers". Your "numbers" array should contain the following values: 1, 2, 5, 10, 255, 3.</p>
		<h4>PHP Code Answer</h4>
<pre>
<code>
	$numbers = array(1,2,5,10,255,3); 
	echo array_sum($numbers);
</code>
</pre>
	</div>
		
	<!-- Intro II Assignment -->
	<div class="row">
		<h2>Intro Assignment II</h2>
		<h3>Print All Multiples of 5 from 5-1,000,000</h3>
		<p>Create a program that prints all the multiples of 5 starting at 5 and going up to 1,000,000.</p>
		<h4>PHP Code Answer</h4>
<pre>
<code>
	$num = 0; 
	for($i = 5; $i <= 100000000; $i++) {
		if($i % 5 === 0) {
			echo $num + $i . " "; 
		}
	}
</code>
</pre>
	</div>

	<!-- Intro I Assignment -->
	<div class="row">
		<h2>Intro Assignment I</h2>
		<h3>Print Odd Numbers from 1-1000</h3>
		<p>Create a program that prints all the odd numbers from 1 to 1000. Use the standard for loop for this exercise and don't create any arrays.</p>
		<h4>PHP Code Answer</h4>
<pre>
<code>
	$num = 0; 
	for($i = 0; $i <= 1000; $i++) { 
		if($i % 2 != 0) {
			echo $num + $i . " "; 
		}
	}
</code>
</pre>
	</div>

</body>
</html>