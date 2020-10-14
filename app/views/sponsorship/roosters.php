<?php Message::displayMessage(); ?>
<h1>Roosters</h1>
<div>
	<?php foreach($viewmodel as $item) : ?>
		<div>
			<h3><?php echo $item['title']; ?></h3>
			<small>Publised on: <?php echo $item['create_date']; ?></small>
			<br>
			<p><?php echo $item['body']; ?></p>
		</div>
	<?php endforeach; ?>
</div>