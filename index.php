<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
            "http://www.w3.org/TR/html4/strict.dtd">
<html >
    <head>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
        <title>P2 - XKCD Password Generator</title>
        <link rel="stylesheet" type="text/css" href="p2.css">
        <?php require("logic.php"); ?>
    </head>
    <body >
        <h2>Welcome to the XKCD password generator.</h2>  
        <p>The generator will create passwords for you based on combinations of familiar words.  You can set the maximum number of words to be used in the password.</p>
 <!-- 
     1. Landing page includes a description of your app and what a xkcd password is (assume an unfamiliar audience).
        Form inputs to specify:
     2. How many words to use.
     3. Whether to include a number.
     4. Whether to include a special symbol (for example, @).
 -->
    	<form action="index.php" method="POST">
            <label for='numberOfWords'>Please enter the number of words to use in the password.  Maximum value is allowed in nine.<br>
            <input type="text" maxlength=1 size=1 name='numberOfWords' id='numberOfWords'>
            <br>
            <br>
            <label for='appendANumber'>Would you like to append the password with a randomly generated integer?<br>
            <input type='checkbox' name='appendANumber' id='appendANumber' >
	    <br>
	    <br>            
            <label for='appendACharacter'>Would you like to append the password with the '@' character?<br>
            <input type='checkbox' name='appendACharacter' id='appendACharacter' >
            <br>
            <input type='submit' value="Generate Another!">
        </form>
        
        <h1><?php echo getPassword(); ?></h1>

    </body>
</html>
