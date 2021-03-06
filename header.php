<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php // Load Meta ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  wp_title('|', true, 'right'); ?></title>
    <link href='https://fonts.googleapis.com/css?family=Lato|Prata' rel='stylesheet' type='text/css'>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- stylesheets should be enqueued in functions.php -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <h1>
            <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
            </a>
        </h1>

        <nav class="mainNav">
            <?php wp_nav_menu( array(
            'container' => '<nav>',
            'theme_location' => 'primary'
            )); ?>
        </nav>
    </div> <!-- /.container -->
</header><!--/.header-->

