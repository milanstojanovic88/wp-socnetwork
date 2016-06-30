<form class="navbar-form navbar-left" role="search" method="get" action="<?php echo home_url('/') ?>">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="<?php the_search_query() ?>" name="s" id="s">
    </div>
    <button id="searchsubmit" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form>