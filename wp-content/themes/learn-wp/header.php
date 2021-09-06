<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset') ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn WP - <?php the_title() ?></title>
    <?php wp_head() ?>
</head>

<body>    
    <header>
        <div class="container">
            <div class="row">
                <div class="col col-4">
                    <a href="<?php echo site_url('front-page') ?>">
                        <div class="h2"><?php bloginfo('name') ?></div>
                    </a>
                    <div> <?php bloginfo('description') ?></div>
                </div>
                <div class="col col-8">
                <?php wp_nav_menu( [
		                'theme_location' => 'header_menu',
                        'container'      => false,
                        'menu_class'    => 'menu wp-learn-menu-header'
	                ] ); ?>
                </div>
            </div>
            <hr>
        </div>
    </header>
    <main>