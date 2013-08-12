<?php
/*
Plugin Name: shuFilter 2
Plugin URI: shuvarek.co.uk
Description: Adding timestamp on the end of the content.
Author: Shuvarek
Author URI: thhp://shuvarek.co.uk
Version 1.0
*/


add_filter('the_content', 
	function($content) {
	return $content . ' ' . time();
	}
);

?>
