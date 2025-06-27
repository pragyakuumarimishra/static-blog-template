<?php get_header(); ?>
<div class="container">
    <h1>Latest Posts</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
