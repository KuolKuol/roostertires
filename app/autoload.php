<?php

// Include Config
require('app/config.php');

// Classes folder
require('app/classes/Bootstrap.php');
require('app/classes/Controller.php');
require('app/classes/Model.php');
require('app/classes/Message.php');

// Controller folder
require('app/controllers/home.php');
require('app/controllers/about.php');
require('app/controllers/contact.php');
require('app/controllers/shop.php');
require('app/controllers/sponsorship.php');
require('app/controllers/account.php');
require('app/controllers/pagenotfound.php');

// Models folder
require('app/models/post.php');
require('app/models/user.php');
require('app/models/sponsorship.php');
require('app/models/shop.php');