<?php

/**
 * The public-facing functionality of the plugin.
 */
class VisualBudget_Public {

	/**
	 * Initialize the class and set its properties.
	 */
	public function __construct() {

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 */
	public function enqueue_styles() {

		wp_enqueue_style( 'vb_public_css', plugin_dir_url( __FILE__ ) . 'css/visualbudget-public.css', array(), $this->version, 'all' );

        // Add the VB admin CSS file
        wp_enqueue_style( 'vis_css', plugin_dir_url( __FILE__ ) . '../vis/vb.css', array(), VISUALBUDGET_VERSION, 'all' );
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 */
	public function enqueue_scripts() {

        // Add D3
        wp_enqueue_script( 'd3_js', 'https://cdnjs.cloudflare.com/ajax/libs/d3/4.2.6/d3.min.js', array(), VISUALBUDGET_VERSION, false );

		wp_enqueue_script( 'vb_public_js', plugin_dir_url( __FILE__ ) . 'js/visualbudget-public.js', array( 'jquery' ), $this->version, false );

        // Add the visualization js file and submodules.
        wp_enqueue_script( 'vb_js', plugin_dir_url( __FILE__ ) . '../vis/vb.js', array( 'jquery' ), VISUALBUDGET_VERSION, false );
        wp_enqueue_script( 'vb_linechart_js', plugin_dir_url( __FILE__ ) . '../vis/vb-linechart.js', array( 'jquery' ), VISUALBUDGET_VERSION, false );

	}

}
