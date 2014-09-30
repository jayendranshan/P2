
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Project2 - Password Generato</title>

	<?php require 'logic.php'; 
	?>
</head>
<body>
	<h1>Password Generator using xkcd model</h1>

	<?php 
	$ValidateNoofWords = "";
	?>
	<form method="POST" action="index.php">
		<div>
			<label>Total No. of words</label>
			<input type='text' name='number_of_words' id='number_of_words' value=''><span><?php echo $ValidateNoofWords;?></span>
			<br>
			<label> Include a number in the password</label>
			<input type="radio" name="group1" value="Yes"> Yes
			<input type="radio" name="group1" value="No" checked> No
			<br>
			<label> Include a special character in the password</label>
			<input type="radio" name="group2" value="Yes"> Yes
			<input type="radio" name="group2" value="No" checked> No
			<br>
			<br>

			<input type="submit" name="Generate the password">
				<br>
				<br>
			<label>Generated password is: </label> <label><?php echo $SelectedWords;?></label>
		</div>
	</form>


</body>
</html>