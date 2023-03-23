<?php get_header(); 
/* Template Name: Homepage */?>

<?php get_template_part('components/homepage-hero');?>
<div class="home-content">
    <?php get_template_part('components/content');?>
</div>
<div class="popular-plants">
    <?php get_template_part('components/popular-plant');?>
    <?php get_template_part('components/popular-plant');?>
    <?php get_template_part('components/popular-plant');?>
    <?php get_template_part('components/popular-plant');?>
</div>


<?php get_footer(); ?>