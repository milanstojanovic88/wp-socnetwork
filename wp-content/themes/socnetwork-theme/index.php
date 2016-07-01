<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1><?php bloginfo('name'); ?> <small><?php bloginfo('description'); ?></small></h1>
            </div>
        </div>
    </div>

<section class="content-section">
    <div class="container">
        <div class="row">
            <?php
            if(is_active_sidebar('right_side_sidebar')) {
            ?>
            <div class="col-md-8">
                <?php
                } else {
                ?>
                <div class="col-md-12">
                    <?php
                    }
                    ?>

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

                </div> <!-- col-md-8/col-md-12 -->

                <?php dynamic_sidebar('right_side_sidebar'); ?>

            </div> <!-- /row -->
        </div> <!-- bootstrap container -->
</section> <!-- /content-section -->

<?php get_footer(); ?>

