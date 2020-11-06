# Rooster Tires

**Written By [Kuol Kuol](https://kuolkuol.com)**  \
[Live Preview of Website](https://roostertires.com/)  \

<img src="https://roostertires.com/public/images/logo.png" data-canonical-src="https://roostertires.com/public/images/logo.png" width="400"/>

## Table Of Contents:

  - [1. Background information](#1-Background-information)
  - [2. How does this application work?](#2-How-does-this-application-work?)
    - [2.1 Overview](#2.1-Overview)
    - [2.2 How the controllers work](#2.2-How-the-controllers-work)
    - [2.3 How the models work](#2.3-How-the-models-work)
    - [2.4 How the views work](#2.4-How-the-views-work)
  - [3. Folder  Structure](#3.-Folder-Structure)
  - [4. Naming conventions](#4.-Naming-conventions)
  - [5. Credits](#5.-Credits)


## **Disclaimers**
1. Database credentials, images, fonts, icons and all other sensitive information have been excluded from this repository for client confidentiality 
2. A Sample MYSQL database named database.sql is included in the root directory

## **Languages & Libraries**

|Language / Library | Version 	|
|------------	|---------	|
| PHP        	| 7       	|
| PHP Mailer 	| 6       	|
| MYSQL 	    | 8       	|
| Javascript 	| ES6     	|
| JQuery     	| 3       	|
| CSS & SASS  | 3       	|
| XZOOM      	| 1        	|


## **1. Background information**

This application follows a Vanilla OOPHP MVC pattern. MVC stands for: 

1. Model: Handles all database tasks (e.g: fetching, inserting and deleting)
2. View: The interface/template the user sees on the front end
3. Controller: Determines what views to return and what methods to run based on the route

## **2. How does this application work?**

### **2.1 Overview**
Everything starts from the index.php file located within the root folder. First things first, all necessary files (e.g. classes, controllers, models, config ...) are autoloaded onto the index.php file by requiring the autoload file in the  app folder. The next thing that happens is that the application is bootstrapped (started up) by creating a new bootstrap object and passing the $_GET super global variable. The $_GET super global is used to collect data sent in the URL, in this case the controller and the action (method). This application uses an HTACCESS rewrite rule that allows us to assign the first parameter to a controller and the second to an action (method) and anything after that will be a parameter within the action (in this case an ID). 


After the Bootstrap class has been extantiated, the application will run the a controller corrosponding to the URL's first parameter. If the controller exists the action with the same name as the second parameter will run. The controller runs two types of functions:

1. Index: Is ran when there is no second parameter. This function should only be named index.
2. Action (multiple functions): Is ran when there is a second parameter. These functions should be named after the second parameter.


### **2.2 How the controllers work**
All controllers have the ability to return a view and access model classes. All controllers have to extend the Controller class and be placed in the controllers folder. 

```
class Home extends Controller{
	protected function Index(){
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);
	}
}
```

### **2.3 How the models work**

In order to access database information a new model that extends the Model class has to be created in the models folder.   
```
class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM posts');
		$rows = $this->resultSet();
		return($rows);
	}

	public function add(){
		echo 'sdcdsc';
	}
}
```
### **2.4 How the views work**

All views are placed in the views directory located within the app folder. Views are determined by the controller and action names. The scripts will look for a file within a folder  with the same name as the corrosponding class and the same and the same name as the action being ran. Views are able to extend the the main layout, the main layout requires a view to be rendered. 

```
URL: https://example.com/users/add
View: ~ROOT/app/views/users/add.php
```

```
add.php

<?php foreach($viewmodel as $item) : ?>
    <h3><?php echo $item['title']; ?></h3>
    <small><?php echo $item['create_date']; ?></small>
    <p><?php echo $item['body']; ?></p>
<?php endforeach; ?>
```

## **3. Folder  Structure**

index.php
- This is the applications entry point. This is where all the magic happens. All scripts and app logic will be loaded onto this page.

/app 
- All of the applications logic will be stored in this folder

    /app/classes
    - all core classes that are to be extended by other classes are to be stored in this folder (e.g: Model, Controller ...)

    /app/controllers
    - Contains all of the applications controllers, all controllers extend the controller class in the classes directory

    /app/classes/models
    - Contains all of the applications models, all models extend the model class in the classes directory

    /app/classes/views  

    /app/autoload.php
    - Contains requires for all essential files (e.g. Controller, config, ...)

    /app/classes/config.php
    - Stores all useful global variabls
    
    /app/autoload.php
    - Contains all files that need to be loaded into the applications
    
    /app/config.php
    - Contains all constants needed to be created (e.g. database credentials, Root URL, ...)

/public 
- All files that need to be web accessible will be stored in this folder (e.g. images, videos, css)

/src
- All original non-compiled source files are to be stored in this folder (e.g. SCSS, Typescript, ...)

## **4. Naming conventions**

1. Classes: All class names are to be in pascal case, including the file name 
2. Functions: All functions/methods are to be in camel case
3. Variables: All variables are to be in camel case


## **5. Credits**
___

1. [Learn Object Oriented PHP By Building a Complete Website](https://www.udemy.com/course/learn-object-oriented-php-by-building-a-complete-website/)
2. [PHP The Right Way](https://phptherightway.com/)
3. [PHP Documentation](https://www.php.net/)
4. [W3SCHOOLS](https://www.w3schools.com/php/DEFAULT.asp)
