<?php

/* Don't edit this file. Use a child theme instead. */

namespace Kntnt_Canvas;

new class {

	private $ns;

	private $theme_uri;

	private $theme_dir;

	private $theme;

	private $theme_style;

	private $theme_script;

	private $child_theme;

	private $child_theme_style = null;

	private $child_theme_script = null;

	public function __construct() {

		$this->ns = sanitize_title( __NAMESPACE__ );

		$this->theme_dir = get_template_directory();
		$this->theme_uri = get_template_directory_uri();

		$this->child_theme_dir = get_stylesheet_directory();
		$this->child_theme_uri = get_stylesheet_directory_uri();

		$this->theme            = wp_get_theme( $this->ns );
		$this->theme_style      = "$this->theme_uri/assets/theme.css";
		$this->theme_script     = "$this->theme_uri/assets/theme.min.js";
		$this->theme_textdomain = $this->theme->get( 'TextDomain' );

		if ( $this->child_theme_dir != $this->theme_dir ) {
			$this->child_theme            = wp_get_theme();
			$this->child_theme_style      = file_exists( "$this->child_theme_dir/assets/theme.css" ) ? "$this->child_theme_uri/assets/theme.css" : "$this->child_theme_uri/style.css";
			$this->child_theme_script     = file_exists( "$this->child_theme_dir/assets/theme.min.js" ) ? "$this->child_theme_uri/assets/theme.min.js" : ( file_exists( "$this->child_theme_dir/assets/theme.js" ) ? "$this->child_theme_uri/assets/theme.js" : null );
			$this->child_theme_textdomain = $this->child_theme->get( 'TextDomain' );
		}

		add_action( 'after_setup_theme', [ $this, 'setup' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_assets' ] );
		add_action( 'init', [ $this, 'enqueue_core_block_css' ] );
		add_action( 'init', [ $this, 'register_block_style' ] );
		add_action( 'init', [ $this, 'register_block_pattern_categories' ] );

	}

	public function setup() {

		// Support translation.
		load_theme_textdomain( $this->theme_textdomain );
		if ( $this->child_theme_textdomain ) {
			load_theme_textdomain( $this->child_theme_textdomain );
		}

		// Enqueue editor styles.
		$editor_styles = [ $this->theme_style ];
		if ( $this->child_theme_style ) {
			$editor_styles[] = $this->child_theme_style;
		}
		add_editor_style( $editor_styles );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}

	public function enqueue_assets() {

		wp_enqueue_style( $this->ns, $this->theme_style, [], $this->theme->version );
		if ( $this->child_theme_style ) {
			wp_enqueue_style( $this->child_theme->stylesheet, $this->child_theme_style, [ $this->ns ], $this->child_theme->version );
		}

		wp_enqueue_script( $this->ns, $this->theme_script, [], $this->theme->version, [ 'strategy' => 'async', 'in_footer' => true ] );
		if ( $this->child_theme_script ) {
			$args = apply_filters( 'kntnt_canvas_child_script_args', [ 'strategy' => 'async', 'in_footer' => true ] );
			wp_enqueue_script( $this->child_theme->stylesheet, $this->child_theme_script, [ $this->ns ], $args );
		}

	}

	public function enqueue_core_block_css() {

		$files = glob( "$this->theme_dir/assets/core-block-css/*" );

		foreach ( $files as $file ) {

			$block_slug = basename( $file, '.css' );
			$block_name = 'core/' . substr( $block_slug, 5 );
			$block_file = "assets/core-block-css/$block_slug.css";

			wp_enqueue_block_style( $block_name, [
				'handle' => "kntnt-canvas-$block_slug",
				'src'    => get_theme_file_uri( $block_file ),
				'path'   => get_theme_file_path( $block_file ),
			] );

		}
	}

	public function register_block_style() {

		$block_styles = [
			'core/separator' => [
				[
					'name'  => 'wide-dotted',
					'label' => 'Wide Dotted'
				],
				[
					'name'  => 'wide-dashed',
					'label' => 'Wide Dashed'
				],
				[
					'name'  => 'wide-double',
					'label' => 'Wide Double'
				],
				[
					'name'  => 'hidden',
					'label' => 'Hidden'
				],
			]
		];

		foreach ( $block_styles as $name => $styles ) {
			foreach ( $styles as $style ) {
				register_block_style( $name, $style );
			}
		}

	}

	public function register_block_pattern_categories() {

		$pattern_categories = [
			'hero'          => [
				'label'       => __( 'Hero sections', 'kntnt-canvas' ),
				'description' => __( 'Introductory section at top of page.', 'kntnt-canvas' ),
			],
			'heading'       => [
				'label'       => __( 'Heading sections', 'kntnt-canvas' ),
				'description' => __( 'Introductory section at top of posts.', 'kntnt-canvas' ),
			],
			'heading_parts' => [
				'label'       => __( 'Heading parts', 'kntnt-canvas' ),
				'description' => __( 'Patterns used to build headings.', 'kntnt-canvas' ),
			]
		];

		foreach ( $pattern_categories as $slug => $category ) {
			register_block_pattern_category( $slug, $category );
		}

	}

};