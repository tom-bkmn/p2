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
	 $password = "";
	 
	 for ($i = 1; $i <= $_POST["numberOfWords"]; $i++) {
	     $randVal = rand (0 , 10000 );	
	     if ($i == 1 ){
	         $password = $wordList[$randVal];	     
	     } else {
	         $password = $password . "-" . $wordList[$randVal];
	     }
	 }
	 
	// echo "The password is " . $password;
	 
	 function getPassword() {
	     global $password; 
	     return $password;	 
	 }
	 	
?>