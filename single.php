<!-- Single Post -->
<?php get_header(); ?>
  <div class="container">
    <?php
      while ( have_posts() ) : the_post();
      endwhile;
      $category = get_the_category();
      $firstCategory = $category[0]->cat_name;
    ?>

    <h2><?php the_title(); ?></h2>
    <span class="mt- db blog-snippet__date">Posted on: <?php echo get_the_date( 'd M Y' ); ?> &bullet; Posted in: <a href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $firstCategory; ?></a></span>
    <p><?php the_content(); ?></p>
  </div>
<?php get_footer(); ?>