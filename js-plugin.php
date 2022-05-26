<?php 
/**
 * Plugin Name: Js Custom Plugin 
 * Description: This plugin injects Javascript code at the bottom of the page
 * Version: 1.0
 * Author: Yamil Szyrko
 */

add_action('wp_footer', function(){?>

    <script>
        // Here you can add the custom script
    </script>

<?php }  ,9999); ?>