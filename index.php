
<!DOCTYPE html>
<html>
<head>
	<title>Project2 - Password Generato</title>
</head>
<body>
	<h1>Password Generator using xkcd model</h1>

	<form method="POST" action="logic.php">
		<div>
			<label>Total No. of words</label>
			<input type='text' name='number_of_words' id='number_of_words' value=''>
			<br>
			<label> Include a number in the password</label>
			<input type="radio" name="group1" value="Yes"> Yes
			<input type="radio" name="group1" value="No" checked> No
			<br>
			<label> Include a special character in the password</label>
			<input type="radio" name="group2" value="Yes"> Yes
			<input type="radio" name="group2" value="No" checked> No
		</div>
	</form>
</body>
</html>