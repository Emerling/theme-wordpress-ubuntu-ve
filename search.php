<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<div class='container  mb-5 mt-5'>


    <h1 class='font-weight-lighter'>Resultados de búsqueda por:
        <?php printf(esc_html('%s'), get_search_query()) ?></h1>

    <?php if (have_posts()) : ?>
    

    <section>
        <?php while (have_posts()) : the_post(); ?>
        <article class='font-weight-light'>
            <header>
                <h4><a class='font-weight-light' style='color:#e95420' href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

            </header>
            <?php the_excerpt(); ?>

        </article>
        <?php endwhile; ?>
        <div class="pagination mb-5 mt-5" style='color:#e95420'>
            <nav>
                <?php echo paginate_links(); ?>
            </nav>
        </div>

    </section>

    <?php else : ?>
    <h5 class='font-weight-lighter' style='color:#e95420'>¡Lo siento!, no encontramos el termino:
        <?php printf(esc_html('%s'), get_search_query()) ?>
    </h5>
</div>

<div class="row">
    <div class="col border bg-light">
        <div class="container mb-5 mt-5">

            <div class="row">
                <div class="col-lg-12">

                    <?php get_search_form(); ?>

                </div>
            </div>

        </div>
    </div>
</div>

<div class='container font-weight-light  mb-5 mt-5'>

    <div class="row">
        <div class='col-lg-6'>
            <h3 class='font-weight-light'>¿Por qué no intentas ampliar tu búsqueda?</h3>
            <p>Puedes hacer esto:</p>
            <ul>
                <li>Agregar palabras o frases alternativas</li>
                <li>Usar palabras individuales en lugar de frases</li>
                <li>Probar una ortografía diferente</li>
            </ul>

        </div>
        <div class='col-lg-6'>
            <h3 class='font-weight-light'>¿Sigues sin suerte?</h3>
            <ul>
                <li> <a href="<?php bloginfo( 'url' ); ?>">Visita nuestra página principal</a></li>
                <li> <a href="#">Contáctanos </a></li>
            </ul>
        </div>
    </div>

    <?php endif; ?>

</div>
<hr>


<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>