<html>
<head>
	<title>Vanilla OOPHP MVC</title>
  <link rel="stylesheet" href="<?php echo ROOT_URL;?>public/css/main.css">
  <link rel="shortcut icon" href="<?php echo ROOT_URL;?>public/images/favicon.png" type="image/png">
</head>
<body>
  

	<header>
    <nav>
      <ul>
        <li><a href="<?php echo ROOT_URL; ?>">Home</a></li> 
        <li><a href="<?php echo ROOT_URL; ?>about">About</a></li>
        <li><a href="<?php echo ROOT_URL; ?>contact">Contact</a></li>
        <li><a href="<?php echo ROOT_URL; ?>pagenotfound">pagenotfound</a></li>
        <li><a href="<?php echo ROOT_URL; ?>shop">shop</a></li>
        <li><a href="<?php echo ROOT_URL; ?>sponsorship">sponsorship</a></li>
          <ul>
            <li><a href="<?php echo ROOT_URL; ?>sponsorship/application">application</a></li>
            <li><a href="<?php echo ROOT_URL; ?>sponsorship/roosters">roosters</a></li>
          </ul>
        <?php if(isset($_SESSION['is_logged_in'])): ?>
          <li><a href="<?php echo ROOT_URL; ?>users">View Applications</a></li>
          <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
        <?php else: ?>
          <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
          <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
    
  <main>
    <?php Message::displayMessage(); ?>
    <?php require($view); ?>
  </main>

</body>
</html>