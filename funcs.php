<?php

function get_header(){
    /**
     * @Author          : Brendon Vinjari
     * @Description     : Get header file from the server
     * @Created         : 2:15 PM - 10/4/2021
     * @Version         : 1.0.0
     **/

    if(!file_exists('header.html')) {
        echo "<h1 class='missing-header'>The header file is missing! <br>Please create a header.html file and insert your header code.</h1>>";
        return;
    }

    return require('header.html');

}