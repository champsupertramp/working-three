    <div class="sideBar">
        <nav class="nav-side nav-side-grey">
      <form action="" class="search-form" method="get" role="search">
        <input type="text" id="search" name="s" value="" placeholder="Search" class="sb-search-input">
      </form>
          <p><?php _e("Filter articles by","workingthree");?>:</p>
            <ul>
                <li><a href="/blog/" class="active">All</a></li>
                <?php $case_study_terms = get_terms('category', array( 'hide_empty' => 0 )); ?>
                <?php foreach( $case_study_terms  as $term ){ ?>
                <li><a href="/category/<?php echo $term->slug;?>"><?php _e($term->name,"workingthree");?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
