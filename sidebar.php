<div class="col-md-3 my-auto mx-auto font-weight-light bg-light">
  <?php if ( is_active_sidebar( 'widget-derecha' ) ) : ?>
          <?php dynamic_sidebar( 'widget-derecha' ); ?>
      <?php else : ?>
          <!-- Time to add some widgets! -->
          <?php echo "Es momento de agregar algunos Widgets" ;?>
      <?php endif; ?>
</div>
