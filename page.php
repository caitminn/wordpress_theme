<?php /* Template Name: Default Page */ ?>
<?php get_header();  ?>

<section class="heroImage">
    <?php $image_id = get_post_thumbnail_id($post_id, 'small');
        $image_url = wp_get_attachment_url($image_id);
    ?>           
    <img src="<?php echo $image_url; ?>" alt="">

</section>

<div class="mainDefault">
    <div class="container">

        <div class="content">
            <?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h4 class="pageTitle"><?php the_title(); ?></h4>
            <h2 class="pageSubtitle"><?php the_field('subtitle'); ?></h2>
            
            <div class="pageContent">
                <?php the_content(); ?>
                
            </div>

            <?php endwhile; // end the loop?>
        </div> <!-- /,content -->

        <?php //get_sidebar(); ?>

    </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>