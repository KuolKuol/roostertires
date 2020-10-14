<div>
	<?php foreach($viewmodel as $item) : ?>
		<div>
			<h3><?php echo $item['title']; ?></h3>
			<small>Publised on: <?php echo $item['create_date']; ?></small>
			<br>
			<p><?php echo $item['body']; ?></p>
			<a href="<?php echo ROOT_URL.'users/editpost/'.$item['id']; ;?>">edit post</a>
			<a href="<?php echo ROOT_URL.'posts/show/'.$item['id']; ;?>">view post</a>
			<a href="<?php echo ROOT_URL.'users/deletepost/'.$item['id']; ;?>">delete post</a>
		</div>
		<hr/>
	<?php endforeach; ?>
</div>
