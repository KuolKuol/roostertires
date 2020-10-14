<?php Message::displayMessage(); ?>
<div>
	<?php foreach($viewmodel as $item) : ?>
		<div>
			<h3><?php echo $item['title']; ?></h3>
			<small>Publised on: <?php echo $item['price']; ?></small>
			<br>
			<small>Size: <?php echo $item['size']; ?></small>
			<br>
			<small>Size: <?php echo $item['series']; ?></small>
			<br>
			<p><?php echo $item['description']; ?></p>
		</div>
		<hr/>
	<?php endforeach; ?>
</div>