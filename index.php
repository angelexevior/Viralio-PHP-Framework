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

//Nothing at the moment

/*
 * Begin with laying out your templating structure
 */
include('templates/template.php');


/*
 * Post processing calculations go here
 */

//Nothing at the moment

/*
 * End of script
 * microtime calculation for performance testing purposes
 */
$finish = microtime(true);
$time = $finish - $start;
//usleep(100);
//Comment out below line to hide the test
//echo '<div style="margin-top:50px;color:yellow;background:silver;padding:5px;">executed in ' . $time . ' seconds</div>';

?>