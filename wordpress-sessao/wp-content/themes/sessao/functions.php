<?php

add_action( 'init', 'register_cpt_noticias' );
function register_cpt_noticias(){

	$labels = array( 
		'name' => _x( 'Notícias', 'noticias' ),
		'singular_name' => _x( 'Notícias', 'noticias' ),
		'add_new' => _x( 'Cadastrar', 'noticias' ),
		'add_new_item' => _x( 'Cadastrar', 'noticias' ),
		'edit_item' => _x( 'Editar', 'noticias' ),
		'new_item' => _x( 'Novo', 'noticias' ),
		'view_item' => _x( 'Ver', 'noticias' ),
		'search_items' => _x( 'Procurar', 'noticias' ),
		'not_found' => _x( 'Nenhum registro encontrado', 'noticias' ),
		'not_found_in_trash' => _x( 'Nenhum registro encontrado na lixeira', 'noticias' ),
		'parent_item_colon' => _x( 'Parent:', 'noticias' ),
		'menu_name' => _x( 'Notícia', 'noticias' ),
	);

	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,        
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,       
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'capability_type' => 'post',
		'menu_position' => 11
	);

	register_post_type( 'noticias', $args );
}

add_action('admin_menu', 'register_custom_menu_page');
	function register_custom_menu_page(){
		add_menu_page('Redes Sociais', 'Redes Sociais', 'edit_posts', 'post.php?post=10&action=edit', '', '', 12);
	}