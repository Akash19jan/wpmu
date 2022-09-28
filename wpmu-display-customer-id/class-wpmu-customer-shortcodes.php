<?php
/**
 * Class WPMU_Customer_Shortcode
 *
 * @package WPMU_Customer_Shortcode
 * @author Akash Agrawal
 */

class WPMU_Customer_Shortcode {

	public $version = '1.0.1';

	public function run() {
		add_shortcode( 'wpmu_customer_id', array( $this, 'wpmu_customer_id' ), 10, 1 );
	}
	public function wpmu_customer_id( $atts = array() ) {
		$a = shortcode_atts( array(
			'class' 	=> 'wpmu-user-id-span',
			'prefix' 	=> 'EMP',
			'before'	=> '',
			'after'		=> '',
		), $atts );
		$user = wp_get_current_user();
		ob_start();
		printf("<span class='asdf%s'>%s %s%s %s</span>",$a['class'],$a['before'],$a['prefix'],$user->ID,$a['after']);
		return ob_get_clean();
	}
}