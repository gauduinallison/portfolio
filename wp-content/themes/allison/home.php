<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section id="about" class="grid-container">
  <div class="grid-x">
    <div class="cell large-6 medium-12 text">
      <h2><?php the_field('title_about'); ?></h2>
      <?php the_field('contain_about'); ?>
      <div class="grid-container full">
        <div class="grid-x">
          <div class="cell large-6 medium-12 btn">
            <a href="<?php the_field('link_btn_about'); ?>"><?php the_field('label_btn_about'); ?></a>
          </div>
        </div>
      </div>
    </div>

    <div class="cell large-6 medium-12 img">
      <?php
      $image = get_field('image');
      $size = 'large'; // (thumbnail, medium, large, full or custom size)

      if( $image ) {

      	echo wp_get_attachment_image( $image, $size );

      }

      ?>

    </div>
  </div>
</section>

<section id="quote">
  <div class="grid-container">
    <div class="grid-x text-center align-center">
      <div class="cell large-9 medium-12">
        <p class="quote_text"><?php the_field('quote'); ?></p>
        <p class="quote_author"><?php the_field('author_quote'); ?></p>
      </div>
    </div>
  </div>
</section>

<section id="work" class="grid-container">
  <div class="grid-x">
    <h2 class="cell large-12 text-right"><?php the_field('title_work'); ?></h2>
      <div class="grid-container full">
        <div class="grid-x grid-padding-x align-center">
          <?php
            $works = get_posts( array(
                'posts_per_page' => 8, // -1 pour afficher tous les articles
                'post_status' => 'publish', // statut public uniquement
                'post_type' => 'works',
                'orderby' => 'post_date', // trier par date
                'order' => 'ASC' // trier par date décroissante
          )); ?>

          <div class="grid-container full cell large-4">
            <div class="grid-y grid-padding-y">
              <?php foreach( $works as $work) {
                if( get_field('column', $work->ID) == 'left' ) { ?>
                    <div class="large-6 medium-12 text-center">
                      <?php echo get_the_post_thumbnail($work->ID); ?>
                    </div>
              <?php }
            } ?>
            </div>
          </div>

          <div class="grid-container full cell large-4">
            <div class="grid-y grid-padding-y">
              <?php foreach( $works as $work) {
                if( get_field('column', $work->ID) == 'middle' ) { ?>
                    <div class="large-3 medium-12 text-center">
                      <?php echo get_the_post_thumbnail($work->ID); ?>
                    </div>
              <?php }
            } ?>
            </div>
          </div>

          <div class="grid-container full cell large-4 padding">
            <div class="grid-y grid-padding-y">
              <?php foreach( $works as $work) {
                if( get_field('column', $work->ID) == 'right' ) { ?>
                    <div class="large-6 medium-12 text-center">
                      <?php echo get_the_post_thumbnail($work->ID); ?>
                    </div>
              <?php }
            } ?>
            </div>
          </div>
          <div class="cell large-4 medium-12 text-center btn">
            <a href="<?php the_field('link_btn_work'); ?>"><?php the_field('label_btn_work'); ?></a>
          </div>
        </div>
      </div>
    </div>
</section>

<section id="contact">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell large-6 medium-12">
        <h2><?php the_field('title_contact') ?></h2>
        <p class="contain_contact"><?php the_field('contain_contact') ?></p>
        <nav class="cell large-6 medium-12" id="social_nav">
          <?php
          echo '<ul class="menu">';
            if ( of_get_option('behance_link') ) {
              echo '<li><a href="'.of_get_option('behance_link').'"><i class="fab fa-behance-square"></i></a></li>';
            }
            if ( of_get_option('twitter_link') ) {
              echo '<li><a href="'.of_get_option('twitter_link').'"><i class="fab fa-twitter-square"></i></a></li>';
            }
            if ( of_get_option('googleplus_link') ) {
              echo '<li><a href="'.of_get_option('googleplus_link').'"><i class="fab fa-google-plus-square"></i></a></li>';
            }
          echo '</ul>';
          ?>
        </nav>
      </div>
      <div class="cell large-6 medium-12">
        <?php the_field('formulaire'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
