<?php
	 /* This file provides all the processing required to create the 
	  * password.  The length of the password is determined by the user.
	  * The user also has the ability to add simple suffixes to the 
	  * password - an extra non-alphabetic character or a single numerical
	  * digit.
	  *
	  * Bullet proofing:
	  * 1. If number of words for the password is zero, special chars
	  * are not added as there is no password to add them too.  This 
	  * prevents passwords such as '@', or '4' or '5@'.
	  *
	  * 2. Input validation.  The number of words to use for the password
	  * must be entered as an integer.  Any other character produces an 
	  * error message.  The user can use zero or "".  This results in an
	  * empty password.  
	  *
	  * 3. User message.  The code will produce label text,
	  * "Your password is:," for the password.  However, if the password
	  * length is zero, this label will not be printed on the screen.
	  */
	 
	 /* Read all the words in a text file, put them in a numerically indexed array. */
	 $filename = "mit.word.list.txt"; // This word list is from MIT.
	 $wordList = file ($filename, FILE_IGNORE_NEW_LINES); 
	 $password = "";
	 $error_msg = "";
	 $password_msg = "";
	 
	 /* This first check prevents accessing non-existing element in 
	  * $_POST array (UI error) when the form is first processed.
	  */
	 if (isset($_POST["numberOfWords"])) {
	 /* Validation - if the user enters a character other than a number
	  * and the field is not empty set the error message.  
	  * Zero is allowed, however.  
	  */
	     if (! is_numeric($_POST["numberOfWords"]) && $_POST["numberOfWords"] != "" ) {
	         $error_msg = "Please enter only a numeric value in the textbox.";
	     } else {
	     /* Iteration set by the user in the UI.  This loop constructs the password
	      * from words selected at random from the text file.
	      */
	         for ($i = 1; $i <= $_POST["numberOfWords"]; $i++) {
	             $randIndex = rand (0 , 10000 );
	             // prevents first character being '-'.
	             if ($i == 1 ){
	                 $password = $wordList[$randIndex];	     
	             } else {
	                 $password = $password . "-" . $wordList[$randIndex];
	             } 
	         }
	         if ($password != "") {
	             $password_msg = "Your password is: <br />";
	         }
	     }
	  }
	 
	 /* If the user elects to append the password with the number, add the 
	  * number.  The number added is selected at random.
	  */
	 if (isset($_POST["appendANumber"]) && $password != "") {
	     $randNumber = rand (0 , 9 );
	     $password = $password . $randNumber; 
	 }
	 
	 /* If the user elects to append the password with the character, add the 
	  * '@' character.
	  */
	 if (isset($_POST["appendACharacter"]) && $password != "") {
	     $password = $password . '@';
	 }
	 
	 /* Simple function that returns the password or error message if
	  * one was generated.  
	  */
	 function getPassword() {
	     global $password; 
	     global $error_msg;
	     global $password_msg;
	     if ($error_msg != "") {
	     	 return $error_msg;
	     } else {	 
	         return $password_msg . $password;
	     }
	 }	
?>