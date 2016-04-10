<?php get_header(); ?>
<?php if ( have_posts() && is_user_logged_in()) { ?>
 <?php while ( have_posts() ) {
  the_post(); ?>
  <article class="post">
   <?php if(get_the_post_thumbnail()){the_post_thumbnail(); } else echo '~~~No image~~~'; ?>
   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <?php echo get_the_excerpt(); ?>
   <a href="<?php the_permalink(); ?>">Read more &raquo</a>
  </article>
 <?php }
} ?>
<?php get_footer(); ?>