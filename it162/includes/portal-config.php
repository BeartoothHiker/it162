<?php

/*
portal-config.php
Used to store all of our WEB120 configuration information
*/

//prevents data from being sent early - if we do enable output buffering, do so before outputing anything
//ob_start();

// Timezone
date_default_timezone_set('America/Los_Angeles');

// Define 'THIS_PAGE' (not of this file, but INCLUDING file)
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Jeremy";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

$pagename_base = "Jeremy's IT162 ";
$logo_color = ''; // Not *ALL* pages will have custom logo color, so declare it here (instead of default case)

switch(THIS_PAGE){

  case 'index.php':
    $title = "Title Page";
    $logo = 'fa-home';
    $PageID = 'Welcome';
    break;
  
  case 'aia.php':
    $title = "Project AIA (Client work)";
    $logo = "fa-universal-access";
    //TODO $PageID
    $logo_color = ' style="color:#00f"';
    break;

  case 'contactme.php':
    $title = "Contact Page";
    $logo = "fa-paper-plane-o";
    $PageID = 'Contact Jeremy';
    $logo_color = ' style="color:#0f0"';
    break;

  default:
    $title = THIS_PAGE;
    $logo = ''; //no icon by default 
    $PageID = 'Welcome';
}
$title = $pagename_base . $title;

// Note: not closing tag here helps prevent need for 'ob_start()'.
// Closing tag is only required if HTML tags appear after PHP