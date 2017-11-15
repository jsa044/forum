<?php   
   //Format the Create Date
   
   function formatDate($date) {
   	   $date = date("F j, Y, g:i a", strtotime($date));
	   return $date;	
   }



   //URL Format
   
   function urlFormat()  {
   	
	//strip out all whitespace
	$str= preg_replace('/\s*/', '', $str);
	
	//convert the string to all lowercase
	$str= strtolower($str);
	
	//URL Encode
	$str= urlencode($str);
	return $str;
	
   }







   