
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_text = get_sub_field('section_text'); 
        $section_button = get_sub_field('section_button'); 
        $section_image = get_sub_field('section_image'); 
        $section_badge = get_sub_field('section_badge'); 
        $image_first = get_sub_field('image_first');
        $bordered_text = get_sub_field('bordered_text');
        $reversedClass = $image_first ? "reversed" : "";
        $borderedTextClass = $bordered_text ? "left_space" : "";
        $badgeStyle = $section_badge['style'] === "style_1" ? " " : "corp";
        
        $rowIndex = get_row_index();
    ?>
    

    <section class="text_block trans-all-4 <?php echo $reversedClass ?>" id="content<?php echo $rowIndex ?>">
      <div class="container">
        <div class="block_wrap">
          <div class="block_content">
            <h2 class="section_title"><?php echo $section_title ?></h2>
            <div class="section_text <?php echo $borderedTextClass ?>"><?php echo $section_text ?></div>
            <?php 
              if($section_button && $section_button['title']){
                ?>
                  <div class="theme_button">
                    <a href="<?php echo $section_button['url'] ?>"><?php echo $section_button['title'] ?></a>
                  </div>
                <?php
              }
            ?>
          </div>
          <div class="block_media">
            <div class="image_wrap">
              <figure>
                <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
              </figure>
              <?php 
                if($section_badge['title'] || $section_badge['value']){
                  ?>
                    <div class="block_badge <?php echo $badgeStyle ?>">
                      <div class="title"><?php echo $section_badge['title'] ?></div>
                      <div class="value"><?php echo $section_badge['value'] ?></div>
                    </div>
                  <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

