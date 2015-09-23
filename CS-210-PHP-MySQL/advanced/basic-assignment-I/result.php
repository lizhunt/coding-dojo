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
		<div class="row first">
			<h2>Submitted Information</h2>	
			<table id="results">
				<tr>
					<td class="text-align-right"><strong>Name:</strong></td>
					<td> <?php echo $_POST['name']; ?></td>
				</tr>
				<tr>
					<td class="text-align-right"><strong>Dojo Location:</strong></td>
					<td> <?php echo $_POST['location']; ?></td>
				</tr>
				<tr>
					<td class="text-align-right"><strong>Favorite Laguage:</strong></td>
					<td> <?php echo $_POST['favorite_language']; ?></td>
				</tr>
				<tr>
					<td class="text-align-right"><strong>Comment:</strong></td>
					<td> <?php echo $_POST['comment']; ?></td>
				</tr>	
			</table>
		</div>	
	</body>
</html>