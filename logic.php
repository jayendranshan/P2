<?php

$CountofWords= "";
$IncludeNumbers = false;
$IncludeSpecialCharacters = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (isset($_POST["number_of_words"])) 
	{
		if($_POST["number_of_words"] < 1 && $_POST["number_of_words"] > 10)
		{
			$ValidateNoofWords = "Please enter value between 0 and 11";
			return;
		}
		else
		{
			$CountofWords = $_POST["number_of_words"];

			echo "Number of words to include is:" . $CountofWords;
		}    
	}
	else
	{  
    	echo "Number of word is not set";
	}

	if (isset($_POST["group1"])) 
	{
		if($_POST["group1"] == 'Yes')
		{
			$IncludeNumbers = true;
		}
		if($IncludeNumbers)
		{
			echo "Should numbers be included:" . $IncludeNumbers;
		}
		
	}

	if (isset($_POST["group2"])) 
	{
		if($_POST["group2"] == "Yes")
		{
			$IncludeSpecialCharacters = true;
		}
		if($IncludeSpecialCharacters)
		{
			echo "Should special characters be included:" . $IncludeSpecialCharacters;
		}

		
	}
}

if($wordlist = file('Wordlist.txt'))
{
	echo "Total number of word available is:" . count($wordlist) ."\n";
	$SelectedWords = "";

	for($i=0;$i<$CountofWords;$i++)
	{
		$randomarrayitem = rand(0,10000);

		echo "Random nos are " . $randomarrayitem ."\n";

		echo "words are:". $wordlist[$randomarrayitem] ."\n";
		$SelectedWords = $SelectedWords.$wordlist[$randomarrayitem];
	}	

	if($IncludeNumbers)
	{
		$SelectedWords = $SelectedWords . rand(0,9);
	}

	if($IncludeSpecialCharacters)
	{
		$SelectedWords = $SelectedWords . "$";
	}
}

?>