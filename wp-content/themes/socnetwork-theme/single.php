<?php get_header(); ?>

<section class="content-section">
    <div class="container">

<div class="page-header">
    <h1><?php bloginfo('name'); ?> <small><?php bloginfo('description'); ?></small></h1>
</div>

<?php
if(have_posts()) {
    while(have_posts()){
        the_post(); ?>

        <div class="row">
            <div class="col-md-12">
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <p class="post-info"><?php the_time('jS F, Y. G:i'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php

                    $categories = get_the_category();
                    $separator = ", ";
                    $output = '';

                    if($categories) :
                        foreach($categories as $category) :
                            $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
                        endforeach;

                        echo trim($output, $separator);
                    endif;

                    ?></p>
                <?php the_content(); ?>
            </div>
        </div>

        <?php
    }
} else {
    echo '<p>No content fount</p>';
}
?>
    </div>
</section>
<?php get_footer(); ?>

