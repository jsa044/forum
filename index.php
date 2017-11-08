<?php require('core/init.php');  ?>

<?php 
    //Get Template and Assign variables
    
    $template = new Template('templates/frontpage.php');
	
	// Assign vars
	
	//$template->heading = "This is the Template heading";
	
	
	

    echo $template;   // Can do this because  used the magic method to_string to convert an object to a string.

