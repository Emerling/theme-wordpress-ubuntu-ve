<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<div class="container mb-5 mt-5 ">
    <!-- Listado de posts -->
    <div class="card-deck">
        <div class="row">
            <div class="col-md-8 font-weight-light" style='color:#333333'>
                <?php if (have_posts()) : ?>

                <section>
                    <?php while (have_posts()) : the_post(); ?>
                    <article>
                        <header>
                            <h3><a class='font-weight-light' style='color:#e95420'
                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>

                        </header>
                        <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium', array('class' => 'img-fluid'));
                                } ?>

                        <?php the_excerpt(); ?>
                        <footer>
                            <address>Por <?php the_author_posts_link() ?></address>
                        </footer>
                    </article>
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