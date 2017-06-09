<?php /* Template Name: Каталог/прайс */ get_header(); ?>
   <?php get_template_part('slider-main'); ?>
<section class="breadcrumbs">
    <div class="container">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    </div>
</section><!-- breadcrumbs -->
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <section class="col-lg-12 col-md-12 col-sm-12">
                <!--blog post-->
                <article class="m_bottom_15 download_table">
                    <h1 class="tt_uppercase color_dark m_bottom_25"><?php the_title(); ?></h1>
                     <div class="row">
                              <?php $terms = get_terms( array(
                  'taxonomy' => 'product_cat',
                  'hide_empty' => true,
                  'parent' => 0,
                  'hierarchical' => false,
                  'order' => ASC,
                    ) ); ?>
                <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                  foreach ( $terms as $term ) {
                  $termlinks= get_term_link($term,$taxonomy); ?>
                  <?php  if( !empty($term) ) {
                  $image = get_field('tax_img', $term ); } ?>
                <div class="cat_items_wrapp">
                  <div class="category_item_wrapp">
                    <a href="<?php echo $termlinks; ?>" class="category_link">
                      <h3><?php echo  $term->name; ?></h3>
                    </a>
                  </div>
                  <?php
                    $term_id = 54;
                    $taxonomy_name = 'product_cat';
                    $term_children = get_term_children( $term_id, $taxonomy_name );
                    echo '<ul class="child_list">';
                    foreach ( $term_children as $child ) {
                      $term = get_term_by( $term_id->term_id, $child, $taxonomy_name );
                      echo '<li><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';
                    }
                    echo '</ul>'; ?>
                </div>
                  <?php }} ?>
              </div>
              <a href="<?php echo get_template_directory_uri(); ?>/languages/Price_Лилейники.docx" class="lileyniki-download" download>
              <i class="fa fa-download" aria-hidden="true"></i> Скачать</a>
              <a href="<?php echo get_template_directory_uri(); ?>/languages/Price_Ирисы.docx" class="irisu-download" download>
              <i class="fa fa-download" aria-hidden="true"></i> Скачать</a>
                </article><!-- m_bottom_15 -->
            </section>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- page_content_offset -->
<?php get_footer(); ?>
