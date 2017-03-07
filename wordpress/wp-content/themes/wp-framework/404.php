<?php get_header(); ?>
<section class="breadcrumbs">
    <div class="container">
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    </div>
</section>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h1 class="ctitle"><?php _e( 'ОШИБКА 404', 'wpeasy' ); ?></h1>
    <p>Что-то пошло не так, страница не нашлась</p>
    <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Вернутся на Главную', 'wpeasy' ); ?></a></h2>
<?php get_sidebar('right'); ?>
  </article>
<?php get_footer(); ?>
