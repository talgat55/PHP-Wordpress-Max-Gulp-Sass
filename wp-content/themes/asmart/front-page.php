<?php


get_header(); ?>
<h1 class="hide-title"><?=   bloginfo('name'); ?></h1>
<?php get_template_part('inc/homeSlider'); ?>
<?php get_template_part('inc/homeAbout'); ?>
<?php get_template_part('inc/homeEvents'); ?>
<?php get_template_part('inc/homePortfolio'); ?>
<?php get_template_part('inc/homePartners'); ?>
<?php get_template_part('inc/feedback'); ?>
<?php get_footer();
