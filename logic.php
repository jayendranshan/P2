<?php

$CountofWords= "";
$IncludeNumbers = false;
$IncludeSpecialCharacters = false;
$SelectedWords = "";
$SelectedFinalWords="";
$ValidateNoofWords = "";
$SpecialCharacters = array('!','@','#','$','%','*');
$randomSpecialCharacter = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (isset($_POST["number_of_words"])) 
	{
		if($_POST["number_of_words"] < 1 || $_POST["number_of_words"] > 10)
		{
			$ValidateNoofWords = "Please enter value between 0 and 11";
			return;
		}
		else
		{
			$CountofWords = $_POST["number_of_words"];

			//echo "Number of words to include is:" . $CountofWords;
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
	}

	if (isset($_POST["group2"])) 
	{
		if($_POST["group2"] == "Yes")
		{
			$IncludeSpecialCharacters = true;
		}		
	}
}

if($wordlist = file('Wordlist.txt'))
{
	//echo "Total number of word available is:" . count($wordlist) ."\n";

	for($i=0;$i<$CountofWords;$i++)
	{
		$randomarrayitem = rand(0,140);

		//echo "Random nos are " . $randomarrayitem ."\n";

		//echo "words are:". $wordlist[$randomarrayitem] ."\n";
		$SelectedWords = $SelectedWords.$wordlist[$randomarrayitem];

		$SelectedFinalWords = str_replace(" ","-", $SelectedWords);
	}	

	if($IncludeNumbers)
	{
		$SelectedFinalWords = $SelectedFinalWords . rand(0,9);
	}

	if($IncludeSpecialCharacters)
	{
		$randomSpecialCharacter = rand(1,6);
		$SelectedFinalWords = $SelectedFinalWords . $SpecialCharacters[$randomSpecialCharacter];
	}
}

?>