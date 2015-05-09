<?php
/**
 * Plugin Name:  Prevent Site Indexing
 * Plugin URI:   http://github.com/ptahdunbar/prevent-site-indexing
 * Description:  Prevents the site from being indexed by search engines.
 * Version:      1.0.0
 * Author:       Ptah Dunbar
 * Author URI:   http://github.com/ptahdunbar
 * License:      GPL2+
 */

add_action('template_redirect', 'pressvarrs_prevent_site_indexing');
function pressvarrs_prevent_site_indexing()
{
	if ( defined('WP_ENV') && WP_ENV !== 'production' ) {
		add_action('pre_option_blog_public', '__return_zero');
	}
}