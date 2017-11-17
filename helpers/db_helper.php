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

function getCategories() {
	
	$db=new Database;
	$db->query('SELECT * FROM categories');
	$results= $db->resultset();
	return $results;
	
	
}

/*
 * User Posts
 */
function userPostCount($user_id){
	$db = new Database;
	$db->query('SELECT * FROM topics 
				WHERE user_id = :user_id
				');
	$db->bind(':user_id', $user_id);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	$topic_count = $db->rowCount();
	
	$db->query('SELECT * FROM replies
				WHERE user_id = :user_id
				');
	$db->bind(':user_id', $user_id);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	$reply_count = $db->rowCount();
	//Counts replies and topics as post so adds the two together.
	return $topic_count + $reply_count;
}