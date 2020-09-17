<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<div class="container mb-5 mt-5 ">
    <!-- Listado de posts -->
    <div class="card-deck">
        <div class="row">
            <div class="col-md-8 font-weight-light" style='color:#333333'>
                <?php if (have_posts()) : ?>

                <section>

                    <?php if ( is_category() ) : ?>
                    <h2 class='font-weight-light' id="category-name-header">
                        <?php echo $cache_categories[$cat]->cat_name ?>Resultados por Categorías</h2>
                    <small>
                        <?php add_filter('category_description', 'wpautop'); ?>
                        <?php add_filter('category_description', 'wptexturize'); ?>
                        <div class='text-capitalize' id="category-description">
                            <?php echo category_description(); ?>
                        </div>
                    </small>
                    <?php endif; ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="excerpt-post">
                        <h2 id="post-<?php the_ID(); ?>">
                            <a class='font-weight-light' style='color:#e95420' href="<?php the_permalink();?>"
                                rel="bookmark" title="Enlace a: <?php the_title(); ?>">
                                <?php the_title(); ?></a>
                        </h2>
                        <div class="catslist"><?php the_category(' y '); ?></div>
                        <div class="entry">
                            <?php the_excerpt('Continúe Leyendo...') ?>
                        </div>

                        <?php trackback_rdf(); ?>

                        <?php endwhile; ?>
                        <div class="pagination mb-5 mt-5" style='color:#e95420'>
                            <nav>
                                <?php echo paginate_links(); ?>
                            </nav>
                        </div>

                </section>

            </div>
            <!--            /* barra lateral derecha */ -->
            <?php get_sidebar(); ?>
        </div>
        <?php else : ?>
        <p><?php _e('Lo siento!, no hay entradas.'); ?></p>
        <?php endif; ?>

    </div>
    <hr>
    <!-- Archivo de pié global de Wordpress -->
    <?php get_footer(); ?>