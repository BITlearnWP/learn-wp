<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col col-7">
            <?php the_post() ?>
            <h1>Knyga <?php the_title() ?></h1>
            <div><?php the_content() ?></div>
        </div>
        <div class="col col-5">
            <div> 
                Autorius:
                <?php the_terms( get_the_ID(), 'autorius', '', ', ', '' ); ?>
            </div>
            <div>
                Leidykla:
                <?php the_terms( get_the_ID(), 'publisher', '', '', '' ); ?>
            </div>
            <div>
                Puslapių skaičius:
                <?php the_field('puslapiu_skaicius') ?>
            </div>
            <div>
                Kaina:
                <h3>
                    <?php echo get_field('kaina') ?>&euro;
                </h3>                
            </div>    
        </div>
    </div>    
</div>    
<?php get_footer() ?>