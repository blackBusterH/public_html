<?php
/* 
Plugin Name: Dala dubbeln
Plugin URI:  http://link to your plugin homepage
Description: This is a plugin made for daladubbeln.se.
Version:     1.0
Author:      Brendon Vinjari
Author URI:  http://dugga.se/~03bvi01/
License:     GPL2 etc
License URI: https://link to your plugin license

Copyright 2021 Brendon Vinjari (email : bvinjari@gmail.com)
(Dala dubblen) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(Dala dubbeln) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (Dala dubbeln). If not, see (http://link to your plugin license).
*/

/*Use this function to replace a single word*/
function renym_wordpress_typo_fix($text)
{
    return str_replace('wordpress', 'WordPress', $text);
}
add_filter('the_content', 'renym_wordpress_typo_fix');

/*Or use this function to replace multiple words or phrases at once*/
function renym_content_replace($content)
{
    $search  = array('wordpress', 'goat', 'Easter', '70', 'sensational');
    $replace = array('WordPress', 'coffee', 'Easter holidays', 'seventy', 'extraordinary');
    return str_replace($search, $replace, $content);
}
add_filter('the_content', 'renym_content_replace');

/*Use this function to add a note at the end of your content*/
function renym_content_footer_note($content)
{
    $content .= '<footer class="renym-content-footer">Thank you for reading this tutorial. Maybe next time I will let you buy me a coffee! For more WordPress tutorials visit our <a href="http://wpexplorer.com/blog" title="WPExplorer Blog">Blog</a></footer>';
    return $content;
}
add_filter('the_content', 'renym_content_footer_note');

//Add admin page to the menu
add_action('admin_menu', 'add_admin_page');
function add_admin_page()
{
    // add top level menu page
    add_menu_page(
        'Daladubbeln Settings', //Page Title
        'Daladubbeln', //Menu Title
        'manage_options', //Capability
        'my-plugin', //Page slug
        'admin_page_html' //Callback to print html
    );
}

//Admin page html callback
//Print out html for admin page
function admin_page_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }

    //Get the active tab from the $_GET param
    $default_tab = null;
    $tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;

?>
    <!-- Our admin page content should all be inside .wrap -->
    <div class="wrap">
        <!-- Print the page title -->
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <!-- Here are our tabs -->
        <nav class="nav-tab-wrapper">
            <a href="?page=my-plugin" class="nav-tab <?php if ($tab === null) : ?>nav-tab-active<?php endif; ?>">Default Tab</a>
            <a href="?page=my-plugin&tab=settings" class="nav-tab <?php if ($tab === 'settings') : ?>nav-tab-active<?php endif; ?>">Settings</a>
            <a href="?page=my-plugin&tab=tools" class="nav-tab <?php if ($tab === 'tools') : ?>nav-tab-active<?php endif; ?>">Tools</a>
        </nav>
        <div class="tab-content">
            <?php switch ($tab):
                case 'settings':
                    echo 'Settings'; //Put your HTML here
                    break;
                case 'tools':
                    echo 'Tools';
                    break;
                default:
                    echo 'Default tab';
                    break;
            endswitch; ?>
        </div>
    </div>
<?php
}

?>