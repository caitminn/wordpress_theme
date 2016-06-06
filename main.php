<?php /* Template Name: Home Page */ ?>

<?php get_header();  ?>

<!-- <section class="background"> -->
    

<section class="slider">
    <?php echo do_shortcode('[smartslider2 slider="4"]'); ?> 
</section>
  
<div class="mainHome">
    <div class="container">

        <div class="content">
            <?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h4 class="pageTitle"><?php the_title(); ?></h4>


            <?php the_content(); ?>

            <?php endwhile; // end the loop?>
        </div> <!-- /,content -->
        
        <section class="newsletter">
            <h4 class="pageTitle">Sign Up for Our Newsletter</h4>
            <?php es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>
        </section>
    

    <?php //get_sidebar(); ?>

    </div> <!-- /.container -->
</div> <!-- /.main -->
<!-- </section> -->

<?php get_footer(); ?>