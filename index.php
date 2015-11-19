<?php

/*
 * Platform index file
 * This is the beginning of a wonderful peace of coding practice
 * Good luck!!!
 */

/*
 * The following is for performance testing only
 * It finishes at the end of the script and prints out the time taken to execute the whole process
 */
$start = microtime(true);

/*
 * Always start your code with security in mind
 * The following line should be added to ALL include files to avoid direct execution of scripts (My personal favourite hacking attempt)
 * defined( '_SECURED' ) or die( 'Restricted access' );
 */
//This defines the _SECURED variable that is checked in all include files as above
define('_SECURED', 1);

/*
 * Making calculations and setups before execution
 */

//Prepare platform and db connection classes
include('library/classes/platform.php');
$platform = new platform;

/*
if (!$platform->database_connected()) {
    $platform->connect_to_database();
}
 */

//Language Selector
//DEFAULT SET BELOW FOR POST-DEVELOPMENT
    if(isset($_GET["lang"])){
        $lang=$_GET["lang"];
    }else{
        $lang = 'en';
    }
//$platform->translator($lang);

//If there is an action, include a controller with that name
if (isset($_GET['action'])){
    include('controllers/'.$_GET['action'].".php");
}

//If Ajax Request
 else if(isset($_GET['request']) && $_GET['request']=="ajax")
 {
    include('library/ajax.php');
 } else {
    //LOAD THE FRAMEWORK
    require_once 'library/classes/Mobile_Detect.php';
    $detect = new Mobile_Detect;
    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    
    //RESET DEFAULTS
    $appendscript = NULL;
    $appendfile = NULL;
    
    //DETECT PAGE
    $page = new stdClass;
    if(isset($_GET['page'])){
        $page->path = $_GET['page'];
        if(isset($_GET['type'])){
            $page->type = $_GET['type'];
        } else {
            $page->type = 'page';
        }
    } else {
        $page->path = 'default';
    }

    /*
    * Begin with laying out your templating structure
    */
    include('templates/template.php');
}

/*
 * Post processing calculations go here
 */

//Close the database connection
//$platform->database_close();

/*
 * End of script
 * microtime calculation for performance testing purposes
 */
$finish = microtime(true);
$time = $finish - $start;
//usleep(100);
//Comment out below line to hide the test
echo '<div style="margin-top:50px;color:yellow;background:silver;padding:5px;">executed in ' . $time . ' seconds</div>';

?>