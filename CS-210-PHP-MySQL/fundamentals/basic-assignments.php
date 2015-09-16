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
		<h3></h3>
		<p></p>
		<h4>Answer:</h4>
<pre>
<code>
</code>
</pre>
	</div>

	<!-- Basic Assignment III -->
	<div class="row">
		<h2>Basic Assignment III</h2>
		<h3></h3>
		<p></p>
		<h4>Answer:</h4>
<pre>
<code>
</code>
</pre>
	</div>

	<!-- Basic Assignment II -->
	<div class="row">
		<h2>Basic Assignment II</h2>
		<h3></h3>
		<p></p>
		<h4>Answer:</h4>
<pre>
<code>
</code>
</pre>
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
</code>
</pre>
	</div>	

</body>
</html>