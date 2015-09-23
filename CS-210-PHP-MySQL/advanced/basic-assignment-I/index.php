<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coding Dojo | CS-210: PHP &amp; MySQL | 3. Advanced — Basic Assignments</title>
        <link rel="stylesheet" href="style.css">        
    </head>
    <body>
        <div class="row">
        	<h1>PHP Advanced — Basic Assignment I</h1>
        	<h2>Survey Form</h2>
        	<form action="result.php" method="post">
        		<fieldset>
        			<legend>Please fill out the information below.</legend>
        			<label>Your Name: <input type="text" name="name"></label>
        			<label>Dojo Location: 
        				<select name="location">
        					<option>Seattle</option>
        					<option>Silicon Valley</option>
        					<option>Los Angeles</option>
        					<option>Remote</option>
        				</select>	
        			</label>
        			<label>Favorite Language: 
        				<select name="favorite_language">
        					<option>Javascript</option>
        					<option>PHP</option>
        					<option>Python</option>
        				</select>	
        			</label>
        			<label class="vertical-align-top">Comment (optional): 
        				<textarea class="vertical-align-top" name="comment"></textarea>
        			</label>	
        			<button type="submit">Submit</button>
        		</fieldset>
        	</form>	
        </div>	
    </body>
</html>