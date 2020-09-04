<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<div class="container mb-5 mt-5 ">
    <!-- Listado de posts -->

    <div class="card-deck">
        <div class="row">
            <div class="col-md-8" style='color:#333333'>
                <?php if ( have_posts() ) : ?>

                <section>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article>
                        <header>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>

                        </header>
                        <?php if (has_post_thumbnail()) {
              the_post_thumbnail('medium', array('class' => 'img-fluid mb-3'));
                  }?>


                        <?php the_excerpt(); ?>
                        <footer>
                            <address>Por <?php the_author_posts_link() ?></address>
                        </footer>
                    </article>
                    <?php endwhile; ?>
                    <div class="pagination mb-5 mt-5" style='color:#dd4814'>
                      <nav>
                      <?php echo paginate_links(); ?>
                      </nav> 
                     </div>
           </div>
          <!--            /* barra lateral derecha */ -->

          <?php get_sidebar(); ?>
                    </div>
                </section>
                <?php else : ?>
                <p><?php _e('Lo siento!, no hay entradas.'); ?></p>
                <?php endif; ?>
                <!-- Archivo de barra lateral por defecto -->
                <?php get_sidebar(); ?>

      </div>
                <!-- Archivo de pié global de Wordpress -->
                <?php get_footer(); ?>