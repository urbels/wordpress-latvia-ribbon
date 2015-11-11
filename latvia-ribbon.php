<?php
/**
 * @package latvia-ribbon
 * @version 1.0
 */
/*
Plugin Name: Latvia Ribbon
Plugin URI: http://wordpress.org/plugins/latvia-ribbon
Description: Latvia Ribbon for your website.
Author: Edža
Version: 1.0
License: GPLv2
Author URI: http://edzus.lv
*/

function render_latvia_ribbon() {
	$ribbon_url = plugins_url('latvia-ribbon.png', __FILE__ );
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 28 : 0;
	} else {
		$padding_top = 0;
	}
	echo "<a target='_blank' class='latvia-ribbon' href='https://lv.wikipedia.org/wiki/L%C4%81%C4%8Dpl%C4%93%C5%A1a_diena'><img src='{$ribbon_url}' alt='Lāčplēša diena' style='position: fixed; top: ".$padding_top ."px; right: 0; z-index: 100000; cursor: pointer; border:none;' /></a>";
}
add_action('wp_footer', 'render_latvia_ribbon');
