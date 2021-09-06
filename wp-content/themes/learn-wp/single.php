<?php get_header(); 
$sidebarId = 'sidebar-post-single';
$isSidebar = is_active_sidebar($sidebarId);
$mainClasses = $isSidebar ? 'col-9' : '';
?>

<div class="container">
    <div class="row">
        <div class="col <?php echo $mainClasses ?>">
            <?php the_post() ?>
            <h1><?php the_title() ?></h1>
            <div><?php the_date( 'Y-m-d' ) ?></div>
            <div><?php the_content() ?></div>
            <div><?php the_tags('Žymos: ') ?></div>
            <div><?php the_category() ?></div>
        </div>
        <?php if ($isSidebar) : ?>
            <div class="col col-3">
                <?php dynamic_sidebar($sidebarId) ?>
            </div>
        <?php endif; ?>
    </div>
    
</div>
    
<?php get_footer() ?>