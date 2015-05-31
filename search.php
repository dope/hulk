<!-- Default Search Page. I imagine you'd probably want this abit cooler -->

<!-- header -->
<?php get_header();?>

<!-- posts -->
<div class="container">
  <?php
    # post variables
    $category = get_the_category();
    $firstCategory = $category[0]->cat_name;

    # begin the loop
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); ?>
              <h1 class="mb+">Search Results: </h1>
              <div class="blog-snippet">
                <!-- content (header and copy) -->
                <div class="blog__content">
                  <h2 class="blog-snippet__title"><a href="<?php echo get_permalink(); ?>"><?php the_title() ;?></a></h2>
                  <span class="blog-snippet__date">Posted on: <?php echo get_the_date( 'd M Y' ); ?> &bullet; Posted in: <a href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $firstCategory; ?></a></span>
                  <p><?php echo substr(get_the_excerpt(), 0,310); ?>...</p>
                </div>
              </div>
        <?php endwhile; // end while
            endif; // end if
  ?>
  <div class="pagination pagination--prev"><?php next_posts_link( 'Older posts' ); ?></div>
  <div class="pagination pagination--new"><?php previous_posts_link( 'Newer posts' ); ?></div>
</div>

<!-- footer -->
<?php get_footer(); ?>