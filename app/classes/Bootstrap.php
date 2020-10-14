<?php
/**
 * 
 * Summary
 * Class used for starting application up
 * 
 * Description
 * The Boostrap class returns a controller to be run based on the current URL of the user
 * 
*/

class Bootstrap{

	/**
	 * @var string $controller: First url parameter.
	*/

	private $controller;

	/**
	 * @var string $action: Second url parameter.
	*/
	
	private $action;
	
	/**
	 * @var array $request: Stores the current controller, action and id passed to it by the URL parameters.
	*/
	
	private $request;

	/**
	 * @var int $id Stores the value of the third URL parameter
	 */

	private $id;


	/**
	 * 
	 * Summary
	 * Bootstrap classes constructor method 
	 * 
	 * Description
	 * Assigns the controller and action private variables based on the request
	 * 
	 * @param array $request: Stores the current controller, action and id based on the URL path
	 * 
	 */

	public function __construct($request){
		
		/**
		 * Assigns request to declared private varialbe
		 */

		$this->request = $request;

		/**
		 * Check if there is a URL parameter
		 */

		if($this->request['controller'] == ""){
			
			/**
			 * Assign controller to home controller
			 */

			$this->controller = 'home';

		} else {
			
			/**
			 * Assign controller to the requsted controller
			 */
		
			$this->controller = $this->request['controller'];

		}
		
		/**
		 * Check if there is a second URL parameter
		 */

		if($this->request['action'] == ""){
		
			/**
			 * Set action to index by default
			 */

			$this->action = 'index';

		} else {

			/**
			 * Set action to requsted action
			 */

			$this->action = $this->request['action'];

		}

		/**
		 * Check if there is a third URL parameter
		 */

		if($this->request['id'] == ""){

			/**
			 * Set action to index if the third URL parameter is empty
			 */
			
			$this->id = 'index';

		} else {

			/**
			 * Set action to requsted action
			 */
		
			$this->id = $this->request['id'];

		}

	}

	/**
	 * 
	 * Summary
	 * Controller creation method
	 * 
	 * Description
	 * This function returns a controller object and passes it the action and request based on the URL.
	 * 
	 * @return object returns a new controller object based on the URL
	 * 
	 */

	
	public function createController(){

			/**
			 * Check if controller class exists
			 */

		if(class_exists($this->controller)){
			
			/**
			 * Assign an array with the name of the parent classes of the given class.
			 */
			
			 $parents = class_parents($this->controller);
			 
			/**
			 * Check if class in question extends controller class
			 */

			if(in_array("Controller", $parents)){

				/**
				 * Check if a controller or action method exists within class 
				 */

				if(method_exists($this->controller, $this->action)){
					
					/**
					 * @return object Return a new controller object 
					 * @param string The second parameter in the URL
					 * @param array Stores the controller, action and id based on the URL 
					 */

					return new $this->controller($this->action, $this->request,$this->id);

				} else {

					/**
					 * Summary
					 * Method does not exist
					 * 
					 * Description
					 * Redirects users to the 404 page if there is no corrosponding method to be called 
					 */

					header("Location: ".ROOT_URL.'pagenotfound');

				}
			} else {
				
				/**
				 * Summary 
				 * Base controller does not exist
				 * 
				 * Description
				 * Redirects users to the 404 page if the corrosponding controller does not exist
				 */

				header("Location: ".ROOT_URL.'pagenotfound');

			}
		} else {
		
			/**
			 * Summary
			 * Controller class does not exist
			 * 
			 * Description
			 * Redirects users to the 404 page if corresponding class does not exist
			 */

			header("Location: ".ROOT_URL.'pagenotfound');

		}
	}
}