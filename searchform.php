
<!--
formulario de busqueda
  -->
  <div class='mt-2'>
<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="Búscalo" value="<?php echo get_search_query(); ?>">
    <input class="btn btn-sm font-weight-light" style='background-color:#77216F; color:white;   border:0px;' type="submit" value="Buscar">
</form>
  </div>
