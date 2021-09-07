<?php 

$books = new WP_Query(array(
    'post_type' => 'book',
    'posts_per_page' => 2    
));

get_header() ?>
<div class="container">
    <?php the_post() ?>
        <h1><?php the_title() ?></h1>
        <?php get_template_part('partials/full-slider') ?>
        <div><?php the_content() ?></div>
        <?php get_template_part('partials/full-slider-disable') ?>
        <div class="container">
    <div class="row">
        <?php if ($books->have_posts()) :
            while ($books->have_posts()) :
                $books->the_post(); ?>
                    <div class="col col-6">
                        <h3><?php the_title() ?></h3>
                        <div><?php echo get_the_date( 'Y-m-d' ) ?></div>
                        <div>
                        Puslapių skaičius:
                        <?php echo get_field('puslapiu_skaicius') ?>
                    </div>
                    <div>
                        Kaina:
                        <h3>
                            <?php echo get_field('kaina') ?>&euro;
                        </h3>                
                    </div> 
                        <a href="<?php the_permalink() ?>">Plačiau</a>
                    </div>            
        <?php endwhile; ?>
        <?php endif; ?>
    </div>    
    <?php echo get_num_queries() ?>
</div>
</div>
    
<?php get_footer() ?>