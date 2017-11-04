<?php
// Start Session
session_start();

// Include configuration
require_once('config/config.php');

require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');


//Autoload Class so that don't have to do multiple requires in libraries directory

function __autoload ($class_name) {
	require_once('libraries/' .$class_name . '.php');
	
}


