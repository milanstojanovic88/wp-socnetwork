
<div class="row">
    <div class="col-md-12">
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

        <?php the_post_thumbnail(['class' => 'img-responsive']); ?>

        <?php the_content(); ?>


    </div>
</div> <!-- /row -->
