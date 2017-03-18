<?php
	require "settings.php";
	/* Add Bootstrap, FontAwesome & JQuery */
	function addDependencies () {
		wp_enqueue_style('style', get_stylesheet_uri(), array(), '2.2');
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', "https://code.jquery.com/jquery-2.2.0.min.js", array(), '2.2.0', true);
	    wp_enqueue_script('website-js', get_template_directory_uri() . '/js/website.min.js', array('jquery'), '1.6', true);
}
	function register_widgets () {
		if ( function_exists('register_sidebar') ) {
			register_sidebar(
				array(
					'name' => 'instagram',
					'id' => 'instagram',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
				)
			);
		}
	}
    /* Options ACF*/
    if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Configurações Gerais',
		'menu_title'	=> 'Configurações Gerais',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
    /*Custom WordPress Login Logo*/
    function custom_login_logo() {
		echo "<style type=\"text/css\">
		body.login div#login h1 a {
			background-image: url(".get_bloginfo('template_directory')."/img/logo-black.svg);
			-webkit-background-size: auto;
			background-size: auto;
			margin: 0 0 25px;
			width: 320px;
			height: 120px
		}
		</style>";
}
    add_action( 'login_enqueue_scripts', 'custom_login_logo' );	
	/* Creates Postagens */
	add_action('init', 'type_post_postagens'); 
	function type_post_postagens() { 
		$labels = array(
			'name' => _x('Postagens', 'post type general name'),
			'singular_name' => _x('Postagem', 'post type singular name'),
			'add_new' => _x('Novo', 'Novo item'),
			'add_new_item' => __('Novo'),
			'edit_item' => __('Editar'),
			'new_item' => __('Novo'),
			'view_item' => __('Ver'),
			'search_items' => __('Procurar'),
			'not_found' =>  __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Postagens',
		); 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,			
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-welcome-widgets-menus',	
			'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
        ); 
            register_post_type( 'postagem' , $args );
            flush_rewrite_rules();
}
    /* Creates Artigos */
	add_action('init', 'type_post_artigos'); 
	function type_post_artigos() { 
		$labels = array(
			'name' => _x('Artigos', 'post type general name'),
			'singular_name' => _x('Artigo', 'post type singular name'),
			'add_new' => _x('Adicionar', 'Novo'),
			'add_new_item' => __('Novo'),
			'edit_item' => __('Editar'),
			'new_item' => __('Novo'),
			'view_item' => __('Ver'),
			'search_items' => __('Procurar'),
			'not_found' =>  __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Artigos',
		); 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,			
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-format-aside',		
			'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
        ); 
            register_post_type( 'artigo' , $args );
            flush_rewrite_rules();
}
    /* Creates Textos */
	add_action('init', 'type_post_textos'); 
	function type_post_textos() { 
		$labels = array(
			'name' => _x('Textos', 'post type general name'),
			'singular_name' => _x('Texto', 'post type singular name'),
			'add_new' => _x('Adicionar', 'Novo'),
			'add_new_item' => __('Novo'),
			'edit_item' => __('Editar'),
			'new_item' => __('Novo'),
			'view_item' => __('Ver'),
			'search_items' => __('Procurar'),
			'not_found' =>  __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Textos',
		); 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,			
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-media-text',		
			'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
        ); 
            register_post_type( 'texto' , $args );
            flush_rewrite_rules();
}
    /* Creates Livros */
	add_action('init', 'type_post_livros'); 
	function type_post_livros() { 
		$labels = array(
			'name' => _x('Livros', 'post type general name'),
			'singular_name' => _x('Livro', 'post type singular name'),
			'add_new' => _x('Adicionar', 'Novo'),
			'add_new_item' => __('Novo'),
			'edit_item' => __('Editar'),
			'new_item' => __('Novo'),
			'view_item' => __('Ver'),
			'search_items' => __('Procurar'),
			'not_found' =>  __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Livros',
		); 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,			
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-book',	
			'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
        ); 
            register_post_type( 'livro' , $args );
            flush_rewrite_rules();
}
    /* Creates PodCast */
	add_action('init', 'type_post_podcasts'); 
	function type_post_podcasts() { 
		$labels = array(
			'name' => _x('PodCasts', 'post type general name'),
			'singular_name' => _x('PosCast', 'post type singular name'),
			'add_new' => _x('Adicionar', 'Novo'),
			'add_new_item' => __('Novo'),
			'edit_item' => __('Editar'),
			'new_item' => __('Novo'),
			'view_item' => __('Ver'),
			'search_items' => __('Procurar'),
			'not_found' =>  __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'PodCasts',
		); 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,			
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-microphone',	
			'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
        ); 
            register_post_type( 'podcast' , $args );
            flush_rewrite_rules();
}
    /* Creates Filmes */
	add_action('init', 'type_post_filmes'); 
	function type_post_filmes() { 
		$labels = array(
			'name' => _x('Filmes', 'post type general name'),
			'singular_name' => _x('Filme', 'post type singular name'),
			'add_new' => _x('Adicionar', 'Novo'),
			'add_new_item' => __('Novo'),
			'edit_item' => __('Editar'),
			'new_item' => __('Novo'),
			'view_item' => __('Ver'),
			'search_items' => __('Procurar'),
			'not_found' =>  __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Filmes',
		); 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,			
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-video-alt3',	
			'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
        ); 
            register_post_type( 'filme' , $args );
            flush_rewrite_rules();
}
/* Creates Fórum */
	add_action('init', 'type_post_foruns'); 
	function type_post_foruns() { 
		$labels = array(
			'name' => _x('Fóruns', 'post type general name'),
			'singular_name' => _x('Fórum', 'post type singular name'),
			'add_new' => _x('Adicionar', 'Novo'),
			'add_new_item' => __('Novo'),
			'edit_item' => __('Editar'),
			'new_item' => __('Novo'),
			'view_item' => __('Ver'),
			'search_items' => __('Procurar'),
			'not_found' =>  __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Fóruns',
		); 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,			
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-groups',	
			'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
        ); 
            register_post_type( 'forum' , $args );
            flush_rewrite_rules();
}
	/* Creates Links */
	add_action('init', 'type_post_links'); 
	function type_post_links() { 
		$labels = array(
			'name' => _x('Links', 'post type general name'),
			'singular_name' => _x('Link', 'post type singular name'),
			'add_new' => _x('Adicionar', 'Novo'),
			'add_new_item' => __('Novo'),
			'edit_item' => __('Editar'),
			'new_item' => __('Novo'),
			'view_item' => __('Ver'),
			'search_items' => __('Procurar'),
			'not_found' =>  __('Nenhum registro encontrado'),
			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Links',
		); 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,			
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-format-aside',		
			'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
        ); 
            register_post_type( 'link' , $args );
            flush_rewrite_rules();
}
            /* Creates Category */
            register_taxonomy(
				"categorias",
				array(
                        "postagem",
						"filme",
						"video",
						"podcast",
						"livros",
						"artigo",
						"texto",
						"forum",
						"link",
                ), 
                array(            
                    "label" => "Categorias", 
                        "singular_label" => "Categoria", 
                        "rewrite" => true,
                        "hierarchical" => true
            	)
            );

	/* Change login page logo link */
	function changeLoginLogoUrl() {
	    return home_url();
}
	/* Change login page logo title text */
	function changeLoginLogoUrlTitle() {
	    return 'Teoria da Complexidade';
}
	/* Customize admin menu */
	function customizeMenu () {
		remove_menu_page('edit.php');
}
	/* Create Menus */
	register_nav_menus(array(
		'home-menu' => __('Menu Home', 'home-menu'),
		'inner-menu' => __('Menu Internas', 'inner-menu'),
	));
	
	function themeSetup() {
		/* Register widgets */
		add_action( 'widgets_init', 'register_widgets' );
		/* Scripts */
		add_action ('wp_enqueue_scripts', 'addDependencies');
		/* Hide admin top bar */
		add_filter('show_admin_bar', '__return_false');
		/* Turn-off feeds */
		remove_action ('do_feed_rdf', 'do_feed_rdf', 10, 1);
		remove_action ('do_feed_rss', 'do_feed_rss', 10, 1);
		remove_action ('do_feed_rss2', 'do_feed_rss2', 10, 1);
		remove_action ('do_feed_atom', 'do_feed_atom', 10, 1);
		/* Remove emoji detection scripts and emoji styles */
		remove_action ('wp_head', 'print_emoji_detection_script', 7);
		remove_action ('admin_print_scripts', 'print_emoji_detection_script');
		remove_action ('wp_print_styles', 'print_emoji_styles');
		remove_action ('admin_print_styles', 'print_emoji_styles');
		/* Remove feeds links from header */
		remove_action ('wp_head', 'feed_links_extra', 3);
		remove_action ('wp_head', 'feed_links', 2);
		/* Remove RSD, WLW Manifest, shortlink & generator from header */
		remove_action ('wp_head', 'rsd_link');
		remove_action ('wp_head', 'wlwmanifest_link');
		remove_action ('wp_head', 'wp_shortlink_wp_head');
		remove_action ('wp_head', 'wp_generator');
		remove_action('wp_head', 'rel_canonical');
		/* Remove WPML generator tag from header */
		if ( ! empty ( $GLOBALS['sitepress'] ) ) {
		    add_action( 'wp_head', function()
		    {
		        remove_action(
		            current_filter(),
		            array ( $GLOBALS['sitepress'], 'meta_generator_tag' )
		        );
		    },
		    0
		    );
		}
}
	add_action('admin_init', 'display_theme_panel_fields');
	add_action('after_setup_theme', 'themeSetup');
?>
