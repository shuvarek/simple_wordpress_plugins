<?php
/*
Plugin Name: ShuAction 2
Plugin URI: shuvarek.co.uk
Description: Sent email when comment is posted.
Author: Shuvarek
Author URI: thhp://shuvarek.co.uk
Version 1.0
*/


add_action('wp_footer',
	function() {
		$email = get_bloginfo('admin_email');
		wp_mail(
			$email,
			'New comment Posted on shuvarek.byethost32.com',
			'A new commnet has been left on your experimental blog.'
		);
		
	}
);

?>
