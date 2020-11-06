<div class="banner--top">
    <h1 class="heading">Tires</h1>
</div>  

<div class="p-5 ">

  <div class="row">

  <?php foreach($viewmodel as $item) : ?>
     
    <?php 
        // convert string into an array
        $item['images'] = json_decode($item['images'],true);
    ?>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-2">
      <div class="card ">
      <img class="" src="<?php echo ROOT_URL.'/public/images/'.$item['images'][0]; ?>" width="200px">
    
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted"><?php echo strtoupper($item['series']); ?></h6>

          <h4 class="card-title"><?php echo $item['title']; ?></h4>

          <div class="buy d-flex justify-content-between align-items-center">
             <a href="<?php echo ROOT_URL.'shop/product/'.$item['sku']?>" class="btn btn-dark mt-3 "> Learn More </a>
          </div>
        </div>
      </div>
    </div>

    <?php endforeach; ?>

  </div>

</div>