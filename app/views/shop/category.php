<div class="banner--top">
    <h1 class="heading"><?php echo $viewmodel[0]['discipline']; ?> Tires</h1>
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
          <img class="" src="<?php echo ROOT_URL.'/public/images/'.$item['images'][0]; ?>" width="200px" height="273px" alt="Vans">
            <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $item['title']; ?></h6>
              <div class="buy d-flex justify-content-between align-items-center">
                <a href="<?php echo ROOT_URL.'shop/tires/'.$item['sku'];?>/" class="btn btn-dark mt-3 "> Learn More </a>
              </div>
            </div>
          </div>
        </div>

    <?php endforeach; ?>

  </div>

</div>