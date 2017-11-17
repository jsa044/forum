<?php include('core/init.php');  

$topic = new Topic;

//Get the id from the URL
$topic_id = $_GET['id'];

 $template = new Template('templates/post.php');
 
 // Assign Vars
 
 $template->topic = $topic->getTopic($topic_id);
 $template->replies = $topic->getReplies($topic_id);
 $template->title = $topic->getTopic($topic_id)->title;
 
 
 //Display template
  echo $template;   
	
	
?>


    
	
	