<?php 
function ds_style(){
    wp_enqueue_style('digitalschool-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ds_style');

function ds_menu(){
    register_nav_menus( array(
    'primary'=>'Primary Menu')
);
}

add_action('after_setup_theme', 'ds_menu');

// <<<<<<< HEAD
// add_action('wp_enqueue_scripts', function(){
//     if(is_page_template('aboutus.php')){
//         wp_enqueue_script(
// =======
// add_action('wp_enqueue_script', function(){
//     if(is_page_template('about-us')){
//         wp_enqueue_scripts(
// >>>>>>> dbe17b626a1d82634e1f9396880d34bceb8405fd
//             'tailwing-play',
//             'https://cdn.tailwindcss.com'
//         );
//     }
// });


?>