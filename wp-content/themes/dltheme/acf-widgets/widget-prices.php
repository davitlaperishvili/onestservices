
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $price_boxes = get_sub_field('price_boxes'); 
        
        $rowIndex = get_row_index();
    ?>
    
    <section class="prices" id="content<?php echo $rowIndex ?>">
      <div class="container">
        <h2 class="section_title center"><?php echo $section_title ?></h2>
        <?php 
          if($section_subtitle){
            ?>
              <div class="section_subtitle center"><?php echo $section_subtitle ?></div>
            <?php
          }
        ?>
        <div class="prices_wrap">
          <div class="price_item_titles">
            <?php 
              foreach( $price_boxes as $priceBox ){
                ?>
                  <div 
                    class="price_item_title 
                    <?php echo $priceBox['is_special'] ? "special" : "" ?>"
                  >
                    <span><?php echo $priceBox['title'] ?></span>
                  </div>
                <?php
              }
            ?>
          </div>
          <div class="prices_list">
            <?php 
              foreach( $price_boxes as $priceItem ) {
                ?>
                  <div class="price_item <?php echo $priceItem['is_special'] ? "special" : "" ?>">
                    <div 
                      class="price_includes 
                      <?php echo $priceItem['is_bold_items'] ? "bold" : "" ?> 
                      <?php echo $priceItem['is_center'] ? "center" : "" ?>"
                    >
                      <?php 
                        foreach($priceItem['price_items'] as $item ){
                          ?>
                            <div><?php echo $item['title'] ?></div>
                          <?php
                        }
                      ?>
                    </div>
                  </div>
                <?php
              }
            ?>
          </div>
        </div>
      </div>
    </section>
