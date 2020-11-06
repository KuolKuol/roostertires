     <div class="banner--product">
       <h1>DEALS, NEW RELEASES & MORE</h1>
     </div>
    
     <?php 
        // convert string into an array
        $viewmodel[0]['features'] = json_decode($viewmodel[0]['features']);
        $viewmodel[0]['images'] = json_decode($viewmodel[0]['images']);
      ?>


    <div class="product-page">
    
       <!-- default start -->
       
       <div class="xzoom-container">
          <img class="xzoom" id="xzoom-default" src="<?php echo ROOT_URL.'/public/images/'.$viewmodel[0]['images'][0]; ?>" xoriginal="<?php echo ROOT_URL.'/public/images/'.$viewmodel[0]['images'][0]; ?>" />
          
          <div class="xzoom-thumbs">
              <a href="<?php echo ROOT_URL.'/public/images/'.$viewmodel[0]['images'][1]; ?>"><img class="xzoom-gallery" width="80px" src="<?php echo ROOT_URL.'/public/images/'.$viewmodel[0]['images'][1]; ?>"  xpreview="<?php echo ROOT_URL.'/public/images/'.$viewmodel[0]['images'][1]; ?>"></a>
              
              <a href="<?php echo ROOT_URL.'/public/images/'.$viewmodel[0]['images'][2]; ?>"><img class="xzoom-gallery" width="80px" src="<?php echo ROOT_URL.'/public/images/'.$viewmodel[0]['images'][2]; ?>"  xpreview="<?php echo ROOT_URL.'/public/images/'.$viewmodel[0]['images'][2]; ?>"></a>

              </div>
        </div>        
     
    <!-- default end -->

      <div class="product-description">
        
        <div class="product-title">
          <h2 class="product-name"><?php echo $viewmodel[0]['title']; ?></h2>
        </div>

        <div class="product-information">
          <h2 class="price">MSRP <?php echo $viewmodel[0]['price']; ?> US</h2>
          <h2 class="size">Size:<?php echo $viewmodel[0]['size']; ?></h2>
          <p class="description"><?php echo $viewmodel[0]['description']; ?></p>
          <br/>
          <h2 class="size">Features:</h2>  

            <ul>
              <?php foreach ($viewmodel[0]['features'] as $feature): ?>
                <li><?php echo $feature; ?></li>
              <?php endforeach; ?>
            </ul>

        </div>  
      
      </div>

      
    </div>