<?php
function erika_theme_jquery(){
   wp_enqueue_script('jquery');
}
add_action('init', 'erika_theme_jquery');


?>