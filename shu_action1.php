<?php
/*
Plugin Name: ShuAction 1
Plugin URI: shuvarek.co.uk
Description: Just for trying.
Author: Shuvarek
Author URI: thhp://shuvarek.co.uk
Version 1.0
*/


add_action('wp_footer',
	function() {
		echo 'Hello from the footer!';
	}
);

?>
