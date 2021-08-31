<?php get_header() ?>
<div class="container">
    <div class="row">
        <?php while (have_posts()) :
            the_post(); ?>
            <div class="col col-4">
                <h3><?php the_title() ?></h3>
                <a href="<?php echo get_permalink() ?>">Skaityti toliau</a>
            </div>
        <?php endwhile ?>
    </div>
</div>
<?php get_footer() ?>