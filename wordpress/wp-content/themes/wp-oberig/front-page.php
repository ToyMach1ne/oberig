<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see       https://docs.woocommerce.com/document/template-structure/
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
  <!-- Слайдер на главной -->
  <?php get_template_part('slider-main'); ?>
  <!-- Слайдер на главной -->
  <?php
    /**
     * woocommerce_before_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
     * @hooked woocommerce_breadcrumb - 20
     */
    do_action( 'woocommerce_before_main_content' );
  ?>
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
      <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
    <?php endif; ?>

    <?php
      /**
       * woocommerce_archive_description hook.
       *
       * @hooked woocommerce_taxonomy_archive_description - 10
       * @hooked woocommerce_product_archive_description - 10
       */
      do_action( 'woocommerce_archive_description' );
    ?>
    <?php

$file = get_field('download_file');

if( $file ): ?>

  <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>

<?php endif; ?>
           <!-- Рубрики -->
          <div class="archive-wrapper">
          <section class="text-wrapper">
            <div class="container">
                  <div class="row">
                  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                  <?php endwhile; endif; ?>
                </div>
          </section>
            <section class="col-lg-12 col-md-12 col-sm-12 category_wrapper">
              <div class="title_cat-wrapper">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <h4>Колекции цветов</h4>
                    </div>
                  </div>
                </div>
              </div>
            <div class="container">
              <div class="row">
                              <?php $terms = get_terms( array(
                  'taxonomy' => 'product_cat',
                  'hide_empty' => true,
                  'parent' => 0,
                  'hierarchical' => false,
                  'orderby' => 'name',
                    ) ); ?>
                <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                  foreach ( $terms as $term ) {
                  $termlinks= get_term_link($term,$taxonomy); ?>
                  <?php  if( !empty($term) ) {
                  $image = get_field('tax_img', $term ); } ?>
                <div class="col-md-6">
                  <div class="category_item_wrapp">
                    <a href="<?php echo $termlinks; ?>" class="category_link">
                      <h3><?php echo  $term->name; ?></h3>
                      <a href="<?php echo $termlinks; ?>" class="cat_button">Перейти</a>
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
            </div>
            </section>
            <div class="map-container">
                      <?php the_field('map', 36); ?>
                    </div>
          </div><!-- archive-wrapper -->
          <!-- Рубрики -->

  <?php
    /**
     * woocommerce_after_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
     */
    do_action( 'woocommerce_after_main_content' );
  ?>

<?php get_footer( 'shop' ); ?>
