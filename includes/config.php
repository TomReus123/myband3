<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

//online versie database
Database settings
define('DB_HOST','localhost');
define('DB_NAME','19830_myband');
define('DB_USERNAME','tom2');
define('DB_PASSWORD','irbvwgui');

//localhost versie database
// define('DB_HOST','localhost');
// define('DB_NAME','ingrid');
// define('DB_USERNAME','root');
// define('DB_PASSWORD','');

define('NR_ITEMS_PER_PAGE',2);
?>
