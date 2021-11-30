<form role="search" class="wp-block-search search-form-home" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-input search-div-home">
        <input type="search" class="form-control search-input-home" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'astromag' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php esc_attr_x( 'Search for:', 'label', 'astromag' ); ?>">
    <button type="submit" class="wp-block-search__button search-btn-home"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
</form>