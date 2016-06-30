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

        <?php the_post_thumbnail(['class' => 'img-responsive']); ?>

        <?php
        if(is_search() || is_archive()) { ?>
            <p><?php echo get_the_excerpt(); ?>&nbsp;<a href="<?php the_permalink() ?>">Read more &rsaquo;&rsaquo;</a></p>
        <?php
        } else {
            if($post->post_excerpt) { ?>
                <p><?php echo get_the_excerpt(); ?>&nbsp;<a href="<?php the_permalink() ?>">Read more &rsaquo;&rsaquo;</a></p>
            <?php
            } else {
                the_content();
            }
        }

        ?>



    </div>
</div> <!-- /row -->