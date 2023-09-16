<!DOCTYPE html>
<html lang="en" class="dl_theme">
<head>
<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$logo = get_field('logo', 'option');
	$favicon = get_field('favicon', 'option');
	$header_first_button = get_field('header_first_button', 'option');
	$header_second_button = get_field('header_second_button', 'option');
?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo $favicon['url'] ?>">
	<!-- <script src="https://kit.fontawesome.com/990ba33bd4.js" crossorigin="anonymous"></script> -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >


<div class="resp_menu trans-no-all">
	<div class="resp_menu_toggle">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div class="resp_menu_ul"></div>
</div>

<div class="mobile_fixed_button">
	<a href="tel:<?php echo $phone ?>">Call Us</a>
</div>

<header class="trans-all-4">
	<div class="container">
		<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>">
			</a>
		</div>
		<div class="header_right">
      <div class="header_menu">
        <?php
          wp_nav_menu([
            'theme_location'	=> 'header_menu',
            'menu'				=> 'header_menu', 
            'container'			=> 'nav',
            'container_class'	=> 'navigation',
            'menu_class'		=> 'navigation'
          ]);
        ?>
      </div>
      <?php 
        if($header_first_button['url'] || $header_second_button['url']){
          ?>
            <div class="header_buttons">
              <?php 
                if($header_first_button['url']){
                  ?>
                    <a href="<?php echo $header_first_button['url'] ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/login.png" alt="">
                      <span><?php echo $header_first_button['title'] ?></span>
                    </a>
                  <?php
                }
              ?>
              <?php 
                if($header_second_button['url']){
                  ?>
                    <a href="<?php echo $header_second_button['url'] ?>">
                      <span><?php echo $header_second_button['title'] ?></span>
                    </a>
                  <?php
                }
              ?>
            </div>
          <?php
        }
      ?>
    </div>
	</div>
</header>