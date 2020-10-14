<?php
/**
 * 
 * Summary
 * Applications entry point
 * 
 * Description
 * Starting point of application. All code will be loaded into this file
 * 
 * @author Kuol Kuol
 * @version 1.1
 * 
*/

/**
 * creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
 */

session_start();

/**
 * Autoload required classes
 */

require('app/autoload.php');

/**
 * Boostrap Application
 */
 
$bootstrap = new Bootstrap($_GET);

/**
 * Create controller
 */

$controller = $bootstrap->createController();

/**
 * Check if controller exists
 */

if($controller){

	/**
	 * Execute controller if it exists
	 */
	
	$controller->executeAction();

}