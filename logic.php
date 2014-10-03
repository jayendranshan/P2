<?php

$CountofWords= "";
$IncludeNumbers = false;
$IncludeSpecialCharacters = false;
$SelectedWords = array();
$SelectedFinalWords="";
$ValidateNoofWords = "";
$SpecialCharacters = array('!','@','#','$','%','*');
$randomSpecialCharacter = 1;
$ChangeCase="";
$Separator = "";

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

	if (isset($_POST["group3"])) 
	{
		if($_POST["group3"] == "UpperCase")
		{
			$ChangeCase = "UC";

		}
		else if($_POST["group3"] == "LowerCase")	
		{
			$ChangeCase = "LC";
		}
	}
	if (isset($_POST["group4"])) 
	{
		if($_POST["group4"] == "Space")
		{
			$Separator = "Space";

		}
		else if($_POST["group4"] == "Hyphen")	
		{
			$Separator = "Hyphen";
		}
	}
}

if($wordlist = file('Wordlist.txt'))
{
	//echo "Total number of word available is:" . count($wordlist) ."\n";

	//$arrayex = array('one','two','three','four','five','six','seven','eight','nine');
	for($i=0;$i<$CountofWords;$i++)
	{
		$randomarrayitem = rand(0,140);

		//$SelectedWords = $SelectedWords.$wordlist[$randomarrayitem];
		if($Separator == "Space")
		{
			array_push($SelectedWords, $wordlist[$randomarrayitem]);
			$SelectedFinalWords = implode("", $SelectedWords);
		}
		else if($Separator == "Hyphen")
		{
			array_push($SelectedWords, trim($wordlist[$randomarrayitem]));

			$SelectedFinalWords = implode("-", $SelectedWords);
		}
		else
		{
			array_push($SelectedWords, trim($wordlist[$randomarrayitem]));

			$SelectedFinalWords = implode("", $SelectedWords);
		}

		if($ChangeCase == "UC")
		{
			$SelectedFinalWords = strtoupper ($SelectedFinalWords);
		}

		if($ChangeCase == "LC")
		{
			$SelectedFinalWords = strtolower ($SelectedFinalWords);
		}
	}	

	if($IncludeNumbers)
	{
		$SelectedFinalWords = $SelectedFinalWords . rand(0,9);
		//array_push($SelectedWords, rand(0,9));
	}

	if($IncludeSpecialCharacters)
	{
		$randomSpecialCharacter = rand(0,5);
		$SelectedFinalWords = $SelectedFinalWords . $SpecialCharacters[$randomSpecialCharacter];
		//array_push($SelectedWords, $SpecialCharacters[$randomSpecialCharacter]);
	}

	//print_r($SelectedWords);

	//$SelectedFinalWords = implode("", $SelectedWords);

}

?>