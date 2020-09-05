<?php get_header(); ?>

<div class="container mb-5 mt-5">

  <!--
     entrada del blog
    -->

  <div class="card-deck font-weight-light">
    <div class="row">

      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
          <div class="col-md-8">
            <h2><a class='font-weight-light' style="color:#000"><?php the_title(); ?></a></h2>
            <div class='text-black-50'>
              <address>Autor: <?php the_author_posts_link(); ?></address>Fecha: <?php the_time('F, j, Y'); ?>
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid mb-3'));
              }
              ?>
            </div>
            <div class='text-justify'>
              <?php the_content(); ?>
            </div>
            
            <?php
            // si los comentarios estan abiertos cargamos ultimos comentarios.
            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;
            ?>
            

          </div>
          <!--            /* barra lateral derecha */ -->

          <?php get_sidebar(); ?>


    </div>

<?php endwhile;
      endif;  ?>



<!-- // paginacion -->
<div class="card-body" style="color:#e95420">
  <nav>
    <?php echo paginate_links(); ?>
  </nav>
</div>
  </div>

</div>
<!--
    fin de la entradas del Blog
    -->


</div>
<div class="container">
  <?php get_sidebar(); ?>

</div>
<hr>


  <?php get_footer(); ?>
