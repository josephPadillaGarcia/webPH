<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/blog/' ) ); ?>">
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Buscar">
    <button type="submit" id="searchsubmit">Buscar</button>
</form>
