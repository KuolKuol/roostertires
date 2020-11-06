<?php

/**
 * 
 * Summary
 * Abstract class to be extended by all controllers
 * 
 * Description
 * This class executes actions based on the action parameter and assigns a view to a controller
 * 
*/

abstract class Controller{
	
	/**
	 * @var string $request Stores the applications url information including the controller, action and id
	 */
	
	 protected $request;
	
	/**
	 * @var string $action Stores the applications URl second parameter
	 */

	protected $action;

	/**
	 * @var string $id Stores the applications third parameter
	 */

	protected $id;


	/**
	 * @param string $action
	 * @param array $request
	 */
	
	 
	public function __construct($action,$request,$id){
		
		/**
		 * Set action and request
		 */
		$this->action = $action;
		$this->request = $request;
		$this->id = $id;
	
	}

	/**
	 * Execute method associated with action
	 */

	public function executeAction(){
		
		return $this->{$this->action}($this->id);	
		
	}

	/**
	 * assign view to controller 
	 * @param object $viewmodel Pass values to views
	 */

	protected function returnView($viewmodel, $fullview){
		
		// converted to lower because views file names are in lower case
		$view = strtolower('app/views/'. get_class($this). '/' . $this->action. '.php');
		
		if($fullview){
			
			/**
			 * load main layout file that wraps around website
			 */
			
			require('app/views/main.php');

		} else {
			
			/**
			 * load individual view
			 */

			require($view);
		}
	}
}