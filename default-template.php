<?php/*Template Name: My Default Template*/?>
<?php get_header(); ?>
<?php if ( have_posts() && is_user_logged_in()) { ?>
    <?php while ( have_posts() ) {
        the_post(); ?>
        <article class="post">
            <div class="title-single-post">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="content-single-post">
                <p><?php the_content(); ?></p>
            </div>
        </article>
    <?php }
} ?>
<?php get_footer(); ?>