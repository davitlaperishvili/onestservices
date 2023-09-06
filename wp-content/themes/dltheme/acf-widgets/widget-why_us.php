
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_text = get_sub_field('section_text'); 
        $section_button = get_sub_field('section_button'); 
        $section_image = get_sub_field('section_image'); 
        $why_items = get_sub_field('why_items'); 
        
        $rowIndex = get_row_index();
    ?>
    
    <section class="why_us trans-all-4" id="content<?php echo $rowIndex ?>">
      <figure>
        <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
      </figure>
      <div class="container">
        <div class="why_block_wrap">
          <div class="left_side_text">
            <div class="section_text"><?php echo $section_text ?></div>
            <div class="theme_button white">
              <a href="<?php echo $section_button['url'] ?>"><?php echo $section_button['title'] ?></a>
            </div>
          </div>
          <div class="block_content">
            <h2 class="section_title"><?php echo $section_title ?></h2>
            <div class="why_list">
              <ul>
                <?php 
                  foreach($why_items as $item ){
                    ?>
                      <li>
                        <figure>
                          <img src="<?php echo $item['img']['url'] ?>" alt="<?php echo $item['img']['alt'] ?>">
                        </figure>
                        <div class="why_content">
                          <div class="why_title"><?php echo $item['title'] ?></div>
                          <div class="why_desc"><?php echo $item['desc'] ?></div>
                        </div>
                      </li>
                    <?php
                  }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

