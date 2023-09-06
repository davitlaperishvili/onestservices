
   <?php  
        $heroTitle = get_sub_field('hero_title'); 
        $heroSubTitle = get_sub_field('hero_subtitle'); 
        $heroBg = get_sub_field('hero_background_image'); 
        $hero_button = get_sub_field('hero_button'); 
        $hero_image_1 = get_sub_field('hero_image_1'); 
        $hero_image_2 = get_sub_field('hero_image_2'); 
        $hero_items = get_sub_field('hero_items'); 
        
        $rowIndex = get_row_index();
    ?>
    

    <section class="hero trans-all-4" id="content<?php echo $rowIndex ?>">
      <figure>
        <img src="<?php echo $heroBg['url'] ?>" alt="<?php echo $heroBg['alt'] ?>">
      </figure>
      <div class="container">
        <div class="hero_wrap">
          <div class="hero_content">
            <h1 class="page_title"><?php echo $heroTitle ?></h1>
            <div class="page_subtitle"><?php echo $heroSubTitle ?></div>
            <div class="theme_button black">
              <a href="<?php echo $hero_button['url'] ?>"><?php echo $hero_button['title'] ?></a>
            </div>
          </div>
          <div class="hero_media">
            <figure>
              <span class="img_wrap hero_img_1">
                <img src="<?php echo $hero_image_1['url'] ?>" alt="<?php echo $hero_image_1['alt'] ?>">
              </span>
              <span class="img_wrap hero_img_2">
                <img src="<?php echo $hero_image_2['url'] ?>" alt="<?php echo $hero_image_2['alt'] ?>">
              </span>
            </figure>
          </div>
        </div>
        <div class="hero_items trans-all-0">
          <?php
            foreach($hero_items as $item ){
              ?>
                <div class="hero_item">
                  <div class="svg_wrap">
                    <?php echo $item['svg_code'] ?>
                  </div>
                  <div class="item_text">
                    <div class="item_title"><?php echo $item['title'] ?></div>
                    <div class="item_value"><?php echo $item['value'] ?></div>
                  </div>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
    </section>

