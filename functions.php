<?php
/**
*テーマ機能の追加
*
* @version 1.0.0
* @since   1.0.0
* @author  a.iwata
*
*/
function theme_setup() {
	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_setup' );
