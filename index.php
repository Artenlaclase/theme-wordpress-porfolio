<?php get_header(); ?>

<main>
    <h1>Bienvenido a mi portafolio</h1>
    <section>
        <h2>Proyectos</h2>
        <ul>
            <?php
            // Consulta personalizada para obtener proyectos
            $proyectos_query = new WP_Query(array(
                'post_type' => 'proyectos', // Nombre del Custom Post Type
                'posts_per_page' => 10,    // Número de proyectos a mostrar
            ));

            // Loop personalizado
            if ($proyectos_query->have_posts()) :
                while ($proyectos_query->have_posts()) :
                    $proyectos_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                            <?php
                            // Mostrar imagen destacada si existe
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail'); // Tamaño de la miniatura
                            }
                            ?>
                        </a>
                        <p><?php the_excerpt(); // Mostrar extracto ?></p>
                    </li>
                <?php endwhile;

                // Restaurar datos originales de la consulta global
                wp_reset_postdata();
            else :
                echo "<p>No hay proyectos aún.</p>";
            endif;
            ?>
        </ul>
    </section>
</main>

<?php get_footer(); ?>