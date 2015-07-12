<?php 

// CHANGE - URLFOR REPO - and in /vendor/CommonAccord/cmacc/libary/cmacc_helpers.php - edit titles etc.
// 

DEFINE('ROOT' ,dirname(__FILE__) ); // Root directory of site

DEFINE('LIB_PATH', ROOT . '/vendor/CommonAccord/cmacc/library'); // Create global variable to our library	
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . LIB_PATH . DIRECTORY_SEPARATOR);	// Include it in PHP include/require search

DEFINE('ASSETS_PATH', 'visual');  // Create global variable to our css and js assets

DEFINE('URLFORREPO', 'https://github.com/CommonAccord/Site-Org/');	// The repo home

DEFINE('URLFORDOCSINREPO', URLFORREPO . "/blob/master/Doc/");	// Docs in the repo

DEFINE('TEXTEDITWINDOWSIZE', 'cols=120 rows=30'); //Sets the size of the text edit window in both edit.php and openedit.php

DEFINE('TEXTEDITAREASTYLE', 'font-size: 16px; padding:10px;'); //Sets the size of the text edit window in both edit.php and openedit.php

include("cmacc_helpers.php");

?>