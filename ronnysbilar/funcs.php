<?php

function get_header($name = null) {
    /*
    * Author : Brendon Vinjari
    * Ta default header om inte annat anges!
    *
    * @param string|null $name headers namn, om inget anges så används default headern.
    *
    */

    if ($name === null) {
        if(file_exists('header.php')) {
            return $name = 'header.php';
        }
    }

    if (!file_exists($name)) {
        echo "<script>alert('Header saknas, kontrollera att rätt header namn anges eller att filen är skapad!')</script>";
        return;
    }
    
    return require($name);
}

function get_footer($name = null) {
    /*
    * Author : Brendon Vinjari
    * Ta default footer om inte annat anges!
    *
    * @param string|null $name footers namn, om inget anges så används default footern.
    *
    */

    if ($name === null) {
        if(file_exists('footer.php')){
        return $name = 'footer.php';
        }
    }
    

    if (!file_exists($name)) {
        echo "<script>alert('Footer saknas, kontrollera att rätt footer namn anges eller att filen är skapad!')</script>";
        return;
    }

    return require($name);
}