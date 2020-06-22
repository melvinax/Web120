<?php
/*
portal-config.php

Used to sotre all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;


//die;

switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Melvina's SCC WEB120 Title Page";
        $logo= 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'contactme.php':
        $title = "Melvina's SCC WEB120 Contact Page";
        $logo= 'fa-pencil-square-o';
        $PageID = 'Contact Melvina';
    break;    
     
   
        
    default:
        $title= THIS_PAGE;
        $logo= 'fa-home';
}



?>