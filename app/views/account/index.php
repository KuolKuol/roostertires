<div>
    <?php if($_SESSION['is_logged_in']): ?>
        <h1>Welcome <?php echo $_SESSION['user_data']['first_name']; ?></h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <a href="<?php echo ROOT_URL?>users/posts">View Your Posts</a>
    <?php endif;?>
	

</div>