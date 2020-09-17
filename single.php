<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<div class="container mb-5 mt-5 ">
    <!-- Listado de posts -->
    <div class="card-deck">
        <div class="row">
            <div class="col-md-8 font-weight-light" style='color:#333333'>
                <?php if (have_posts()) : ?>

                <section>

                    <div class="post content">
                        <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
                        <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium_large', array('class' => 'img-fluid mb-3'));
                                } ?>

                        <div class="content">
                            <?php the_content(); ?>
                        </div>
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