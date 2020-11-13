<?php get_header(); ?>
<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
    <h1><?php the_field('page_title'); ?></h1>
    <p><?php the_field('page_content'); ?></p>
</div>
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
    <?php if( get_field('me_image') ): ?>
        <img src="<?php the_field('me_image'); ?>" />
    <?php endif; ?>
</div>

<?php endwhile; else: ?>
    <p><?php _e('Sorry. no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
</div>

<?php get_footer(); ?>
