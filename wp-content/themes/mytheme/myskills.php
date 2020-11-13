<?php /* Template Name: MySkillsPage */ ?>

<?php get_header(); ?>
<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="center-text" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <h1>Programmeringsspråk</h1>
    <p><?php the_field('programming_languages'); ?></p>
    <h1>Ramverk</h1>
    <p><?php the_field('frameworks'); ?></p>
</div>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
</div>

<?php get_footer(); ?>
