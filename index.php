<?php /* Template Name: Blog Page */ ?>

<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="mainIndex">
	<div class="container">

		<h4><?php echo apply_filters('the_title', get_page( get_option('page_for_posts') )->post_title); ?>
		</h4>
		<h2>
			<?php the_field('subtitle', get_option('page_for_posts')); ?>
		</h2>

		<div class="content">
			<?php get_template_part( 'loop', 'index' );	?>
		</div> <!--/.content -->
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>



