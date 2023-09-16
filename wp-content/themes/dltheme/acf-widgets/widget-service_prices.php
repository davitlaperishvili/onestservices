
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle');
        $phoneVisible = get_field('phone_number', 'option');
	      $phone = preg_replace("/[^0-9]/", "", $phoneVisible);

        $rowIndex = get_row_index();
    ?>
    
    <section class="service_prices trans-all-4 <?php echo $is_bg ?>" id="content<?php echo $rowIndex ?>">
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
        <div class="prices_list">
          <?php 
            // параметры по умолчанию
            $my_posts = get_posts( array(
              'numberposts' => -1,
              'post_type'   => 'services',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
              setup_postdata( $post );
              $pricing = get_field( "pricing", $post->ID);
              ?>
                <div class="price_item">
                  <div class="price_main_info">
                    <div class="service_title"><a href="<?php echo get_the_permalink($post->ID) ?>"><?php echo get_the_title($post->ID) ?></a></div>
                    <div class="price_value">
                      <?php 
                        if($pricing['price']){
                          ?>
                            <span class="price"><?php echo $pricing['price'] ?></span>
                          <?php
                        }
                      ?>
                      <?php 
                        if($pricing['price_per']){
                          ?>
                            <sub><?php echo $pricing['price_per'] ?></sub>
                          <?php
                        }
                      ?>
                    </div>
                    <?php 
                      if($pricing['price_additional_info']){
                        ?>
                          <div class="price_additional_info"><?php echo $pricing['price_additional_info'] ?></div>
                        <?php
                      }
                    ?>
                  </div>
                  <div class="price_items">
                    <ul>
                      <?php 
                        foreach($pricing['price_items'] as $item ){
                          ?>
                            <li><?php echo $item['title'] ?></li>
                          <?php
                        }
                      ?>
                    </ul>
                  </div>
                  <div class="price_button">
                    <div class="theme_button">
                      <a href="tel:<?php echo $phone ?>">Get started</a>
                    </div>
                  </div>
                </div>
              <?php
            }

            wp_reset_postdata(); // сброс
          ?>
        </div>
      </div>
    </section>
