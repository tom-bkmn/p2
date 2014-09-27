<?php
	/*
	 * on submitt,
	 *	1. Read the contents of the dictionary, put in a numerically indexed array.
	 *	2. Loop for the number supplied by user.
	 *	3. Randomly generated number, use as index for dictionary
	 *	4. Concatenate variable with dictionary term
	 *	5. Append hyphen.
	 *	7. If check box for number, append number
	 *	8. If check box for character, append character.
	 *	9. Return it.
	 */
	 
	 $filename = "mit.word.list.txt";
	 $wordList = file ($filename, FILE_IGNORE_NEW_LINES); 
	 
	 print_r ($_POST["numberOfWords"] . "loop this many times" . "<br />");
	 
	 for ($i = 1; $i <= $_POST["numberOfWords"]; $i++) {
	     echo $i . "<br />";
	 }
	 
	 
	// foreach ($_POST as $key => $value){
        //	echo $key . ":" . $value . "<br />";	
        // }

	 $randVal = rand (0 , 10000 );	 
 


	//print_r($_POST);
//	print_r($_GET);
	
	
        


        
        function getImage() {

	}
	
	
	function getClassName(){
	$tjb = [
           "e1" => "val1",
           "e2" => "val2",
           "e3" => "val3",
           "e4" => "val4",
        ];

	}
	

		
?>