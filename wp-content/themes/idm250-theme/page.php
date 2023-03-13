<?php get_header(); ?>

<?php get_template_part('components/content');?>
<?php get_template_part('components/featured-block');?>
<?php get_template_part('components/paragraph-block');?>
<?php get_template_part('components/image-caption');?>

<div class="cards">
<?php get_template_part('components/bullet-list-card');?>
<?php get_template_part('components/numbered-list-card');?>
</div>

<?php get_template_part('components/link-arrow');?>
<?php get_template_part('components/pull-quote');?>

<?php get_footer(); ?>