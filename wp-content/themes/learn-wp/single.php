<?php get_header() ?>
<div class="container">
    <?php the_post() ?>
        <h1><?php the_title() ?></h1>
        <div><?php the_date( 'Y-m-d' ) ?></div>
        <div><?php the_content() ?></div>
        <div><?php the_tags('Žymos: ') ?></div>
        <div><?php the_category() ?></div>
</div>
    
<?php get_footer() ?>