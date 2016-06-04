<?php /* Template Name: Contact Page */ ?>

<?php get_header();  ?>

    <div class="mainContact">
        <div class="container">
            <div class="content">
            <?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h4><?php the_title(); ?></h4>
            <h2><?php the_field('subtitle'); ?></h2>
            <div class="formContainer">
                <div class="formFields">
                    <?php the_field('contact_form');?>
                </div>
                <div class="formInfo">
                    <h4><?php the_field('description_title');?></h4>
                    <p><?php the_field('description');?></p>
                    <h4><?php the_field('contact_info_title');?></h4>
                    <p>Address: <?php the_field('address');?></p>
                    <p>Phone: <?php the_field('phone');?></p>
                    <p>Email: <?php the_field('email');?></p>
                </div>
            </div>

            <?php endwhile; // end the loop?>
            </div> <!-- /.content -->
        </div> <!-- /.container -->
    </div> <!-- /.main -->

<?php get_footer(); ?>