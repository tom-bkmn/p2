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
        <!-- Load the banner at the top of the page. -->
        <div>
            <img class="bannerLeft" src="images/blueberryHill.Bushes.bannerLeft.jpg" height="200" width="250" alt="photograph of fall colors">
        </div>
        <div class="banner">
            <h1>Tom Beikman</h1>
            <h1>Dynamic Web Applications CSCI - E15 P2 Project</h1>
        </div>
        <!-- Load the graphic on the left hand side of the page -->
    	<div>
    	    <br>
    	    <img class="sideImage" src="images/blueberryHill.Bushes.2.croped.jpg" height="600" width="250" alt="photograph of fall colors">
    	</div>
    	<!-- Description of the site -->
    	<div>
            <h1 class="indent">Welcome to the xkcd password generator.</h1>
            <h3 class="indent">What is an xkcd password? It is a password made of common words connected by hyphens.  For more information about these passwords and xkcd in general see Randall Munroe's sit here: <a href="http://xkcd.com/936/">xkcd</a> </h3>
            <h3 class="indent">The generator will create passwords for you based on combinations of familiar words separated by hyphens.  You can specify the number of words in the password with the text box below.</h3>
        </div>

        <!-- Display the form and UI controls -->
    	<form class="form" action="index.php" method="POST">
    	    <div>
                <label for='numberOfWords'>Please enter the number of words to use in the password.  Maximum value is allowed in nine.</label><br>
                <input type="text" maxlength=1 size=1 name='numberOfWords' id='numberOfWords'>
                <br>
                <br>
                <label for='appendANumber'>Would you like to append the password with a randomly generated integer?</label><br>
                <input type='checkbox' name='appendANumber' id='appendANumber'>
	        <br>
	        <br>            
                <label for='appendACharacter'>Would you like to append the password with the '@' character?</label><br>
                <input type='checkbox' name='appendACharacter' id='appendACharacter'>
                <br>
                <br>
                <input class="button" type='submit' value="Generate Password!">
            </div>
        </form>
        
        <!-- Ideally the password is printed here, but an error message is possible too -->
        <h2 class="indent"><?php echo getPassword(); ?></h2>
        
        <!-- The site validates 4.01 strict with w3.org 
         <p>
            <a href="http://validator.w3.org/check?uri=referer"><img
            src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
        </p>
        -->
    </body>
</html>
