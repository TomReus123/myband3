<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include('includes/functs.php');

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Me First And The Gimme Gimmes');

// Display template: output html
$templateParser->display('head.tpl');



$action= isset($_GET['action'])?$_GET['action']:'home';

switch($action){
	case "home":
		$page_nr = isset($_GET["page_nr"])?$_GET["page_nr"]:1;

		//display template: menu
		$templateParser->display('menu.tpl');
		
		// Get newsarticles from database
		include('model/select_newsarticles.php');
		
		$templateParser->assign("result", $result);
		
		//calculate total number of articles
		include("model/get_nr_newsarticles.php");
		
		$nr_pages = $total_number_articles/NR_ITEMS_PER_PAGE; //zelf uitrekenen mbv $total_number_articles
		$templateParser->assign("nr_pages", $nr_pages);
		$templateParser->display("newsarticles.tpl");
	break;
	case "about":
		$templateParser->display('menu3.tpl');
		
		// Get schema from database
		include('model/select_about.php');
		
		$templateParser->assign("result", $result);

		$templateParser->display('about.tpl');
	break;
	case "schema":
		//display template: menu
		$templateParser->display('menu2.tpl');
	
		// Get schema from database
		include('model/select_schema.php');
		
		$templateParser->assign("result", $result);
		$templateParser->display('schema.tpl');
	break;
	case "cocktails":
		//display template: menu
		$templateParser->display('menu4.tpl');
		
		$templateParser->display('cocktails.tpl');
	break;
}

$templateParser->display('footer.tpl');