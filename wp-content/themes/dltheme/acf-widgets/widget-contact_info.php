
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_iframe = get_sub_field('section_iframe'); 
        $info_list = get_sub_field('info_list'); 
        
        $rowIndex = get_row_index();
    ?>
    
    <section class="contact_info"  id="content<?php echo $rowIndex ?>">
      <div class="container">
        <div class="contact_info_wrap">
          <div class="left">
            <h2 class="section_title"><?php echo $section_title ?></h2>
            <?php 
              if($section_subtitle){
                ?>
                  <div class="section_subtitle"><?php echo $section_subtitle ?></div>
                <?php
              }
            ?>
            <div class="info_items">
            <?php 
              foreach($info_list as $info) {
                ?>
                    <div class="info_item">
                    <figure>
                      <img src="<?php echo $info['icon']['url'] ?>" alt="<?php echo $info['icon']['alt'] ?>">
                    </figure>
                    <div class="info_content">
                      <div class="title"><?php echo $info['title'] ?></div>
                      <div class="value"><?php echo $info['value'] ?></div>
                    </div>
                  </div>
                <?php
              }
            ?>
            </div>
          </div>
          <div class="iframe_wrap">
            <?php echo $section_iframe ?>
          </div>
        </div>
      </div>
    </section>
