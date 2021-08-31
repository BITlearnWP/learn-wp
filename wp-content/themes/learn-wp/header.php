<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset') ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn WP - <?php the_title() ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <?php wp_head() ?>
</head>

<body>
    <div class="container">
        <header>
            <div class="alert alert-success"><?php bloginfo('name') ?></div>
            <div class="alert alert-success"><?php bloginfo('description') ?></div>
            Meniu
            <hr>
        </header>
    </div>
    <main>