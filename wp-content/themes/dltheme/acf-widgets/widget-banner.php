
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_button = get_sub_field('section_button'); 
        $section_image = get_sub_field('section_image'); 
        
        $rowIndex = get_row_index();
    ?>

    <section class="banner" id="content<?php echo $rowIndex ?>">
      <div class="container">
        <div class="banner_wrap">
          <div class="banner_content">
            <div class="banner_title"><?php echo $section_title ?></div>
            <div class="theme_button">
              <a href="<?php echo $section_button['url'] ?>"><?php echo $section_button['title'] ?></a>
            </div>
          </div>
          <figure>
            <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
          </figure>
        </div>
      </div>
    </section>
