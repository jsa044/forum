<?php

function replyCount() {
	
	$db= new Database;
	$db->query('SELECT * FROM replies WHERE topic_id= :topic_id');
	$db->bind(':topic_id', $topic_id);
	//Assign Rows
	
	$rows = $db->resultset();
	//Get Count
	return $db->rowCount();
	
	
}
