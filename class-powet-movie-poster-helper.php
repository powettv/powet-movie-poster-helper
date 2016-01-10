<?php

/*
Plugin Name: Powet Movie Poster Helper
Description: Plugin to help authoring of Movie Poster posts
Author: Crazy Jaco
Author URI: http://github.com/crazyjaco
Version: 1.1.0
*/


class Class_Powet_Movie_Poster_Helper {

	private static $instance = false;

	public static function instance(){

		if ( ! self::$instance ) {
			self::$instance = new Class_Powet_Movie_Poster_Helper;			
		}
		return self::$instance;
	} // End function instance.

	function __construct(){
		add_action( 'media_buttons' ,         array( $this, 'add_movie_poster_template_button_to_editor' ) );
		add_action( 'admin_enqueue_scripts',  array( $this, 'enqueue_admin_scripts_styles' ) );

	} // End function __construct.

	function admin_enqueue_scripts_styles() {
		wp_enqueue_script('powet-movie-poster-helper', plugins_url( '../js/powet-movie-poster-helper.js', __FILE__ ), array( 'jquery' ), '1.0', true );
	} // End function admin_enqueue_scripts_styles.

	function add_movie_poster_template_button_to_editor( $editor_id = "content" ) {

		$img = '<span class="wp-media-buttons-icon"></span> ';

		$id_attribute = ' id="insert-movie-poster-template-button"';
		printf( '<a href="#"%s class="button insert-movie-poster-template" data-editor="%s" title="%s">%s</a>',
			$id_attribute,
			esc_attr( $editor_id ),
			esc_attr__( 'Add Movie Poster Template' ),
			$img . __( 'Add Movie Poster Template' )
		);

	} // end function add_movie_poster_template_button_to_editor.	

}
 Class_Powet_Movie_Poster_Helper::instance();