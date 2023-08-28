<?php

	define("COMPU_THEME_ROOT", get_template_directory_uri());
	define("COMPU_CSS_DIR", COMPU_THEME_ROOT . "/css");
	define("COMPU_JS_DIR", COMPU_THEME_ROOT . "/js");
	define("COMPU_IMG_DIR", COMPU_THEME_ROOT . "/images");


	add_action( 'wp_enqueue_scripts', 'up_style');

	function up_style(){
		wp_enqueue_style( 'my_main', COMPU_CSS_DIR . '/style.min.css', null, time());
        wp_enqueue_style( 'my_owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css?_v=20230828142956', null, time());
        wp_enqueue_style( 'my_owl_theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css?_v=20230828142956', null, time());

		wp_enqueue_script('my_owl_js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js?_v=20230828142956', null, time(), true);
		wp_enqueue_script( 'appjs', COMPU_JS_DIR . '/app.min.js', array('jquery'), null, true);
	}