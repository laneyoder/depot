<?php get_header(); ?>

<?php
            $args = array(
                'category_name' => 'menu page',
            );
            query_posts($args);
        ?>
        <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div <?php post_class(); ?>>
        <h2><?php the_title();?></h2>
        <?php the_content();?>
    </div>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
