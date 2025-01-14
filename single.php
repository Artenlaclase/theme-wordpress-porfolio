<?php get_header(); ?>

<main>
    <article>
        <h1><?php the_title(); ?></h1>
        <div>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>