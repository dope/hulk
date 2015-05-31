<!-- Default WordPress Page // No Sidebar -->

<!-- header -->
<?php get_header(); ?>
  <!-- page content -->
    <div class="container global">
    <?php
        while ( have_posts() ) : the_post();
        endwhile;
      ?>
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </div>

    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

<!-- footer -->
<?php get_footer(); ?>