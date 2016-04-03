<?php get_header(); ?>
<?php     if ( have_posts() ) { ?>
    <?php while ( have_posts() ) {
        the_post(); ?>

        <article class="post">
            <div class="title-single-post">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="content-single-post">
                <p><?php the_content(); ?></p>
            </div>
            <div class="image-single-post">
                <?php if(get_the_post_thumbnail()){the_post_thumbnail(); } else echo '~~~No image~~~'; ?>
            </div>
            <?php echo 'By '; echo ''; the_author(); echo ' at '; the_time(); ?>
        </article>

    <?php }
} ?>
<?php get_footer(); ?>