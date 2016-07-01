<?php get_header(); ?>
<section class="content-section">
    <div class="container">


<div class="page-header">
    <h1><?php bloginfo('name'); ?> <small><?php bloginfo('description'); ?></small></h1>
</div>

<?php
if(have_posts()) {
    ?>

    <div class="row">
        <div class="col-md-12">
            <h2><?php

                if(is_category()) {
                    single_cat_title();
                } elseif(is_tag()) {
                    single_tag_title();
                } elseif(is_author()) {
                    the_post();
                    echo 'Author Archives: ' . get_the_author();
                } elseif(is_day()) {
                    echo 'Day';
                } elseif(is_month()) {
                    echo 'Mont';
                } elseif(is_year()) {
                    echo 'Year';
                } else {
                    echo 'Archives';
                }

                ?></h2>
        </div>
    </div>

    <?php


    while(have_posts()){
        the_post(); ?>

        <?php get_template_part('content'); ?>


        <?php
    }
} else {
    echo '<p>No content fount</p>';
}
?>
    </div>
</section>
<?php get_footer(); ?>

