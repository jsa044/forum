<?php require('core/init.php');  ?>

<?php 

    $topic = new Topic;
	
	//Get category from URL
	
	$category = isset($_GET['category']) ? $_GET['category'] : null;

    //Get Template and Assign variables
    
    $template = new Template('templates/topics.php');
	
	// Assign vars
	
	$template->topics= $topic->getAllTopics();
	$template->totalTopics= $topic->getTotalTopics();
	$template->totalCategories= $topic->getTotalcategories();
	
	

    echo $template;   // Can do this because  used the magic method to_string to convert an object to a string.