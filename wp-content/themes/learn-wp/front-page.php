<?php get_header() ?>
<div class="container">
    <?php the_post() ?>
        <h1><?php the_title() ?></h1>
        <?php get_template_part('partials/full-slider') ?>
        <div><?php the_content() ?></div>
        <?php get_template_part('partials/full-slider-disable') ?>
</div>
    
<?php get_footer() ?>