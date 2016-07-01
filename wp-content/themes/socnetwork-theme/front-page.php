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
            <div class="col-md-12">
                <?php
                if(have_posts()) {
                    while(have_posts()){
                        the_post();
                        the_content();
                    }
                } else {
                    echo '<p>No content found</p>';
                }
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <?php

                        $main_posts = new WP_Query('cat=4&posts_per_page=2');

                        if($main_posts->have_posts()) :
                            while($main_posts->have_posts()) : $main_posts->the_post();
                                ?>
                                <h2><?php the_title(); ?></h2>
                                <?php
                            endwhile;
                            else :
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div> <!-- col-md-12 -->
        </div> <!-- /row -->
    </div> <!-- bootstrap container -->
</section> <!-- /content-section -->

<?php get_footer(); ?>

