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

function is_active($category) {
	
		if(isset($_GET['category'])) {			
			if($_GET['category'] == $category) {				
				return 'active';				
			} else  {				
				return '';				
			}  // End first else statement			
		} else {			
			if($category == null) {
				return 'active';
			}			
		} //End second else statement
			
}	// End function is_active
				





   