
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_image = get_sub_field('section_image'); 
        $is_bg = $section_image ? "" : "no_bg";
        $with_links = get_sub_field('with_links'); 
        $is_with_links = $with_links ? "service_links" : ""; 
        $service_items = get_sub_field('service_items'); 
        
        $rowIndex = get_row_index();
    ?>
    
    <section class="our_services <?php echo $is_bg ?>" id="content<?php echo $rowIndex ?>">
      <?php 
        if($section_image){
          ?>
            <figure>
              <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
            </figure>
          <?php
        }
      ?>
      <div class="container">
        <h2 class="section_title center"><?php echo $section_title ?></h2>
        <?php 
          if($section_subtitle){
            ?>
              <div class="section_subtitle center"><?php echo $section_subtitle ?></div>
            <?php
          }
        ?>
        <div class="services_list <?php echo $is_with_links ?>">
          <?php 
            foreach($service_items as $item ){
              ?>
                <div class="service_item">
                  <?php 
                    if($is_with_links && $item['service_url']){
                      ?>
                        <a href="<?php echo $item['service_url'] ?>"></a>
                      <?php
                    }
                  ?>
                  <figure>
                    <img src="<?php echo $item['service_icon']['url'] ?>" alt="<?php echo $item['service_icon']['alt'] ?>">
                  </figure>
                  <div class="service_title"><?php echo $item['service_title'] ?></div>
                  <div class="service_desc"><?php echo $item['service_desc'] ?></div>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
    </section>
