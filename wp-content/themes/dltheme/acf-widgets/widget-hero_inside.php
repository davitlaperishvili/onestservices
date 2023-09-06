
   <?php  
        $heroTitle = get_sub_field('hero_title'); 
        $heroText = get_sub_field('hero_text'); 
        $button_text = get_sub_field('button_text'); 
        $heroImage = get_sub_field('hero_image'); 
        $rowIndex = get_row_index();
    ?>
    <?php 
        $phoneVisible = get_field('phone_number', 'option');
        $phone = preg_replace("/[^0-9]/", "", $phoneVisible);
        $email = get_field('email', 'option');
      ?>
   
    <section class="hero_inside" id="content<?php echo $rowIndex ?>">
      <figure>
        <img src="<?php echo $heroImage['url'] ?>" alt="<?php echo $heroImage['alt'] ?>">
      </figure>
      <div class="container">
        <div class="hero_content">
          <h1 class="page_title"><?php echo $heroTitle ?></h1>
          <?php
            if($heroText){
              ?>
                <div class="page_subtitle"><?php echo $heroText ?></div>
              <?php
            }
          ?>
          
          <div class="theme_button">
            <a href="tel:<?php echo $phone ?>"><?php echo $button_text ?></a>
          </div>
        </div>
      </div>
    </section>                    
