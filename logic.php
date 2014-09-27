<?php
	 /* This file provides all the processing required to create the 
	  * password.  The length of the password is determined by the user.
	  * The user also has the ability to add simple suffixes to the 
	  * password - an extra non-alphabetic character or a single numerical
	  * digit.
	  */
	 
	 /* Read all the words in a text file, put them in a numerically indexed array. */
	 $filename = "mit.word.list.txt";
	 $wordList = file ($filename, FILE_IGNORE_NEW_LINES); 
	 $password = "";
	 
	 /* Iteration set by the user in the UI.  This loop constructs the password
	  *  from words selected at random from the text file.
	  */
	 for ($i = 1; $i <= $_POST["numberOfWords"]; $i++) {
	     $randIndex = rand (0 , 10000 );	
	     if ($i == 1 ){
	         $password = $wordList[$randIndex];	     
	     } else {
	         $password = $password . "-" . $wordList[$randIndex];
	     }
	 }
	 
	 /* If the user elects to append the password with the number, add the 
	  * number.  The number added is selected at random.
	  */
	 if (isset($_POST["appendANumber"])) {
	     $randNumber = rand (0 , 9 );
	     $password = $password . $randNumber; 
	 }
	 
	 /* If the user elects to append the password with the character, add the 
	  * '@' character.
	  */
	 if (isset($_POST["appendACharacter"])) {
	     $password = $password . '@';
	 }
	 
	 /* Simple function that returns the password*/
	 function getPassword() {
	     global $password; 
	     return $password;	 
	 }	
?>