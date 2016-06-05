<?php /* Template Name: Home Page */ ?>

<?php get_header();  ?>

<section class="slider">
    <?php echo do_shortcode('[smartslider2 slider="2"]'); ?>
</section>
  
<div class="mainHome">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
       

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
    

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>