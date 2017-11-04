<?php

/* 
 * Template Class
 * Creates a template/view object that allows you to pass data to a template.
 */
 
 class Template {
 	
	//Path to template
	protected $template;
	//Variables passed in
	protected $vars = array();
	
	//Class Constructor
	public function __Construct($template) {
		
		$this->template= $template;
		
	}
	
	//Get Template variables Magic Methods set and get.
	
	public function __get ($key) {
		return $this->vars($key);		
	}
	
	// Set template values
	
	public function __set($key, $value) {
		$this->vars[$key] =$value;
		
	}
	
	//Convert Object to String
	
	public function __toString() {
		extract($this->vars);
		chdir(dirname($this->template));
		ob_start();  //Turn on output buffering
		
		include basename($this->template);
		
		return ob_get_clean();
		
	}
	
 }  //Template class end
