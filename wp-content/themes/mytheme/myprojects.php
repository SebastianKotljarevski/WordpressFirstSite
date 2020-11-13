<?php /* Template Name: MyProjects */ ?>

<?php get_header(); ?>
<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <h1>Mina projekt</h1>
    <br></br>
    <h2><?php the_field('work_title'); ?></h2>
    <p><?php the_field('corporation'); ?></p>
    <p><?php the_field('task_description'); ?></p>
    <ul>
        <li>Arbete i grupp om 6 personer</li>
        <li>Agilt arbetsätt med sprints och dagliga möten</li>
        <li>Skapade en frontend byggt på javascript med google maps API och Leaflet.js</li>
        <li>Backend, Rest API byggt med Node.js och Express.js</li>
    </ul>
    <br></br>
    <h2><?php the_field('work_title2'); ?></h2>
    <p><?php the_field('corporation2'); ?></p>
    <p><?php the_field('task_description2'); ?></p>
    <ul>
        <li>Arbete i grupp om 4 personer</li>
        <li>Agilt arbetsätt med sprints och dagliga möten</li>
        <li>Hemsidan skapades med Umbraco CMS</li>
    </ul>
</div>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
</div>

<?php get_footer(); ?>
