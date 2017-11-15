<?php

// Get the number of replies per topic

function replyCount($topic_id) {
	
	$db= new Database;
	$db->query('SELECT * FROM replies WHERE topic_id= :topic_id');
	$db->bind(':topic_id', $topic_id);  //Security to prevent sql injections
	//Assign Rows
	
	$rows = $db->resultset();
	//Get Count
	return $db->rowCount();
	
	
}
