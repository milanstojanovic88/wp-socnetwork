<?php get_header(); ?>

    <div class="page-header">
        <h1><?php bloginfo('name'); ?> <small><?php bloginfo('description'); ?></small></h1>
    </div>

    <?php
    if(have_posts()) {
        while(have_posts()){
            the_post(); ?>

            <?php get_template_part('content', get_post_format()); ?>

            <?php
        }
    } else {
        echo '<p>No content found</p>';
    }
    ?>

<?php get_footer(); ?>

