<?php get_header(); ?>

    <?php
    if(have_posts()) {
        while(have_posts()){
            the_post(); ?>

            <div class="row">
                <div class="col-md-12">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <?php the_content(); ?>
                </div>
            </div>

            <?php
        }
    } else {
        echo '<p>No content fount</p>';
    }
    ?>

<?php get_footer(); ?>

