
<?php
error_reporting(0);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Project2 - Password Generato</title>
	<!-- Bootstrap core CSS -->
    <link href="Styles/bootstrap.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="JavaScript/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="Styles/style.css" rel="stylesheet">

	<?php require 'logic.php'; 
	?>
</head>
<body class="backColor">
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
		        <font size="6" color="white">Password Generator</font>
			</div>
		</div>
	</div>
	<br>
	<div class="container">

	<div id="divContent">		
		<form method="POST" action="index.php">
			<div>
				<label>Total No. of words: </label>
				<input type='text'  name='number_of_words' id='number_of_words' value=''> &nbsp;<span><?php echo $ValidateNoofWords;?></span>
				<br><br>
				<label> Include a number: </label>
				<input type="radio" name="group1" value="Yes"> Yes
				<input type="radio" name="group1" value="No" checked> No
				<br><br>
				<label> Include a special character: </label>
				<input type="radio" name="group2" value="Yes"> Yes
				<input type="radio" name="group2" value="No" checked> No
				<br><br>
				<label> Change case?: </label>
				<input type="radio" name="group3" value="UpperCase"> UpperCase
				<input type="radio" name="group3" value="LowerCase"> LowerCase
				<br><br>
				<label> Include a word separator: </label>
				<input type="radio" name="group4" value="Space"> Space
				<input type="radio" name="group4" value="Hyphen"> Hyphen
				<br><br>
				<input type="submit" value="Generate the password" class="btn btn-primary btn-lg btn-block">
				<br><br>
				<label>Generated Password: </label> <br>
				<label class="PwdFont"> <?php echo $SelectedFinalWords;?></label>
			</div>
		</form>
	</div>
	<br>
	<div id="divMessage">
		<br>
		<p><b><u>Password was generated using xkcd model and please see below for more information on xkcd model.</u></b></p>
		<br>
		<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
		</div>	
	</div>
</body>
</html>