<?php get_header() ?>
<div class="container">
    <h1>Knygos apie programavimą</h1>
    <div class="row">
        <?php while (have_posts()) :
            the_post(); ?>
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
            
        <?php endwhile ?>
    </div>    
    <?php echo get_num_queries() ?>
</div>
<?php get_footer() ?>