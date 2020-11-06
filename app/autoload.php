<?php

// Include Config
require('app/config.php');

// Include 3rd party libraries
require 'vendor/autoload.php';

// Classes folder
require('app/classes/Bootstrap.php');
require('app/classes/Controller.php');
require('app/classes/Model.php');

// Controller folder
require('app/controllers/Home.php');
require('app/controllers/About.php');
require('app/controllers/Contact.php');
require('app/controllers/Shop.php');
require('app/controllers/Sponsorship.php');
require('app/controllers/Application.php');
require('app/controllers/PageNotFound.php');

// Models folder
require('app/models/Post.php');
require('app/models/Sponsorship.php');
require('app/models/Shop.php');
require('app/models/Contact.php');
require('app/models/Application.php');



