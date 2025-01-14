<?php
/*
Template Name: Página de Inicio
*/
get_header();
?>

<main>
    <section class="intro">
        <h1>Mi Portafolio</h1>
        <p>¡Bienvenido a mi espacio de proyectos! Aquí podrás explorar los proyectos que he realizado y conocer más sobre mi trabajo.</p>
    </section>

    <section class="projects">
        <h2>Mis Proyectos</h2>
        <ul>
            <?php
            // Consulta personalizada para obtener proyectos (si tienes un CPT "proyectos")
            $proyectos_query = new WP_Query(array(
                'post_type' => 'proyectos', // Nombre del Custom Post Type
                'posts_per_page' => 3,      // Mostrar 3 proyectos
            ));

            if ($proyectos_query->have_posts()) :
                while ($proyectos_query->have_posts()) : $proyectos_query->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail'); // Miniatura del proyecto
                            } ?>
                        </a>
                    </li>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No hay proyectos disponibles.</p>';
            endif;
            ?>
        </ul>
    </section>
</main>

<?php get_footer(); ?>