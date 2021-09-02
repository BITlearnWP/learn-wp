<?php get_header() ?>
<div class="container">
    <div class="row">
        <?php while (have_posts()) :
            the_post(); ?>
            <div class="col col-6">
                <h3><?php the_title() ?></h3>
                <div><?php echo get_the_date( 'Y-m-d' ) ?></div>
                <a href="<?php the_permalink() ?>">Skaityti toliau</a>
            </div>
        <?php endwhile ?>
    </div>
</div>
<?php get_footer() ?>