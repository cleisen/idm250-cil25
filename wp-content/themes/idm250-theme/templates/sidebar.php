<?php
/* Template Name: Sidebar */

get_header(); ?>

<main>
    <article>
        <div class="content">
            <?php get_template_part('components/about-hero');?>
            <?php get_template_part('components/content');?>
            <div class="cards">
                <?php get_template_part('components/bullet-list-card');?>
                <?php get_template_part('components/numbered-list-card');?>
            </div>
            <?php get_template_part('components/link-arrow-about');?>
        </div>
    </article>
    <aside>
        <?php get_template_part('components/sidebar-group');?>
    </aside>  
</main>


<?php get_footer(); ?>