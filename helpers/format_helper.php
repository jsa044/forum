<?php   

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







   