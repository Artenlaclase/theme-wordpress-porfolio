<?php get_header(); ?>

<main>
    <article>
        <?php
        // Loop principal
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <header>
                    <h1><?php the_title(); ?></h1>
                    <?php
                    // Mostrar imagen destacada si existe
                    if (has_post_thumbnail()) {
                        echo '<div class="featured-image">';
                        the_post_thumbnail('large'); // Cambia el tamaño según tus necesidades
                        echo '</div>';
                    }
                    ?>
                </header>

                <div class="post-content">
                    <?php the_content(); // Mostrar el contenido completo ?>
                </div>

                <footer>
                    <p>
                        <?php
                        // Opcional: mostrar la fecha de publicación y categorías si es un post
                        if (get_post_type() === 'post') {
                            echo 'Publicado el ' . get_the_date() . ' en ';
                            the_category(', ');
                        }
                        ?>
                    </p>
                </footer>
                <?php
            endwhile;
        else :
            ?>
            <p>No se encontró contenido.</p>
        <?php endif; ?>
    </article>
</main>

<?php get_footer(); ?>
