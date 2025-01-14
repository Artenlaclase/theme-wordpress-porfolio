<?php get_header(); ?>

<main>
    <h1>Bienvenido a mi portafolio</h1>
    <section>
        <h2>Proyectos</h2>
        <ul>
            <?php
            // Mostrar las publicaciones de tipo "post" (proyectos)
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile;
            else :
                echo "<p>No hay proyectos aún.</p>";
            endif;
            ?>
        </ul>
    </section>
</main>

<?php get_footer(); ?>