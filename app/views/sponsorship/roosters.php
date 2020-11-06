<div class="banner--top">
    <h1 class="heading">Roosters</h1>
</div>    
<div class="riders">
    <?php foreach($viewmodel as $item) : ?>
            <div class="rider">
                <div class="rider-image">
                    <img src="<?php echo ROOT_URL; ?>public/images/roosters/<?php echo $item['image_url']; ?>" alt="" srcset="">
                </div>
                <div class="rider-description">
                    <div class="info">
                        <span class="number"><?php echo $item['bike_number']; ?></span>
                        <span class="name"><?php echo $item['first_name'].' '.$item['last_name']; ?></span>
                    </div>
                    <div class="class"><?php echo $item['class']; ?></div>
                </div>
            </div>
    <?php endforeach; ?>
</div>