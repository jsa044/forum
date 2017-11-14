<?php require('core/init.php');  ?>

<?php
    //Create (instantiate) Topic object 
    $topic = new Topic;
 
    //Get Template and Assign variables
    
    $template = new Template('templates/frontpage.php');
	
	// Assign vars
	
	$template->topics= $topic->getAllTopics();
	
	
	

    echo $template;   // Can do this because  used the magic method to_string to convert an object to a string.

