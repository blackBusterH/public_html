<?php

function get_header($name = null) {
    /**
     * Loads header from the server
     *
     * @since 9/18/21
     * @since 9/18/21 The `$name` parameter was added.
     *
     * @param string|null $name Name of the specific header file to use. Null for the default header.
     */

    if ($name === null) {
        return $name = 'header.php';
    }
    
    return require($name);
}

function get_footer($name = null) {
    /**
     * Loads footer from the server
     *
     * @since 9/18/21
     * @since 9/18/21 The `$name` parameter was added.
     *
     * @param string|null $name Name of the specific header file to use. Null for the default header.
     */

    if ($name === null) {
        return $name = 'footer.php';
    }

    return require($name);
}
?>