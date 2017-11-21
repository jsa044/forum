<?php

class Validator {
	// Check required fields
	
	public function isRequired($field_array) {
		
		foreach($field_array as $field) {
			if($_POST[''.$field. ''] == '') {
				return false;
				
			}
			
		} //End of foreach loop
		return true;
		
	}  //End of isRequired function
	
	
	//Validate Email Field
	
	public function  isValidEmail($email) {
		
		if(filter_var($email,  FILTER_VALIDATE_EMAIL)) {
			return true;
		} else {
			return false;
		}
	}
	
	// Check password match
	
	public function passwordsMatch($pw1, $pw2)  {
		if($pw1 == $pw2) {
			return true;
		} else  {
			
			return false;
		}
		
	}
	
}  //End of Validator Class 
