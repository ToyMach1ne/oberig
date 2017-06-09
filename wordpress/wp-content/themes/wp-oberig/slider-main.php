  <div id="owl-demo" class="owl-carousel owl-theme">
    <?php if( have_rows('slider', 30) ): ?>
      <?php while( have_rows('slider', 30) ): the_row(); ?>
        <?php
$image = get_sub_field('slider_img');

if( !empty($image) ):

  // vars
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];

  // thumbnail
  $size = 'small';
  $thumb = $image['sizes'][ $size ]; ?>
      <div class="item">
        <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
      </div>
          <?php endif; ?>
      <?php endwhile; endif; ?>

  </div><!-- owl-demo -->
