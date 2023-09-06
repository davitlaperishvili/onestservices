<?php get_header(); ?>

<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
?>
  <main class="page">
    <section class="hero_inside">
      <figure>
        <?php the_post_thumbnail() ?>
      </figure>
      <div class="container">
        <div class="hero_content">
          <h1 class="page_title"><?php the_title() ?></h1>
          <div class="theme_button">
            <a href="tel:<?php echo $phone ?>">Maintenance request</a>
          </div>
        </div>
      </div>
    </section>

    <section class="page_text">
      <div class="container">
        <div class="section_text">
          <?php the_content() ?>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
