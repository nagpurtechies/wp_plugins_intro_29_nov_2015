<?php
/**
 * @package plugin1
 * @version 0.0.1
 */
/*
Plugin Name: plugin1
Plugin URI: http://rtcamp.com/Visitpluginsite
Description: demo pluing1
Author: rtCamp
Version: 0.0.1
Author URI: http://rtcamp.com/
*/

function plugin1_notice() {
	$class = "updated";
        //$class = "update-nag";
	$message = "plugin1_notice";
        echo"<div class=\"$class\"> <p>$message</p></div>"; 
}
add_action( 'admin_notices', 'plugin1_notice' );


function plugin1_the_content($content){
    $search  = array('hello', 'test');
    $replace = array('HELLO', 'TEST');
    $content = str_replace($search, $replace, $content);
    return $content;
}
add_filter( 'the_content', 'plugin1_the_content' , 20);
#add_filter( 'the_content', 'plugin1_the_content' , 10);


